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

 ?>
