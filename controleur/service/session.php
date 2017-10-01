<?php
session_start();

function connect($user){
  $_SESSION['connexion']=true;
  $_SESSION['user']=$user;

}

function verifConnection(){
  if (  $_SESSION['connexion']==false) {
    return header("Location:index.php");
  }
}

 ?>
