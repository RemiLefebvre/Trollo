<?php
require_once('dbconnect/dbconnect.php');

// ADD STEP
function add_step($advancement,$step,$ID_proj){

  global $bdd;

  $req=$bdd->prepare('INSERT INTO steps(step, advancement ,ID_proj) VALUES(:step, :advancement ,:ID_proj)');
  $req->execute(array(
    'step'=> $step,
    'advancement'=> $advancement,
    'ID_proj'=> $ID_proj
  ));

}



// ADD UNDER STEP
function add_under_step($underStep,$ID_step){

  global $bdd;

  $req=$bdd->prepare('INSERT INTO under_steps(ID_step,under_step) VALUES(:ID_step, :under_step)');
  $req->execute(array(
    'ID_step'=> $ID_step,
    'under_step'=> $underStep
  ));

}


// SUPR STEP
function supr_step($ID_step){
  global $bdd;

  $sup_steps=$bdd->query('DELETE FROM under_steps WHERE ID_step ='.$ID_step);

  $sup_steps=$bdd->query('DELETE FROM steps WHERE ID ='.$ID_step);
}


// INCREMENT STEP
function incre_step($ID_step){
  global $bdd;

  $sup_steps=$bdd->prepare('UPDATE steps SET advancement = advancement+1 WHERE ID =:ID');
  $sup_steps->execute(array(
    'ID'=> $ID_step
  ));
}
 ?>
