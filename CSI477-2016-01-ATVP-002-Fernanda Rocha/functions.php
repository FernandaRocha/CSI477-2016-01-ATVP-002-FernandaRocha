<?php

function session_checker(){

    if (!isset($_SESSION['tipo' == 1])){

        header ("Location:adminT1.php");

    }else {
      header ("Location:adminT2.php");
      exit();
    }

}

?>
