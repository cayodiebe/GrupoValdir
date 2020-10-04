<?php $sobre = new Sobre_home($banco->getSobreHome()); ?>
<?php $servicos_itens = $banco->getServicosItens(); ?>
<?php $servicos = new Servicos($banco->getServicos()); ?>
<?php $projetos = new Projetos_home($banco->getProjetosHome()); ?>
<?php $projetos_itens = $banco->getProjetosItensHome(); ?>
<?php $porque_escolher = new Porque_escolher($banco->getPorqueEscolher()); ?>
<?php $parceiros = $banco->getParceiros(); ?>
<section class="container" id="home">
    <div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone sobre" id="">
        <h1>
            <span class="wow bounceInRight" style="visibility: visible; animation-name: bounceInDown;">
                <?php echo $sobre->gettitulo() ?>
            </span></h1>
        <div class="texto wow bounceInRight" style="visibility: visible; animation-name: bounceInLeft;" id="">
            <?php echo $sobre->gettexto() ?>
        </div>
        <div class="itens" id="">
            <div class="dados wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" id="">
                <span class="numero"><?php echo $sobre->getprojetos() ?></span><br>
                <span class="descricao">Projetos</span>
            </div>
            <div class="dados wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" style="text-align:center">
                <span class="numero"><?php echo $sobre->getclientes() ?></span><br>
                <span class="descricao">Clientes</span>
            </div>
            <div class="dados wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" style="text-align:center">
                <span class="numero"><?php echo $sobre->getparceiros() ?></span><br>
                <span class="descricao">Parceiros</span>
            </div>
            <div class="dados wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" style="text-align:right">
                <span class="numero"><?php echo $sobre->getpremios() ?></span><br>
                <span class="descricao">Prêmios</span>
            </div>
        </div>
        <br>
        <div class="saiba_mais wow bounceInRight" style="visibility: visible; animation-name: bounceInUp;" id="">
            <a href="<?php echo $base; ?>sobre" title="Sobre">
                <span>Saiba Mais</span>
            </a>
        </div>
    </div>
    <div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone servicos" id="">
        <h1><?php echo $servicos->gettitulo(); ?></h1>
        <center>
            <div class="texto wow bounceInDown" style="visibility: visible; animation-name: bounceInDown;" data-wow-duration="1.5s">
                <?php echo $servicos->gettexto(); ?>
            </div>
        </center>
        <?php $servico1 = new Servicos_itens($servicos_itens[0]); ?>
        <?php $servico2 = new Servicos_itens($servicos_itens[1]); ?>
        <?php $servico3 = new Servicos_itens($servicos_itens[2]); ?>
        <div class="itens" id="">
            <div class="item1 wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1.5s">
                <center>
                    <img src="<?php echo $base; ?>assets/images/<?php echo $servico1->getimagem() ?>" width="150" class="" alt="" />
                    <h2><?php echo $servico1->gettitulo() ?></h2>
                    <div class="texto" id="">
                        <?php echo $servico1->gettexto() ?>
                    </div>
                </center>
            </div>
            <center>
                <div class="item2 wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;" id="">
                    <img src="<?php echo $base; ?>assets/images/<?php echo $servico2->getimagem() ?>" width="150" class="" alt="" />
                    <h2><?php echo $servico2->gettitulo() ?></h2>
                    <div class="texto" id="">
                        <?php echo $servico2->gettexto() ?>
                    </div>
                </div>
            </center>
            <div class="item3 wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="1.5s">
                <img src="<?php echo $base; ?>assets/images/<?php echo $servico3->getimagem() ?>" width="150" class="" alt="" />
                <h2><?php echo $servico3->gettitulo() ?></h2>
                <div class="texto" id="">
                    <?php echo $servico3->gettexto() ?>
                </div>
            </div>
        </div>
        <div class="clearfloat"></div>
        <center>
            <div class="saiba_mais centerR">
                <a href="<?php echo $base; ?>servicos" title="Serviços">
                    <span>Saiba Mais</span>
                </a>
            </div>
        </center>
    </div>
    <div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone produtos" id="">
        <div class="conteudo wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="2s" id="">
            <h1><?php echo $projetos->gettitulo(); ?></h1>
            <div class="texto" id="">
               <?php echo $projetos->gettexto(); ?>
            </div>
            <div class="saiba_mais">
                <a href="<?php echo $base; ?>projetos" title="Porjetos">
                    <span>Saiba Mais</span>
                </a>
            </div>
        </div>
        <style type="text/css" media="screen">
            #home #carousel_produtos:before{
                    background-image: url(assets/images/<?php echo $projetos->getimagem_lateral(); ?>);
            }
        </style>
        <div class="quadro wow bounceInDown" style="visibility: visible; animation-name: bounceInDown;" data-wow-duration="2s"id="">
            <div class="grid-14-desktop grid-14-laptop grid-14-tablet grid-14-phone wow bounceInRight" data-wow-duration="2s" style="visibility: visible; animation-name: bounceInRight;" id="carousel_produtos">
                <?php foreach($projetos_itens as $dado): ?>
                <?php $obj = new Projetos_itens_home($dado); ?>
                    <div class="item" id="">
                        <img src="<?php echo $base; ?>assets/images/<?php echo $obj->getimagem() ?>" class="" alt="<?php echo $obj->getdescricao() ?>" />
                    </div>
                <?php unset($obj); ?>
                <?php endforeach; ?>                
            </div>
            <div class="customPrevBtn botao wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s" _tr>
                <img class="lazyOwl prev" src="assets/images/prev2.jpg" width="40">
            </div>
            <div class="customNextBtn botao _tr wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="2s">
                <img class="lazyOwl next" src="assets/images/next2.jpg" width="40">
            </div>
            <!-- <div class="imagem2" id=""> -->
                <!-- <img src="<?php echo $base; ?>assets/images/produto2.jpg" class="" alt="" /> -->
            <!-- </div> -->
            <hr>
        </div>
    </div>
    <div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone servicos" id="">
        <h1><?php echo $porque_escolher->gettitulo() ?></h1>
        <br><br><br><br>
        <div class="itens" id="">
            <div class="item1 wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1.5s">
                <center>
                    <img src="<?php echo $base; ?>assets/images/check.png" width="150" class="" alt="" />
                    <h2><?php echo $porque_escolher->getitem1() ?></h2>
                </center>
            </div>
            <center>
                <div class="item2 wow bounceInUp" style="visibility: visible; animation-name: bounceInUp;" id="">
                    <img src="<?php echo $base; ?>assets/images/check.png" width="150" class="" alt="" />
                    <h2><?php echo $porque_escolher->getitem2() ?></h2>
                </div>
            </center>
            <div class="item3 wow wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;" data-wow-duration="1.5s">
                <img src="<?php echo $base; ?>assets/images/check.png" width="150" class="" alt="" />
                <h2><?php echo $porque_escolher->getitem3() ?></h2>
            </div>
        </div>
        <center>
            <div class="saiba_mais centerR">
                <a href="<?php echo $base; ?>" title="">
                    <span>Solicitar um Orçamento</span>
                </a>
            </div>
        </center>
    </div>
    <div class="grid-16-desktop grid-16-laptop grid-16-tablet grid-16-phone nossos_parceiros" id="carousel_parceiros">
        <?php foreach($parceiros as $dado): ?>
        <?php $obj = new Parceiros($dado); ?>
            <div class="item wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;" data-wow-duration="1.5s">
                <center>
                    <?php if( $obj->getlink() != '' ): ?>
                    <a href="<?php echo $base; ?>" title="">
                    <?php endif; ?>
                        <img src="<?php echo $base; ?>assets/images/<?php echo $obj->getimagem(); ?>" class="" alt="<?php echo $obj->getnome(); ?>" />
                    <?php if( $obj->getlink() != '' ): ?>
                    </a>
                    <?php endif; ?>
                </center>
            </div>
        <?php unset($obj); ?>
        <?php endforeach; ?>                
    </div>
