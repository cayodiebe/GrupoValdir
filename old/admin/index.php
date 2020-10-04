<?php
    ob_start();
    include "seguranca.php"; // Inclui o arquivo com o sistema de segurança
    protegePagina(); // Chama a função que protege a página

    require 'editar/configuracoes.inc.php';
    require 'editar/paginas.class.php';
    require 'functions/db_connect.inc.php';
    require 'functions/crud.inc.php';
	require 'functions/functions.inc.php';
    include 'functions/variaveis.inc.php';
	$base = "http://".$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'],0,strrpos($_SERVER['PHP_SELF'],'/')+1);
?>
<!doctype html>
<html lang="pt">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Agência Toocano - Painel Admin" />
<meta name="author" content="Douglas Soriano" />
<meta charset="UTF-8">
<base href="<?=$base?>" />
<title>Painel Gerenciador de Conteúdo</title>
<script src="js/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/main.css" />
<!-- TEMA -->
<link rel="stylesheet" href="tema/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
<link rel="stylesheet" href="tema/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
<link rel="stylesheet" href="tema/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic"  id="style-resource-4">
<link rel="stylesheet" href="tema/css/neon.css"  id="style-resource-5">
<!-- TEMA -->
</head>

<body class="page-body">
    <div class="page-container">
        <?php
            $functions = new Funcoes();
            $banco = new Banco();
            include 'functions/menu.inc.php';
        ?>
        <div class="main-content">
            <div class="row">
                <div class="col-md-12 clearfix hidden-xs">
                    <ul class="list-inline links-list pull-right">
                        <li>
                            <a href="logout.php">Sair <i class="entypo-logout right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr />
            <?php
                if(isset($_GET['m']) && isset($_GET['t'])):
                    $modulo = $_GET['m'];
                    $tela = $_GET['t'];
            ?>
                <!-- MAPA -->
                <ol class="breadcrumb bc-3">
                    <li><a href="<?php echo $url_painel; ?>"><i class="entypo-home"></i>Home</a></li>
                    <li><a href="<?php echo $url_painel.'?m='.$modulo.'&t='.$tela; ?>"><?php echo ucwords(str_replace("_"," ",$modulo)); ?></a></li>
                    <li class="active"><strong><?php echo ucfirst($tela); ?></strong></li>
                </ol>
                <!-- MAPA -->
            <?php
                    # Chama a classe
                    $pagina = new Paginas($modulo);

                    echo '<h2>'.$pagina->titulo.'</h2><br>';
                    if( $modulo == 'newsletter' ){
                        echo '<a href="functions/export.inc.php?tipo=csv&tabela=newsletter&campo=email" title="Exportar" class="btn btn-green btn-sm btn-icon icon-left"><i class="entypo-pencil"></i>Exportar</a>';
                    }
                    if(isset($_POST['acao_form'])):
                        # Salva dados no banco
                        if(isset($_GET['id']))
                            $db = $functions->popularCampos($modulo,$pagina->campoID,$_GET['id']);
                        else
                            $db = null;
                        switch ($acao_form):
                            case 'editar':
                                if($functions->salvarDados($pagina->campos,$_POST,$_FILES,$pagina->campoID,$db,$tela,$banco,$pagina->tabela) > 0):
                                    $functions->printMSG("Dados alterados com sucesso. <a href='?m=".$modulo."&t=listar'><strong>Exibir registros</strong>.</a>","sucesso");
                                    unset($_POST);
                                else:
                                    $functions->printMSG("Nenhum dado foi alterado. <a href='?m=".$modulo."&t=listar'><strong>Exibir registros</strong>.</a>","alerta");
                                endif;
                            break;
                            case 'inserir':
                                if($functions->salvarDados($pagina->campos,$_POST,$_FILES,$pagina->campoID,$db,$tela,$banco,$pagina->tabela) > 0):
                                    $functions->printMSG("Dados alterados com sucesso. <a href='?m=".$modulo."&t=listar'><strong>Exibir registros</strong>.</a>","sucesso");
                                    unset($_POST);
                                else:
                                    $functions->printMSG("Nenhum dado foi alterado. <a href='?m=".$modulo."&t=listar'><strong>Exibir registros</strong>.</a>","alerta");
                                endif;
                            break;
                            case 'deletar':
                                if($functions->deletarRegistro($_POST,$pagina->campoID,$banco) > 0):
                                    $functions->printMSG("Excluido com sucesso. <a href='?m=".$modulo."&t=listar'><strong>Exibir registros</strong>.</a>","sucesso");
                                    unset($_POST);
                                else:
                                    $functions->printMSG("Nenhum dado foi alterado. <a href='?m=".$modulo."&t=listar'><strong>Exibir registros</strong>.</a>","alerta");
                                endif;
                            break;
                        endswitch;
                    else:
                        switch($tela):
                            case 'listar':
                                echo $functions->gerarLista($pagina->listar,$pagina->campoID,$pagina->tabela,$modulo,$pagina->campos);
                            break;
                            case 'deletar':
                                $formulario_pronto = $functions->gerarFormDeletar($_GET['id'],$pagina->tabela,$pagina->campoID,$tela,$pagina->operacoes);
                            break;
                            case 'teste':
                                $formulario_pronto = $functions->gerarFormDeletar($_GET['id'],$pagina->tabela,$pagina->campoID,$tela,$pagina->operacoes);
                            break;
                            default:
                                # Exibe o formulário
                                if(isset($_GET['id'])):
                                    $db = $functions->popularCampos($modulo,$pagina->campoID,$_GET['id']);
                                    $formulario_pronto = $functions->gerarForm($pagina->campos,$db,$tela,$pagina->operacoes,$pagina->tabela,$pagina->campoID);
                                else:
                                    $formulario_pronto = $functions->gerarForm($pagina->campos,null,$tela,$pagina->operacoes,$pagina->tabela,$pagina->campoID);
                                endif;
                            break;
                        endswitch;
                    endif;
                else:
                   //--
                endif;

                if(isset($formulario_pronto)):
                    echo '
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary" data-collapsed="0">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        '.ucfirst($tela).' '.ucwords(str_replace("_"," ",$modulo)).'
                                    </div>
                                </div>
                                <div class="panel-body">';
                    echo            $formulario_pronto;
                    echo '      </div>
                            </div>
                        </div>
                    </div>';

                endif;
            ?>

            <!-- FOOTER -->
            <footer class="main">
                <div class="pull-right">
                    &copy; 2014 <!--<a href="http://toocano.com.br/" target="_BLANK"><strong>Agência Toocano</strong></a>--> - Painel Gerenciador de Conteúdo <!-- Desenvolvido por Douglas Soriano -->
                </div>
            </footer>
        </div>
    </div>

    <?php
        switch($tela):
            case 'listar': ?>
                <script type="text/javascript">
                    jQuery(document).ready(function($){
                        $("#lista-dados").dataTable({
                            "sPaginationType": "bootstrap",
                            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Exibir todos"]],
                            "bStateSave": true
                        });
                    });
                </script>
    <?php   break;
        endswitch;
    ?>
     <script>

        // SLUG
        $(".slug-texto").change(function(){
            var texto = $(this).val();

            $.ajax({
                url: '../ajax/ajax.php',
                type: 'POST',
                data: {acao:'trazSlug',texto:texto},
            })
            .done(function(retorno){
                var texto = retorno.toString().replace('\t','')
                $(".slug").val(texto);
            })
        });

    </script>    
    <!-- TEMA -->
    <link rel="stylesheet" href="tema/js/wysihtml5/bootstrap-wysihtml5.css"  id="style-resource-1">
    <script src="tema/js/gsap/main-gsap.js" id="script-resource-1"></script>
    <script src="tema/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="tema/js/bootstrap.min.js" id="script-resource-3"></script>
    <script src="tema/js/joinable.js" id="script-resource-4"></script>
    <script src="tema/js/resizeable.js" id="script-resource-5"></script>
    <script src="tema/js/neon-api.js" id="script-resource-6"></script>
    <script src="tema/js/fileinput.js" id="script-resource-7"></script>
    <script src="tema/js/wysihtml5/wysihtml5-0.4.0pre.min.js" id="script-resource-7"></script>
    <script src="tema/js/wysihtml5/bootstrap-wysihtml5.js" id="script-resource-8"></script>
    <script src="tema/js/jquery.sparkline.min.js" id="script-resource-9"></script>
    <script src="tema/js/bootstrap-datepicker.js" id="script-resource-11"></script>
    <script src="tema/js/raphael-min.js" id="script-resource-12"></script>
    <script src="tema/js/morris.min.js" id="script-resource-13"></script>
    <script src="tema/js/toastr.js" id="script-resource-14"></script>
    <script src="tema/js/neon-custom.js" id="script-resource-16"></script>
    <script src="tema/js/neon-demo.js" id="script-resource-17"></script>
    <script src="tema/js/jquery.dataTables.min.js" id="script-resource-7"></script>
    <script src="tema/js/dataTables.bootstrap.js" id="script-resource-8"></script>
    <!-- TEMA -->
    <script src="js/jquery.maskMoney.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php 
    ob_end_flush();
