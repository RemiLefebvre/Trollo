<?php
  require_once("../modele/modifAdd_projet.php");

  if (isset($_GET['ID'])) {
    // if (preg_match('/^[O-9]+$/', $_GET['ID'])) {
      $ID=htmlspecialchars($_GET['ID']);
      supr_proj($ID);
    // }
  }

  header("Location:list_projets.php")
 ?>
