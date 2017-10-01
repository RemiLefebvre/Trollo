<?php
require_once('dbconnect/dbconnect.php');


function add_step($advancement,$step,$ID_proj){

  global $bdd;

  $req=$bdd->prepare('INSERT INTO steps(step, advancement ,ID_proj) VALUES(:step, :advancement ,:ID_proj)');
  $req->execute(array(
    'step'=> $step,
    'advancement'=> $advancement,
    'ID_proj'=> $ID_proj
  ));

}

function add_under_step($underStep,$ID_step){

  global $bdd;

  $req=$bdd->prepare('INSERT INTO under_steps(ID_step,under_step) VALUES(:ID_step, :under_step)');
  $req->execute(array(
    'ID_step'=> $ID_step,
    'under_step'=> $underStep
  ));

}



 ?>
