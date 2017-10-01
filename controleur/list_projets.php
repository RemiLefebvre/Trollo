<?php
require_once("service/session.php");
verifConnection();

require_once("../modele/data.php");
if (isset($_GET['order'])) {
  $order=htmlspecialchars($_GET['order']);
}
else {
  $order="deadtime";
}

$projets=get_projets($order,$_SESSION['user']);

require_once("../vue/list_projetsVue.php");

 ?>
