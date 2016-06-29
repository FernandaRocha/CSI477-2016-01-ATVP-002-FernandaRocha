<?php

session_start();
if(!isset($_SESSION['login_session']) && !isset($_SESSION['senha_session'])){
  echo  "<meta http-equiv='refresh' content='0, url=login.php'>";
}else {

  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Sucesso</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="css/bootstrap.css" rel="stylesheet" >

    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
          <li><a href="login.html"><span class="glyphicon glyphicon-user"></span>login</a></li>
          <li class="active"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <p>Usuário Logado com sucesso</p>

  <a href="?go=sair" class="btn btnCad">Sair<a/>

  </body>
  </html>

  <?php
}

if(@$_GET['go']=='sair'){
  unset($_SESSION['login_session']);
  unset($_SESSION['senha_session']);
  echo  "<meta http-equiv='refresh' content='0, url=index.php'>";
}

?>
