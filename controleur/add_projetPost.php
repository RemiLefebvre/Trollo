<?php

  require_once("../modele/modifAdd_projet.php");


  if (isset($_POST['name']) AND isset($_POST['description']) AND isset($_POST['deadtime']) AND isset($_POST['user'])) {
    if (preg_match('/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}+$/', $_POST['deadtime'])) {
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
