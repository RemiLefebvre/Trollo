<?php include_once('template/header.php'); ?>


<div id="mainConnexion" class="">
  <div  class="container card mt-5">
    <form class="form-horizontal mb-5" role="form" method="POST" action="creation_comptePost.php">
      <div class="row">
        <div class="col-md-12">
          <h2>Créer un compte</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group ">
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
              <input type="text" name="user" class="form-control"
              placeholder="Utilisateur" required autofocus>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
              <input type="password" name="mdp" class="form-control"
              placeholder="Mot de passe" required>
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
      <div class="row" style="padding-top: 1rem">
        <div class="col-md-6">
          <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Créer</button>
        </div>
      </div>
    </form>
    <p>Déja un compte? <a href="index.php">Se connecter</a></p>
  </div>
</div>

<?php include_once('template/footer.php');?>
