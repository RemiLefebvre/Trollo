<?php
require_once('dbconnect/dbconnect.php');


function add_step($advancement,$projet_name,$step){

  global $bdd;

  $req=$bdd->prepare('INSERT INTO steps(projet_name, step, advancement) VALUES(:projet_name, :step, :advancement)');
  $req->execute(array(
    'projet_name'=> $projet_name,
    'step'=> $step,
    'advancement'=> $advancement
  ));

}

 ?>
