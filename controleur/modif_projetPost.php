<?php
  require_once("../modele/modifAdd_projet.php");


  if (isset($_POST['name']) AND isset($_POST['description']) AND isset($_POST['deadtime']) AND isset($_POST['ID'])) {
    if (preg_match('/^([0-9]{2}[-.\s]?){2}[0-9]{2,4}$/', $_POST['deadtime'])) {
      $name=htmlspecialchars($_POST['name']);
      $description=htmlspecialchars($_POST['description']);
      $deadtime=htmlspecialchars($_POST['deadtime']);
      $ID=$_POST['ID'];
      echo $name;
      echo $description;
      echo $deadtime;
      echo $ID;
      modif_proj($name,$description,$deadtime,$ID);

      $status="good";

    }
    else {
      $status="error";
    }
  }
  else {
    $status="error";
  }

  header("Location:list_projets.php?status=".$status);

 ?>
