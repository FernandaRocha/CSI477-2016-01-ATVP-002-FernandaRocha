<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

<?php

$con = @mysql_connect("localhost", "sispetshop", "123456") or die ("Não foi possível conectar com o banco de dados!");
mysql_select_db("petshop",$con) or die ("Banco de dados não localizado!");

 ?>
