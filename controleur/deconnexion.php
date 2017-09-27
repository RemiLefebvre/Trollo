<?php
session_start();
$_SESSION['user']='';
$_SESSION['connexion']=false;

session_destroy();

setcookie('login', '');
setcookie('pass_hache', '');

header('Location:index.php')
 ?>
