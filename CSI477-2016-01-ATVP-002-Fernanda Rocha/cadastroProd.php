
<?php
require_once "conf.php";
?>
<!DOCTYPE html>
<html>
<head>

  <title>Cadastro de Produtos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="css/bootstrap.css" rel="stylesheet" >
  <link href="css/bootstrap.min.css" rel="stylesheet" >

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
  <center><h1>Cadastro de Produtos</h1></center>
  <center><img src="imagens/ps.png" height="230px">

    <form method="post" action="?go=cadastrarProd">

      <p align = "center"><strong>Nome:</strong><input type="text" name= "nome" id="nome" placeholder= "Nome do produto" class -"txt" />
        <p align = "center"><strong>Preço:</strong><input type="text" name= "preco" id="login" placeholder= "Preço do Produto" class -"txt" /></p>
        <p align = "center"><strong>Imagem:</strong><input type="text" name= "imagem" id="senha" placeholder= "Nome da imagem (Ex: foto.png)" class -"txt" /></p><br /><br />
        <p align = "center"><input type="submit" value= "Cadastrar" id="botao" class="btn btn-success" />

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Limpar" id="botao1" class="btn btn-danger"/></p><br></br>
          <a href="index.php" class="btn btnCad">Sair<a/>
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

        if (@$_GET['go'] == 'cadastrarProd') {
          $nome = $_POST['nome'];
          $preco = $_POST['preco'];
          $imagem = $_POST['imagem'];

          if (empty($nome)){
            echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
          }
          elseif (empty($preco)){
            echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
          }
          elseif (empty($imagem)){
            echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
          }
          else{
            $query1= mysql_num_rows(mysql_query("SELECT * FROM produtos where nome = '$nome'"));
            if ($query1 == 1) {
              echo "<script>alert('Produto já cadastrado no banco de dados.'); history.back();</script>";
            }else {
              mysql_query("INSERT INTO produtos(nome,preco,imagem)
              VALUES('$nome', '$preco', '$imagem')");
              echo "<script>alert('Produto cadastrado com sucesso.');</script>";
              echo  "<meta http-equiv='refresh' content='0, url=cadastroProd.php'>";

            }
          }
        }
        ?>
