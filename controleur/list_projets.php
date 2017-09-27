<?php
require_once("../modele/data.php");
session_start();
$projets=get_projets();





require_once("../vue/list_projetsVue.php");

 ?>
