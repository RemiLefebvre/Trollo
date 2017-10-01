<?php
require_once("../modele/modifAdd_step.php");
if (isset($_GET['name']) AND isset($_GET['ID_proj']) ) {
  $ID_proj=htmlspecialchars($_GET['ID_proj']);
  $name=htmlspecialchars($_GET['name']);
  if (isset($_POST['under_step']) AND isset($_POST['ID_step'])) {
    $ID_step=htmlspecialchars($_POST['ID_step']);
    $under_step=htmlspecialchars($_POST['under_step']);
    add_under_step($under_step,$ID_step);
  }

}
else {
}

header("Location:detail_proj.php?ID_proj=".$ID_proj."&name=".$name);


 ?>
