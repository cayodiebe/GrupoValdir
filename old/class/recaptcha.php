<?php 
    //Instruções de uso desta  classe

    //Primeiramente acesse https://www.google.com/recaptcha/intro/index.html e obtenha uma chave de acesso

    // // Copie e cole o código abaixo no dentro do <form>
    // <div class="g-recaptcha" data-sitekey=" {your site key} "></div> 
    // Substitua  {your site key} pela chave gerada pelo reCaptcha admin
    
    // // Coloque o script abaixo dentro de seu código
    // <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
    
    
    // Código PHP para utilizar a classe

    // include"recaptcha.php";
    // //Sua chave secreta
    // //$key = " {your secret key} ";
    
    // $captcha = new reCaptcha();
    // $captcha->setkey($key);
    // if($captcha->chech_reCaptcha()):
    //     echo 'Sucesso';
    // else:
    //     echo 'Erro';
    // endif;
  

    Class reCaptcha{
        protected $key;
        protected $response;

        function chech_reCaptcha(){
            if($this->existPost()):
                $ret = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$this->key."&response=".$this->response);
                $myArray = json_decode($ret, true);
                if( $myArray["success"] == true)
                    return true;
                else
                    return false;
            endif;
        }
        function existPost(){
            if( isset( $_POST['g-recaptcha-response'] ) && $_POST['g-recaptcha-response'] != "" ):
                $this->setresponse($_POST['g-recaptcha-response']);
                return true;
            else:
                return false;
            endif;
        }
        function setkey($string){
            $this->key = $string;
        }
        function getkey(){
            return $this->key;
        }
        function setresponse($string){
            $this->response = $string;
        }
        function getresponse(){
            return $this->response;
        }

    }

?>