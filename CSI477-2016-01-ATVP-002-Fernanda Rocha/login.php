<?php
session_start();
require_once "conf.php";
if(!isset($_SESSION['login_session']) && !isset($_SESSION['senha_session'])){
 ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
   <title>Bootstrap Example</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <link href="css/bootstrap.css" rel="stylesheet" >
   <link href="css/bootstrap.min.css" rel="stylesheet" >

   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <style>

   </style>
 </head>
 <body>

 <nav class="navbar navbar-inverse">
   <div class="container-fluid">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="#">Pet Shop da Nanda</a>
     </div>
     <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav">
         <li><a href="index.php">Home</a></li>
         <li><a href="missao.php">Missão e Valores</a></li>
         <li><a href="produtos.php">Produtos</a></li>
         <li><a href="cadastroC.php">Cadastro</a></li>
         <li><a href="admin.php">Área Restrita</a></li>
       </ul>
       <ul class="nav navbar-nav navbar-right">
         <liclass="active"><a href="#"><span class="glyphicon glyphicon-user"></span>login</a></li>
         <li><a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
       </ul>
     </div>
   </div>
 </nav>

    <div class="css/bootstrap.css/topo1"> </div></div><br></br>

      <h1><p align = "center"> Login do Cliente<br></br></p></h1>
      <center><img src="imagens/ps.png" height="230px">

    <form method="post" action="?go=logar">

      <p align = "center"><strong>Login:</strong><input type="text" name= "login" id="login" placeholder= "Login" class -"txt" /></p>
      <p align = "center"><strong>Senha:</strong><input type="password" name= "senha" id="senha" placeholder= "Senha" class -"txt" /></p>
      <p align = "center"><input type="submit" value= "Entrar" id="botao" class="btn btn-success" />
			&nbsp;<a href="cadastroC.php" class="btn btn-primary">Cadastre-se</a>

    <div class="container">

    </div>
  </form>
  <footer class="container-fluid text-right">
    <p>Online Store Copyright Pet Shop da Nanda</p>
    <p>Endereço: Rua dos Gararápes, nº 1234</p>
    <p>Belo Horizonte - MG</p>
    <p>Tel: (31) 3333-8909</p>

      <div id="footer-redes">
        <h1>Acompanhe-nos</h1>
        <a href="#"><img src="imagens/logo-twitter.png"></a>
        <a href="https://www.facebook.com/profile.php?id=100010554618771&fref=ts"><img src="imagens/logo-facebook.png"></a>
        <a href="https://www.youtube.com/watch?v=u5UKVRLv6eY"><img src="imagens/logo-youtube.png"></a>
      </div>
      <div class="clearfix"></div>
  </footer>
  </body>
</html>
<?php
}else{
	echo  "<meta http-equiv='refresh' content='0, url=produtos.php'>";

}

 ?>

<?php

if (@$_GET['go'] == 'logar') {
  $login = $_POST['login'];
  $senha = $_POST['senha'];

if (empty($login)){
    echo "<script>alert('Preencha todos os campos para Logar.');history.back();</script>";
  }elseif (empty($senha)){
    echo "<script>alert('Preencha todos os campos para Logar.'); history.back();</script>";
  }else{
    $query1= mysql_num_rows(mysql_query("SELECT * FROM clientes where login = '$login' AND senha = '$senha'"));
    if ($query1 == 1) {
			$_SESSION['login_session'] = $login;
			$_SESSION['senha_session'] = $senha;

      echo "<script>alert('Usuário logado com sucesso.');</script>";
			echo  "<meta http-equiv='refresh' content='0, url=produtos.php'>";
    }else {
      echo "<script>alert('Login e/ou senha não correspondente.');history.back();</script>";

    }
  }
}

 ?>
