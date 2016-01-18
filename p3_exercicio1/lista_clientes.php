<?php
session_start(); /*Página com sessão iniciada*/
echo '<hear>';
//echo'<meta http-equiv="refresh" content="10">';
echo '</hear>';
?>

<?php  if(isset($_SESSION["logado"])):?>

<!--Criar o loop com os clientes criados via $_COOKIE -->

    <?php

    
            if (isset($_POST['enviar'])) {
                setcookie("dados[ID]", $_POST['id'],  time()+3600);
                setcookie("dados[NOME]", $_POST['nome'], time()+3600);
                setcookie("dados[EMAIL]",$_POST['email'], time()+3600);

                if (isset($_COOKIE['dados'])) {
                    
                    echo '<ul><li>ID :'.$_POST['id'].'<br/></li></ul>';
                    echo '<ul><li>NOME :'.$_POST['nome'].'<br/></li></ul>';
                    echo '<ul><li>EMAIL :'.$_POST['email'].'<br/></li></ul>';
                    
                    echo "<br/>***********************************************<br/>";
                    
                    foreach ($_COOKIE['dados'] as $key => $value) {
                        echo '<body><ul><li>'."$key : $value".'<br/></li></ul></body>';
                    }
                }
            } elseif (isset($_POST['enviar']) == NULL || isset($_POST['enviar']) == " ") {
               
                if($_COOKIE['dados'] == null || $_COOKIE['dados'] == " "){
                    echo '<ul><li>'.$_POST['id'].'<br/></li></ul>';
                    echo '<ul><li>'.$_POST['nome'].'<br/></li></ul>';
                    echo '<ul><li>'.$_POST['email'].'<br/></li></ul>';
                    
                }else{
                    foreach ($_COOKIE['dados'] as $key => $value) {
                        echo '<body><ul><li>'."$key : $value".'<br/></li></ul></body>';
                    }
                }
                  //echo 'ID:' . $_POST['id'] = " " . '<br/>NOME' . $_POST['nome'] = "" . '<br/>EMAIL' . $_POST['email'] = "";
            }
     /*       
    $my_stack = array();//criei o array
    array_push($my_stack, "teste1","teste2","teste3");
    array_push($my_stack, "teste4","teste5","teste6");
    while ($popped = array_pop($my_stack)) {
        print ("$popped<br/>");
    }
    */
     
   /*array_unshift($_COOKIE['dados'],"<br>");
    while ($popped = array_shift($_COOKIE['dados'])) {
        print ("$popped<br/>");
              
    }
    */
        /* Criando uma lista dos clientes
         * 
         * 
          Variáveis auxiliares para armazenar o conteudo do array global $_POST
          $id = $_POST['id'];
          $nome = $_POST['nome'];
          $email = $_POST['email'];

          Criando e definindo os cookies com o contéudo das variaveis auxiliares
          setcookie("ID", $id);
          setcookie("NOME", $nome);
          setcookie("EMAIL", $email);

          Verificando se os cookies tem conteudo ou não.
          isset($_COOKIE["ID"]);
          isset($_COOKIE["NOME"]);
          isset($_COOKIE["EMAIL"]);

          echo '<html>';
          echo'<head>';
          echo'<meta http-equiv="refresh" content="03">';
          echo'</head>';
          echo '<body>';
          echo '<ul>';
          echo '<li>ID :' . $_COOKIE["ID"] . '';
          echo '</li>';
          echo '<li>NOME :' . $_COOKIE["NOME"] . '';
          echo '</li>';
          echo '<li> EMAIL: ' . $_COOKIE["EMAIL"] . '';
          echo '</li>';
          echo '</ul>';
          echo '</body>';
          echo '</html>';
         */
    
    ?>
<!--
   #BOTAO QUE DIRECIONA PARA OUTRA PAGINA DO SITE#
   Mais um aprendizado! Para realizar o direcionamento de uma p´´agina para outra usando um botão!
   É necessário usar a seguinte função: <a href="index.php?page=cadastro"><input text="button" name="cadastro"></a>
   Nesse exemplo estou chamando cadastro porque é o local para onde será direcionado. 
-->

<!--

    Não posso apagar esse código!! Porque? Simples! Ele me serviu de guia para resolver a questão
            if(($id && $nome && $email) == true){
            isset($_COOKIE["ID"]);
            isset($_COOKIE["NOME"]);
            isset($_COOKIE["EMAIL"]);
            
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
        
            
            setcookie("ID", $id);
            setcookie("NOME", $nome); 
            setcookie("EMAIL", $email); 
            echo "ID :".$_COOKIE["ID"]."<br>NOME :".$_COOKIE["NOME"]."<br>EMAIL :".$_COOKIE["EMAIL"];
           
            //echo "Vai nessa";
        }elseif($id && $nome && $email ==  false) {
            
        }
        else{
            header("index.php?page=lista_clientes");
        }
-->
<br>
<a href="index.php?page=cadastro"><input type="button"  name="cadastro" value="cadastro"></a>
<!--<a href="cadastro.php">Novo Cadastro</a> -->
<?php else:?>
<p>Por favor! Realize seu login no sistema!  </p>
<?php endif; ?>