?>

<script>
/*
* MultiSelect v0.9.12
* Copyright (c) 2012 Louis Cuny
*
* This program is free software. It comes without any warranty, to
* the extent permitted by applicable law. You can redistribute it
* and/or modify it under the terms of the Do What The Fuck You Want
* To Public License, Version 2, as published by Sam Hocevar. See
* http://sam.zoy.org/wtfpl/COPYING for more details.
*/

!function ($) {

  "use strict";


 /* MULTISELECT CLASS DEFINITION
  * ====================== */

  var MultiSelect = function (element, options) {
    this.options = options;
    this.$element = $(element);
    this.$container = $('<div/>', { 'class': "ms-container" });
    this.$selectableContainer = $('<div/>', { 'class': 'ms-selectable' });
    this.$selectionContainer = $('<div/>', { 'class': 'ms-selection' });
    this.$selectableUl = $('<ul/>', { 'class': "ms-list", 'tabindex' : '-1' });
    this.$selectionUl = $('<ul/>', { 'class': "ms-list", 'tabindex' : '-1' });
    this.scrollTo = 0;
    this.elemsSelector = 'li:visible:not(.ms-optgroup-label,.ms-optgroup-container,.'+options.disabledClass+')';
  };

  MultiSelect.prototype = {
    constructor: MultiSelect,

    init: function(){
      var that = this,
          ms = this.$element;

      if (ms.next('.ms-container').length === 0){
        ms.css({ position: 'absolute', left: '-9999px' });
        ms.attr('id', ms.attr('id') ? ms.attr('id') : Math.ceil(Math.random()*1000)+'multiselect');
        this.$container.attr('id', 'ms-'+ms.attr('id'));
        this.$container.addClass(that.options.cssClass);
        ms.find('option').each(function(){
          that.generateLisFromOption(this);
        });

        this.$selectionUl.find('.ms-optgroup-label').hide();

        if (that.options.selectableHeader){
          that.$selectableContainer.append(that.options.selectableHeader);
        }
        that.$selectableContainer.append(that.$selectableUl);
        if (that.options.selectableFooter){
          that.$selectableContainer.append(that.options.selectableFooter);
        }

        if (that.options.selectionHeader){
          that.$selectionContainer.append(that.options.selectionHeader);
        }
        that.$selectionContainer.append(that.$selectionUl);
        if (that.options.selectionFooter){
          that.$selectionContainer.append(that.options.selectionFooter);
        }

        that.$container.append(that.$selectableContainer);
        that.$container.append(that.$selectionContainer);
        ms.after(that.$container);

        that.activeMouse(that.$selectableUl);
        that.activeKeyboard(that.$selectableUl);

        var action = that.options.dblClick ? 'dblclick' : 'click';

        that.$selectableUl.on(action, '.ms-elem-selectable', function(){
          that.select($(this).data('ms-value'));
        });
        that.$selectionUl.on(action, '.ms-elem-selection', function(){
          that.deselect($(this).data('ms-value'));
        });

        that.activeMouse(that.$selectionUl);
        that.activeKeyboard(that.$selectionUl);

        ms.on('focus', function(){
          that.$selectableUl.focus();
        })
      }

      var selectedValues = ms.find('option:selected').map(function(){ return $(this).val(); }).get();
      that.select(selectedValues, 'init');

      if (typeof that.options.afterInit === 'function') {
        that.options.afterInit.call(this, this.$container);
      }
    },

    'generateLisFromOption' : function(option, index, $container){
      var that = this,
          ms = that.$element,
          attributes = "",
          $option = $(option);

      for (var cpt = 0; cpt < option.attributes.length; cpt++){
        var attr = option.attributes[cpt];

        if(attr.name !== 'value' && attr.name !== 'disabled'){
          attributes += attr.name+'="'+attr.value+'" ';
        }
      }
      var selectableLi = $('<li '+attributes+'><span>'+that.escapeHTML($option.text())+'</span></li>'),
          selectedLi = selectableLi.clone(),
          value = $option.val(),
          elementId = that.sanitize(value);

      selectableLi
        .data('ms-value', value)
        .addClass('ms-elem-selectable')
        .attr('id', elementId+'-selectable');

      selectedLi
        .data('ms-value', value)
        .addClass('ms-elem-selection')
        .attr('id', elementId+'-selection')
        .hide();

      if ($option.prop('disabled') || ms.prop('disabled')){
        selectedLi.addClass(that.options.disabledClass);
        selectableLi.addClass(that.options.disabledClass);
      }

      var $optgroup = $option.parent('optgroup');

      if ($optgroup.length > 0){
        var optgroupLabel = $optgroup.attr('label'),
            optgroupId = that.sanitize(optgroupLabel),
            $selectableOptgroup = that.$selectableUl.find('#optgroup-selectable-'+optgroupId),
            $selectionOptgroup = that.$selectionUl.find('#optgroup-selection-'+optgroupId);

        if ($selectableOptgroup.length === 0){
          var optgroupContainerTpl = '<li class="ms-optgroup-container"></li>',
              optgroupTpl = '<ul class="ms-optgroup"><li class="ms-optgroup-label"><span>'+optgroupLabel+'</span></li></ul>';

          $selectableOptgroup = $(optgroupContainerTpl);
          $selectionOptgroup = $(optgroupContainerTpl);
          $selectableOptgroup.attr('id', 'optgroup-selectable-'+optgroupId);
          $selectionOptgroup.attr('id', 'optgroup-selection-'+optgroupId);
          $selectableOptgroup.append($(optgroupTpl));
          $selectionOptgroup.append($(optgroupTpl));
          if (that.options.selectableOptgroup){
            $selectableOptgroup.find('.ms-optgroup-label').on('click', function(){
              var values = $optgroup.children(':not(:selected, :disabled)').map(function(){ return $(this).val() }).get();
              that.select(values);
            });
            $selectionOptgroup.find('.ms-optgroup-label').on('click', function(){
              var values = $optgroup.children(':selected:not(:disabled)').map(function(){ return $(this).val() }).get();
              that.deselect(values);
            });
          }
          that.$selectableUl.append($selectableOptgroup);
          that.$selectionUl.append($selectionOptgroup);
        }
        index = index == undefined ? $selectableOptgroup.find('ul').children().length : index + 1;
        selectableLi.insertAt(index, $selectableOptgroup.children());
        selectedLi.insertAt(index, $selectionOptgroup.children());
      } else {
        index = index == undefined ? that.$selectableUl.children().length : index;

        selectableLi.insertAt(index, that.$selectableUl);
        selectedLi.insertAt(index, that.$selectionUl);
      }
    },

    'addOption' : function(options){
      var that = this;

      if (options.value !== undefined && options.value !== null){
        options = [options];
      } 
      $.each(options, function(index, option){
        if (option.value !== undefined && option.value !== null &&
            that.$element.find("option[value='"+option.value+"']").length === 0){
          var $option = $('<option value="'+option.value+'">'+option.text+'</option>'),
              index = parseInt((typeof option.index === 'undefined' ? that.$element.children().length : option.index)),
              $container = option.nested == undefined ? that.$element : $("optgroup[label='"+option.nested+"']")

          $option.insertAt(index, $container);
          that.generateLisFromOption($option.get(0), index, option.nested);
        }
      })
    },

    'escapeHTML' : function(text){
      return $("<div>").text(text).html();
    },

    'activeKeyboard' : function($list){
      var that = this;

      $list.on('focus', function(){
        $(this).addClass('ms-focus');
      })
      .on('blur', function(){
        $(this).removeClass('ms-focus');
      })
      .on('keydown', function(e){
        switch (e.which) {
          case 40:
          case 38:
            e.preventDefault();
            e.stopPropagation();
            that.moveHighlight($(this), (e.which === 38) ? -1 : 1);
            return;
          case 37:
          case 39:
            e.preventDefault();
            e.stopPropagation();
            that.switchList($list);
            return;
          case 9:
            if(that.$element.is('[tabindex]')){
              e.preventDefault();
              var tabindex = parseInt(that.$element.attr('tabindex'), 10);
              tabindex = (e.shiftKey) ? tabindex-1 : tabindex+1;
              $('[tabindex="'+(tabindex)+'"]').focus();
              return;
            }else{
              if(e.shiftKey){
                that.$element.trigger('focus');
              }
            }
        }
        if($.inArray(e.which, that.options.keySelect) > -1){
          e.preventDefault();
          e.stopPropagation();
          that.selectHighlighted($list);
          return;
        }
      });
    },

    'moveHighlight': function($list, direction){
      var $elems = $list.find(this.elemsSelector),
          $currElem = $elems.filter('.ms-hover'),
          $nextElem = null,
          elemHeight = $elems.first().outerHeight(),
          containerHeight = $list.height(),
          containerSelector = '#'+this.$container.prop('id');

      $elems.removeClass('ms-hover');
      if (direction === 1){ // DOWN

        $nextElem = $currElem.nextAll(this.elemsSelector).first();
        if ($nextElem.length === 0){
          var $optgroupUl = $currElem.parent();

          if ($optgroupUl.hasClass('ms-optgroup')){
            var $optgroupLi = $optgroupUl.parent(),
                $nextOptgroupLi = $optgroupLi.next(':visible');

            if ($nextOptgroupLi.length > 0){
              $nextElem = $nextOptgroupLi.find(this.elemsSelector).first();
            } else {
              $nextElem = $elems.first();
            }
          } else {
            $nextElem = $elems.first();
          }
        }
      } else if (direction === -1){ // UP

        $nextElem = $currElem.prevAll(this.elemsSelector).first();
        if ($nextElem.length === 0){
          var $optgroupUl = $currElem.parent();

          if ($optgroupUl.hasClass('ms-optgroup')){
            var $optgroupLi = $optgroupUl.parent(),
                $prevOptgroupLi = $optgroupLi.prev(':visible');

            if ($prevOptgroupLi.length > 0){
              $nextElem = $prevOptgroupLi.find(this.elemsSelector).last();
            } else {
              $nextElem = $elems.last();
            }
          } else {
            $nextElem = $elems.last();
          }
        }
      }
      if ($nextElem.length > 0){
        $nextElem.addClass('ms-hover');
        var scrollTo = $list.scrollTop() + $nextElem.position().top - 
                       containerHeight / 2 + elemHeight / 2;

        $list.scrollTop(scrollTo);
      }
    },

    'selectHighlighted' : function($list){
      var $elems = $list.find(this.elemsSelector),
          $highlightedElem = $elems.filter('.ms-hover').first();

      if ($highlightedElem.length > 0){
        if ($list.parent().hasClass('ms-selectable')){
          this.select($highlightedElem.data('ms-value'));
        } else {
          this.deselect($highlightedElem.data('ms-value'));
        }
        $elems.removeClass('ms-hover');
      }
    },

    'switchList' : function($list){
      $list.blur();
      this.$container.find(this.elemsSelector).removeClass('ms-hover');
      if ($list.parent().hasClass('ms-selectable')){
        this.$selectionUl.focus();
      } else {
        this.$selectableUl.focus();
      }
    },

    'activeMouse' : function($list){
      var that = this;

      this.$container.on('mouseenter', that.elemsSelector, function(){
        $(this).parents('.ms-container').find(that.elemsSelector).removeClass('ms-hover');
        $(this).addClass('ms-hover');
      });

      this.$container.on('mouseleave', that.elemsSelector, function () {
        $(this).parents('.ms-container').find(that.elemsSelector).removeClass('ms-hover');;
      });
    },

    'refresh' : function() {
      this.destroy();
      this.$element.multiSelect(this.options);
    },

    'destroy' : function(){
      $("#ms-"+this.$element.attr("id")).remove();
      this.$element.css('position', '').css('left', '')
      this.$element.removeData('multiselect');
    },

    'select' : function(value, method){
      if (typeof value === 'string'){ value = [value]; }

      var that = this,
          ms = this.$element,
          msIds = $.map(value, function(val){ return(that.sanitize(val)); }),
          selectables = this.$selectableUl.find('#' + msIds.join('-selectable, #')+'-selectable').filter(':not(.'+that.options.disabledClass+')'),
          selections = this.$selectionUl.find('#' + msIds.join('-selection, #') + '-selection').filter(':not(.'+that.options.disabledClass+')'),
          options = ms.find('option:not(:disabled)').filter(function(){ return($.inArray(this.value, value) > -1); });

      if (method === 'init'){
        selectables = this.$selectableUl.find('#' + msIds.join('-selectable, #')+'-selectable'),
        selections = this.$selectionUl.find('#' + msIds.join('-selection, #') + '-selection');
      }

      if (selectables.length > 0){
        selectables.addClass('ms-selected').hide();
        selections.addClass('ms-selected').show();

        options.prop('selected', true);

        that.$container.find(that.elemsSelector).removeClass('ms-hover');

        var selectableOptgroups = that.$selectableUl.children('.ms-optgroup-container');
        if (selectableOptgroups.length > 0){
          selectableOptgroups.each(function(){
            var selectablesLi = $(this).find('.ms-elem-selectable');
            if (selectablesLi.length === selectablesLi.filter('.ms-selected').length){
              $(this).find('.ms-optgroup-label').hide();
            }
          });

          var selectionOptgroups = that.$selectionUl.children('.ms-optgroup-container');
          selectionOptgroups.each(function(){
            var selectionsLi = $(this).find('.ms-elem-selection');
            if (selectionsLi.filter('.ms-selected').length > 0){
              $(this).find('.ms-optgroup-label').show();
            }
          });
        } else {
          if (that.options.keepOrder && method !== 'init'){
            var selectionLiLast = that.$selectionUl.find('.ms-selected');
            if((selectionLiLast.length > 1) && (selectionLiLast.last().get(0) != selections.get(0))) {
              selections.insertAfter(selectionLiLast.last());
            }
          }
        }
        if (method !== 'init'){
          ms.trigger('change');
          if (typeof that.options.afterSelect === 'function') {
            that.options.afterSelect.call(this, value);
          }
        }
      }
    },

    'deselect' : function(value){
      if (typeof value === 'string'){ value = [value]; }

      var that = this,
          ms = this.$element,
          msIds = $.map(value, function(val){ return(that.sanitize(val)); }),
          selectables = this.$selectableUl.find('#' + msIds.join('-selectable, #')+'-selectable'),
          selections = this.$selectionUl.find('#' + msIds.join('-selection, #')+'-selection').filter('.ms-selected').filter(':not(.'+that.options.disabledClass+')'),
          options = ms.find('option').filter(function(){ return($.inArray(this.value, value) > -1); });

      if (selections.length > 0){
        selectables.removeClass('ms-selected').show();
        selections.removeClass('ms-selected').hide();
        options.prop('selected', false);

        that.$container.find(that.elemsSelector).removeClass('ms-hover');

        var selectableOptgroups = that.$selectableUl.children('.ms-optgroup-container');
        if (selectableOptgroups.length > 0){
          selectableOptgroups.each(function(){
            var selectablesLi = $(this).find('.ms-elem-selectable');
            if (selectablesLi.filter(':not(.ms-selected)').length > 0){
              $(this).find('.ms-optgroup-label').show();
            }
          });

          var selectionOptgroups = that.$selectionUl.children('.ms-optgroup-container');
          selectionOptgroups.each(function(){
            var selectionsLi = $(this).find('.ms-elem-selection');
            if (selectionsLi.filter('.ms-selected').length === 0){
              $(this).find('.ms-optgroup-label').hide();
            }
          });
        }
        ms.trigger('change');
        if (typeof that.options.afterDeselect === 'function') {
          that.options.afterDeselect.call(this, value);
        }
      }
    },

    'select_all' : function(){
      var ms = this.$element,
          values = ms.val();

      ms.find('option:not(":disabled")').prop('selected', true);
      this.$selectableUl.find('.ms-elem-selectable').filter(':not(.'+this.options.disabledClass+')').addClass('ms-selected').hide();
      this.$selectionUl.find('.ms-optgroup-label').show();
      this.$selectableUl.find('.ms-optgroup-label').hide();
      this.$selectionUl.find('.ms-elem-selection').filter(':not(.'+this.options.disabledClass+')').addClass('ms-selected').show();
      this.$selectionUl.focus();
      ms.trigger('change');
      if (typeof this.options.afterSelect === 'function') {
        var selectedValues = $.grep(ms.val(), function(item){
          return $.inArray(item, values) < 0;
        });
        this.options.afterSelect.call(this, selectedValues);
      }
    },

    'deselect_all' : function(){
      var ms = this.$element,
          values = ms.val();

      ms.find('option').prop('selected', false);
      this.$selectableUl.find('.ms-elem-selectable').removeClass('ms-selected').show();
      this.$selectionUl.find('.ms-optgroup-label').hide();
      this.$selectableUl.find('.ms-optgroup-label').show();
      this.$selectionUl.find('.ms-elem-selection').removeClass('ms-selected').hide();
      this.$selectableUl.focus();
      ms.trigger('change');
      if (typeof this.options.afterDeselect === 'function') {
        this.options.afterDeselect.call(this, values);
      }
    },

    sanitize: function(value){
      var hash = 0, i, character;
      if (value.length == 0) return hash;
      var ls = 0;
      for (i = 0, ls = value.length; i < ls; i++) {
        character  = value.charCodeAt(i);
        hash  = ((hash<<5)-hash)+character;
        hash |= 0; // Convert to 32bit integer
      }
      return hash;
    }
  };

  /* MULTISELECT PLUGIN DEFINITION
   * ======================= */

  $.fn.multiSelect = function () {
    var option = arguments[0],
        args = arguments;

    return this.each(function () {
      var $this = $(this),
          data = $this.data('multiselect'),
          options = $.extend({}, $.fn.multiSelect.defaults, $this.data(), typeof option === 'object' && option);

      if (!data){ $this.data('multiselect', (data = new MultiSelect(this, options))); }

      if (typeof option === 'string'){
        data[option](args[1]);
      } else {
        data.init();
      }
    });
  };

  $.fn.multiSelect.defaults = {
    keySelect: [32],
    selectableOptgroup: false,
    disabledClass : 'disabled',
    dblClick : false,
    keepOrder: false,
    cssClass: ''
  };

  $.fn.multiSelect.Constructor = MultiSelect;

  $.fn.insertAt = function(index, $parent) {
    return this.each(function() {
      if (index === 0) {
        $parent.prepend(this);
      } else {
        $parent.children().eq(index - 1).after(this);
      }
    });
}

}(window.jQuery);

$('#my-select').multiSelect();</script>