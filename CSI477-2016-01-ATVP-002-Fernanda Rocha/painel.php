<?php

session_start(); // Inicia a session
include "functions.php"; // arquivo de funções.
session_checker(); // chama a função que verifica se a session iniciada da acesso à página.
if(!isset($_SESSION['login_session']) && !isset($_SESSION['senha_session'])){
  echo  "<meta http-equiv='refresh' content='0, url=login.php'>";
}else {

echo "Bem vindo <strong>". $_SESSION['nome'] ."</strong>!<br />
     Você está acessando área restrita para usuários cadastrados!
     <br /><br />";

echo "Seu nível de usuário é <strong>". $_SESSION['tipo']."</strong>.
     <br />Com esse nível, você tem permisão de acesso às
     seguintes áreas: <br /><br />";

if ($_SESSION['tipo'] == 1){

    echo "- <strong>Forum</strong><br />Abrir tópicos, postar em tópicos
         de terceiros.<br /><br />";

}

if ($_SESSION['tipo'] == 2){

    echo "- <strong>Forum</strong><br />Administração -
         Acesso total <br /><br />";
}

}
echo "<a href=\"logout.php\">Sair</a>";

?>
