<?php
  require_once("../modele/modifAdd_projet.php");

  if (isset($_GET['name'])) {
    // if (preg_match('/^[O-9]+$/', $_GET['ID'])) {
      $name=htmlspecialchars($_GET['name']);
      supr_proj($name);
    // }
  }

  header("Location:list_projets.php")
 ?>
