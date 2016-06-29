
<?php

session_start();
if(!isset($_SESSION['login_session']) && !isset($_SESSION['senha_session'])){
  echo  "<meta http-equiv='refresh' content='0, url=login.php'>";
}else {

if(!isset($_SESSION['carrinho'])){
  $_SESSION['carrinho'] = array();
}
//adiciona produto

if(isset($_GET['acao'])){

  //ADICIONAR CARRINHO
  if($_GET['acao'] == 'add'){
    $id = intval($_GET['id']);
    if(!isset($_SESSION['carrinho'][$id])){
      $_SESSION['carrinho'][$id] = 1;
    }else{
      $_SESSION['carrinho'][$id] += 1;
    }
  }

  //REMOVER CARRINHO
  if($_GET['acao'] == 'del'){
    $id = intval($_GET['id']);
    if(isset($_SESSION['carrinho'][$id])){
      unset($_SESSION['carrinho'][$id]);
    }
  }

  //ALTERAR QUANTIDADE
  if($_GET['acao'] == 'up'){
    if(is_array($_POST['prod'])){
      foreach($_POST['prod'] as $id => $qtd){
        $id  = intval($id);
        $qtd = intval($qtd);
        if(!empty($qtd) || $qtd <> 0){
          $_SESSION['carrinho'][$id] = $qtd;
        }else{
          unset($_SESSION['carrinho'][$id]);
        }
      }
    }
  }

}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <title>Carrinho de Compras</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="css/bootstrap.css" rel="stylesheet" >
  <link href="css/bootstrap.min.css" rel="stylesheet" >

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
          <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>login</a></li>
          <li class="active"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="topo1"></div>


  <center><table>
    <h1>Carrinho de Compras</h1><br /><br />


    <thead>
      <tr>
        <th width="244">Produto</th>
        <th width="79">Quantidade</th>
        <th width="89">Pre&ccedil;o</th>
        <th width="100">SubTotal</th>
        <th width="64">Remover</th>
      </tr>
    </thead>
    <form action="?acao=up" method="post">
      <tfoot>
        <tr>
          <td colspan="5"><center><input type="submit" value="Atualizar Carrinho" class="btn btn-primary" />
              &nbsp;<a href="login.php" class="btn btn-success">Finalizar Compra</a>
              &nbsp;<a href="produtos.php" class="btn btn-primary">Continuar Comprando</a>
              <br /><br /><a href="?go=sair" class="btn btnCad">Sair<a/></center></td><br /><br />
        </tr>


      </tfoot>


      <tbody>
        <?php
        if(count($_SESSION['carrinho']) == 0){
          echo '<tr><td colspan="5">Não há produto no carrinho</td></tr>';
        }else{
          require("conf.php");
          $total = 0;
          foreach($_SESSION['carrinho'] as $id => $qtd){
            $sql   = "SELECT *  FROM produtos WHERE id= '$id'";
            $qr    = mysql_query($sql) or die(mysql_error());
            $ln    = mysql_fetch_assoc($qr);

            $nome  = $ln['nome'];
            $preco = number_format($ln['preco'], 2, ',', '.');
            $sub   = number_format($ln['preco'] * $qtd, 2, ',', '.');

            $total += $ln['preco'] * $qtd;

            echo '<tr>
            <td>'.$nome.'</td>
            <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>
            <td>R$ '.$preco.'</td>
            <td>R$ '.$sub.'</td>
            <td><a href="?acao=del&id='.$id.'">Remove</a></td>
            </tr>';
          }
          $total = number_format($total, 2, ',', '.');
          echo '<tr>
          <td colspan="4">Total</td>
          <td>R$ '.$total.'</td>
          </tr>';
        }
        ?>

      </tbody>
    </form>
  </table>



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
}

if(@$_GET['go']=='sair'){
  unset($_SESSION['login_session']);
  unset($_SESSION['senha_session']);
  unset($_SESSION['carrinho']);



  echo  "<meta http-equiv='refresh' content='0, url=index.php'>";
}

 ?>
