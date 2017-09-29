<?php
require_once("../modele/modifAdd_step.php");


if (isset($_POST['advancement']) AND isset($_POST['step']) AND isset($_POST['ID_proj']) AND isset($_POST['name'])) {
    $advancement=htmlspecialchars($_POST['advancement']);
    $step=htmlspecialchars($_POST['step']);
    $ID_proj=htmlspecialchars($_POST['ID_proj']);
    $name=htmlspecialchars($_POST['name']);
    add_step($advancement,$step,$ID_proj);

}
else {
}

header("Location:detail_proj.php?ID_proj=".$_POST['ID_proj']."&name=".$name);


 ?>
