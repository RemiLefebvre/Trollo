<?php
require_once("service/session.php");
verifConnection();

require_once("../modele/data.php");


if (isset($_GET['ID_proj']) AND isset($_GET['name'])){
 $ID_proj=htmlspecialchars($_GET['ID_proj']);
 $name_proj=htmlspecialchars($_GET['name']);
 $steps=get_steps($ID_proj);
 $steps = $steps->fetchAll(PDO::FETCH_ASSOC);
 $under_steps= get_under_steps($ID_proj);
 $under_steps = $under_steps->fetchAll(PDO::FETCH_ASSOC);
}
else {
  header("Location:list_projets.php");
}
require_once("../vue/detail_projVue.php");


 ?>
