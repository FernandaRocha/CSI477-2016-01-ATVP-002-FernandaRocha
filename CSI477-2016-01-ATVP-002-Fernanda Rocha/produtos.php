<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="css/bootstrap.css" rel="stylesheet" >
<link href="css/bootstrap.min.css" rel="stylesheet" >

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<title>Carrinho de Comp</title>
<meta charset="utf-8">

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
          <li class="active"><a href="#">Produtos</a></li>
          <li><a href="cadastroC.php">Cadastro</a></li>
          <li><a href="admin.php">Área Restrita</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>login</a></li>
          <li><a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
        </ul>
      </div>
    </div>
  </nav>

<center><h1>Nossos Produtos</h1></center>
<center><h3>No Pet Shop da Nanda, você encontra os melhores produtos para o seu amigo com os menores preços do mercado. Venha Conferir!</h3></center>

  <table class="table table-bordered table-hover">

    <tbody>

    <?php
      require("conf.php");

      $sql = "SELECT * FROM produtos";
      $qr = mysql_query($sql) or die(mysql_error());
      while($ln = mysql_fetch_assoc($qr)){ ?>
      <tr class='active'>
        <td><?php echo '<h2>'.$ln['id'].'</h2>'?></td>
        <td><?php echo '<h2>'.$ln['nome'].'</h2>' ?></td>
        <td><?php echo 'Preço : R$ '.number_format($ln['preco'], 2, ',', '.') ?></td>
        <td> <?php echo '<img src="imagens/'. $ln['imagem'].'"/>'?></td>
      </tr>
      <tr>
        <td colspan="4">
          <center><?php echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'" class ="btn-success">Comprar</a>'?></center>
      </td>
      </tr>
      <br/>
      <?php } ?>
    </tbody>
  </table>
</body>
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

</html>