</section>
<script>
    
    $(window).load(function() {


        // left = $("#home #carousel_produtos img").width() - 50;
        // left2 = $("#home #carousel_produtos img").width() - 100;
        // topo = $("#home #carousel_produtos .item").height() - 50;

        // $(".produtos .customPrevBtn").css("left",left2+"px");
        // $(".produtos .customNextBtn").css("left",left+"px");

        // $(".produtos .customPrevBtn").css("top",topo+"px");
        // $(".produtos .customNextBtn").css("top",topo+"px");

        $("#carousel_parceiros").owlCarousel({
            // items : 1,
            lazyLoad : true,
            nav:false,
            autoplay: true,
            dots:false,
            animateIn: 'fade',
            responsive:{
                100:{
                    items:2
                },
                700:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        }); 

        $("#carousel_produtos").owlCarousel({
            // items : 1,
            lazyLoad : true,
            nav:false,
            autoplay: true,
            dots:false,
            animateIn: 'fade',
            responsive:{
                100:{
                    items:1
                },
                700:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        }); 


        var owl = $('#carousel_produtos');
        owl.owlCarousel();
        // Go to the next item
        $('.quadro .customNextBtn').click(function() {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.quadro .customPrevBtn').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [500]);
        })
             
    });
    // });

</script>           