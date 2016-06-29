<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="css/bootstrap.css" rel="stylesheet" >
  <link href="css/bootstrap.min.css" rel="stylesheet" >

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
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
          <li class="active"><a href="#">Home</a></li>
          <li><a href="missao.php">Missão e Valores</a></li>
          <li><a href="produtos.php">Produtos</a></li>
          <li><a href="cadastroC.php">Cadastro</a></li>
          <li><a href="admin1.php">Área Restrita</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>login</a></li>
          <li><a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="topo1"></div>

  <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <center><div class="panel-heading">Cachorros</div></center>
        <div class="panel-body"><img src="imagens/cachorro.jpg" style="width:100%" alt="Image"></div>
        <div class="panel-footer">São os melhores amigos dos homens.</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <center><div class="panel-heading">Gatos</div></center>
        <div class="panel-body"><img src="imagens/gato.jpg" style="width:100%" alt="Image"></div>
        <div class="panel-footer">São fofurinhas em forma de animais.</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <center><div class="panel-heading">Passáros</div></center>
        <div class="panel-body"><img src="imagens/passaro.jpg" style="width:100%" alt="Image"></div>
        <div class="panel-footer">O canto dos passáros são fantásticos.</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <center><div class="panel-heading">Peixes</div></center>
        <div class="panel-body"><img src="imagens/peixe.jpg" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Esse são maravilhosos.</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <center><div class="panel-heading">São amigos</div></center>
        <div class="panel-body"><img src="imagens/amigos.jpg" style="width:100%" alt="Image"></div>
        <div class="panel-footer">São criaturinhas encantadoras.</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <center><div class="panel-heading">Cachorros</div></center>
        <div class="panel-body"><img src="imagens/cachorro.jpg" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  </div>
</div><br><br>

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
