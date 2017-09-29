<?php
require_once('dbconnect/dbconnect.php');


// CREATION COMPTE
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

// GET PROJETS
function get_projets($order,$user){
  global $bdd;
  $projets=$bdd->prepare('SELECT *
    FROM projets WHERE user=:user ORDER BY ' . $order);
  $projets->execute(array(
    'user'=> $user,
  ));
  return $projets;
}


// GET STEPS
function get_steps($ID_proj){
  global $bdd;

  $detail_proj=$bdd->query('SELECT * FROM steps WHERE ID_proj='.$ID_proj);

  return $detail_proj;

  // $detail_proj=$bdd->query('SELECT u.under_step, s.advancement ,s.step
  //       FROM under_steps u
  //      RIGHT JOIN steps s
  //      ON u.ID_step=s.ID
  //      WHERE s.ID_proj='.$ID_proj);
  //

}

// GET under_STEPS
function get_under_steps(){
  global $bdd;

  $under_steps=$bdd->query('SELECT * FROM under_steps ');

  return $under_steps;
}
 ?>
