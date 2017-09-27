<?php
require_once('dbconnect/dbconnect.php');

function insert_new_compte($user,$mdp){
  global $bdd;

  $req=$bdd->prepare('INSERT INTO users(user, mdp) VALUES(:user,:mdp)');
  $req->execute(array(
    'user'=> $user,
    'mdp'=> $mdp
  ));
}



// CONNEXION
function connexion($user,$mdp){
  global $bdd;

  $req=$bdd->prepare('SELECT * FROM users WHERE user=:user');
  $req->execute(array(
    'user'=>$user
  ));
  $resultat = $req->fetch();

  if (!$resultat) {
    return false;
  }
  else{
    $mdpBDD = $resultat['mdp'];
    if (password_verify($mdp,$mdpBDD)) {
      return true;
    }
    else {
      return false;
    }
  }
}

 ?>
