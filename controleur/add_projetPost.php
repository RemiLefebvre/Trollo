<?php

  require_once("../modele/modifAdd_projet.php");
  require_once("service/verif_date.php");


  if (isset($_POST['name']) AND isset($_POST['description']) AND isset($_POST['deadtime']) AND isset($_POST['user'])) {
    if (verif_date($_POST['deadtime'])==true) {
      $name=htmlspecialchars($_POST['name']);
      $description=htmlspecialchars($_POST['description']);
      $deadtime=htmlspecialchars($_POST['deadtime']);
      $user=$_POST['user'];
      echo $name;
      echo $description;
      echo $deadtime;
      echo $user;
      add_proj($name,$description,$deadtime,$user);

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
