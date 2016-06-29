<!DOCTYPE html>
<html>
<head>
  <?php

  require_once "conf.php";
  $db= mysql_select_db("petshop");

  ?>
  <meta http-equiv="content-type" content="text/html"; charset="iso-8859-1" />
  <title>Atualização do Cadastro de Produtos</title>
</head>

<body>

  <h1>Atualizando o valor e a imagem dos produtos</h1>

  <?php

  $select = mysql_query("SELECT * FROM produtos");
  while ($res_select = mysql_fetch_array($select)) {

    $preco = $res_select['preco'];
    $imagem = $res_select['imagem'];
    $id = $res_select['id'];

    ?>

    <br /><strong>Preço:</strong> <a href = "update.php?id=<?php echo $id; ?>"><?php echo $preco; ?></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Imagem:</strong> <a href = "update.php?id=<?php echo $id; ?>"><?php echo $imagem; ?></a><br />

    <?php

  }
  ?>
</body>
</html>
