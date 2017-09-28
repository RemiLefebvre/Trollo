<?php
session_start();

require_once("../modele/data.php");


if (isset($_GET['ID_proj']) AND isset($_GET['name'])){
 $ID_proj=htmlspecialchars($_GET['ID_proj']);
 $name_proj=htmlspecialchars($_GET['name']);
 $detail_proj=get_steps($ID_proj);
 $steps = $detail_proj->fetchAll();



}
else {
  header("Location:list_projets.php");
}
require_once("../vue/detail_projVue.php");


 ?>
