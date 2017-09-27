<?php
require_once('dbconnect/dbconnect.php');

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
 ?>
