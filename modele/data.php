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
function get_projets(){
  global $bdd;
  $projets=$bdd->query('SELECT *
    FROM projets ORDER BY deadtime');
  return $projets;
}

// GET ONCE PROJETS
function get_projet(){
  global $bdd;
  global $enfant_select;
  $enfant=$bdd->query('SELECT *
    FROM Listing_Img_Enfant img
    INNER JOIN Listing_Enfants enfant
    ON enfant.id_enfant = img.id_img
    WHERE id_enfant = ' . $enfant_select . '');

  return $enfant;
}

 ?>
