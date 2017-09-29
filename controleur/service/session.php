<?php

function connect($user){
  session_start();
  $_SESSION['connexion']=true;
  $_SESSION['user']=$user;

}

 ?>
