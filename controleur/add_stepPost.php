<?php
require_once("../modele/modifAdd_step.php");


if (isset($_POST['advancement']) AND isset($_POST['step']) AND isset($_POST['name'])) {
    $advancement=htmlspecialchars($_POST['advancement']);
    $step=htmlspecialchars($_POST['step']);
    $name=htmlspecialchars($_POST['name']);

    add_step($advancement,$name,$step);

}
else {
}

header("Location:detail_proj.php?name=".$_POST['name']);


 ?>
