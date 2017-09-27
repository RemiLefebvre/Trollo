<?php
require_once("../modele/data.php");
require_once("service/session.php");



// SECURITY
if (isset($_POST["user"]) AND isset($_POST["mdp"])) {
  if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['user'])) {
    $mdp= htmlspecialchars($_POST["mdp"]);
    $user=htmlspecialchars($_POST["user"]);
  }
  else {
    header("Location:index.php");
  }
}
else {
  header("Location:index.php");
}

$connexionDone=connexion($user,$mdp);
if ($connexionDone==true) {
  connect($user);
}
else {
  header("Location:index.php");
}

 ?>
