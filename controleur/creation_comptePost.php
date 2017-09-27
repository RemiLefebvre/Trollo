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

// hash
$mdp = password_hash($mdp,PASSWORD_BCRYPT);
insert_new_compte($user,$mdp);
connect($user);
 ?>
