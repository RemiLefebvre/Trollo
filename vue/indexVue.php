<?php
include_once('template/header.php');
    ?>
    <main id="mainConnexion" class="container">
      <div>
        <div class="card card-container">
          <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
          <p id="profile-name" class="profile-name-card"></p>
          <form class="mb-3 form-signin" role="form" action="connexionPost.php" method="POST">
            <input type="text" name="user" class="form-control" placeholder="Utilisateur" required autofocus>
            <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Connexion</button>
          </form><!-- /form -->
          <p>Pas de compte ? <a href="creation_compte.php">Creer un compte</a></p>
        </div><!-- /card-container -->
      </div><!-- /container -->
  </main>

  <?php include_once('template/footer.php');?>
