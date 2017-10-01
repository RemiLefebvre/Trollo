<?php
require_once('dbconnect/dbconnect.php');


// MODIF PROJET
function modif_proj($name,$description,$deadtime,$id){

  global $bdd;

  $modif = $bdd->prepare('UPDATE projets
                          SET name = ?,
                          deadtime = ?,
                          description = ?
                          WHERE ID = ?');
  $modif->execute(array(
    $name,
    $deadtime,
    $description,
    $id
  ));
}

// ADD PROJET
function add_proj($name,$description,$deadtime,$user){
  global $bdd;

  $req=$bdd->prepare('INSERT INTO projets(name, user, deadtime, description) VALUES(:name, :user, :deadtime, :description)');
  $req->execute(array(
    'name'=> $name,
    'user'=> $user,
    'deadtime'=> $deadtime,
    'description'=> $description
  ));
}


// SUPR PROJET
function supr_proj($ID){
  global $bdd;

  $sup=$bdd->prepare('DELETE FROM projets WHERE ID = ?');
  $sup->execute(array(
    $ID
  ));

  $sup_steps=$bdd->query('SELECT ID FROM steps WHERE ID_proj ='.$ID);

  $sup_steps=$sup_steps->fetchAll();
  if (isset($sup_steps['ID'])) {
    $ID_step_to_sup=$sup_steps['ID'];
  }

  $sup_steps=$bdd->prepare('DELETE FROM steps WHERE ID_proj ='.$ID);
  $sup_steps->execute(array(
    $ID
  ));

  if ($ID_step_to_sup) {
    $sup_under_steps=$bdd->prepare('DELETE FROM under_steps WHERE ID_step = ?');
    $sup_under_steps->execute(array(
      $ID_step_to_sup
    ));
  }

}
 ?>
