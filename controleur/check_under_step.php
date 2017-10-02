<?php
  require_once("../modele/modifAdd_step.php");
  if (isset($_GET['name']) AND isset($_GET['ID_proj']) ) {
    $ID_proj=htmlspecialchars($_GET['ID_proj']);
    $name=htmlspecialchars($_GET['name']);

    if (isset($_GET['ID_UnderStep']) AND isset($_GET['done'])) {
      $ID_UnderStep=htmlspecialchars($_GET['ID_UnderStep']);
      $done=htmlspecialchars($_GET['done']);
      echo $done;
      echo $ID_UnderStep;
      check_UnderStep($ID_UnderStep,$done);
    }
  }
  header("Location:detail_proj.php?ID_proj=".$ID_proj."&name=".$name);

 ?>
