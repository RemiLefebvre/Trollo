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

  $req=$bdd->prepare('INSERT INTO under_steps(ID_step,under_step,done) VALUES(:ID_step, :under_step ,:done)');
  $req->execute(array(
    'ID_step'=> $ID_step,
    'under_step'=> $underStep,
    'done'=>0
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


// CHECK UNDERSTEP
function check_UnderStep($ID_UnderStep,$done){
  global $bdd;

  $check_UnderStep=$bdd->prepare('UPDATE under_steps SET done=:done WHERE ID=:ID');
  $check_UnderStep->execute(array(
    'ID'=> $ID_UnderStep,
    'done'=> $done
  ));
};


// SUPR UNDERSTEP
function sup_UnderStep($ID_UnderStep){
  global $bdd;

  $sup_UnderStep=$bdd->prepare('DELETE FROM under_steps WHERE ID=:ID');
  $sup_UnderStep->execute(array(
    'ID'=> $ID_UnderStep
  ));
};
 ?>
