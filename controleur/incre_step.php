<?php
  require_once("../modele/modifAdd_step.php");
  if (isset($_GET['name']) AND isset($_GET['ID_proj']) ) {
    $ID_proj=htmlspecialchars($_GET['ID_proj']);
    $name=htmlspecialchars($_GET['name']);

    if (isset($_GET['ID_step'])) {
        $ID=htmlspecialchars($_GET['ID_step']);
        incre_step($ID);
    }
  }
  header("Location:detail_proj.php?ID_proj=".$ID_proj."&name=".$name);

 ?>
