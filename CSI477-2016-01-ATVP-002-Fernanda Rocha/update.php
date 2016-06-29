<!DOCTYPE html>
<html>
<head>
  <?php

  require_once "conf.php";
  $db= mysql_select_db("petshop");

  ?>
  <meta http-equiv="content-type" content="text/html"; charset="iso-8859-1" />
  <title>Comando de update</title>
</head>

<body>

  <h1>Atualizando o preço e a imagem dos produtos</h1>

  <?php
  $id = $_GET['id'];

  $select = mysql_query("SELECT *FROM produtos WHERE id = '$id'");
  while ($res_select = mysql_fetch_array($select)) {


    $preco = $res_select['preco'];
    $imagem = $res_select['imagem'];

    ?>

    <?php if(isset($_POST['atualizar'])){

      $new_preco = $_POST['preco'];
      $new_imagem = $_POST['imagem'];


      $update = mysql_query("UPDATE produtos SET preco = '$new_preco', imagem = '$new_imagem' WHERE id = '$id'");

      if ($update == '') {
        echo "Ocorreu um erro ao atualizar os dados!";
      }else{
        echo "Dados atualizados com sucesso!";
      }
    }
    ?>

    <a href="adminT2.php" class="btn btnCad">Sair<a/></center></td><br /><br />
      <form method="post" action="?go=update">

        <p align = "center"><strong>Novo preco:</strong><input type="text" name= "preco" id="preco" value ="<?php echo $preco; ?>" placeholder= "Novo preço" class -"txt" />
          <p align = "center"><strong>Nova imagem:</strong><input type="text" name= "imagem" id="imagem" value ="<?php echo $imagem; ?> "placeholder= "Ex: foto.jpg" class -"txt" /></p><br /><br />
          <p align = "center"><input type="submit" value= "Atualizar" id="botao" class="btn btn-success" /></p>

        </form>

        <?php
      }
      ?>

    </body>
    </html>
