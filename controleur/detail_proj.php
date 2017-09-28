<?php
session_start();
require_once("../modele/data.php");


if (isset($_GET['name'])){
 $name=htmlspecialchars($_GET['name']);
 $steps=get_steps($name);
}
else {
  header("Location:list_projets.php");
}
require_once("../vue/detail_projVue.php");


 ?>
