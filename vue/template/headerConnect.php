<!doctype html>
<html class="no-js" lang="FR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Trollo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- icon -->
        <script src="https://use.fontawesome.com/4d141429f4.js"></script>

        <!-- Font family -->

        <!-- icon -->
	      <link rel="icon" href="img/logo.png">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- CSS -->
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">

        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="../js/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    </head>
    <body>
      <header id="headerConnect">
        <nav id="navheader" class="fixed-top navbar navbar-toggleable-md navbar-light">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <h1 class="navbar-brand ml-1 navbar-brand text-black"><strong>Trollo</strong></h1>

          <div class="collapse navbar-collapse " id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li >
                <strong class="nav-link text-muted">Bonjour <?php echo $_SESSION['user'] ?></strong>
              </li>
              <li>
                <span class="nav-link" data-toggle="modal" data-target="#addProjet">Ajouter un projet</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="deconnexion.php">Se deconnecter</a>
              </li>
              <li class="nav-item">
                <div class="dropdown">
                  <button class="nav-link btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Trier par
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="list_projets.php?order=deadtime">Date butoire</a>
                    <a class="dropdown-item" href="list_projets.php?order=name">Ordre alphabètique</a>
                    <a class="dropdown-item" href="list_projets.php?order=ID">Date de création</a>
                  </div>
                </div>
              </li>
              <li class="nav-item">

              </li>
            </ul>
          </div>
        </nav>


        <!-- The modal -->
        <div class="modal fade" id="addProjet" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabel">Ajouter un projet</h4>
              </div>
              <div class="modal-body">
                  <form class="" action="add_projetPost.php" method="post">
                    <input type="hidden" name="user" value="<?php echo $_SESSION['user']?>">
                    <input class="form-control" type="text" name="name" placeholder="Nom du projet">
                    <textarea class="form-control" name="description" rows="8" placeholder="Description du projet"></textarea>
                    <input class="form-control" type="text" name="deadtime" placeholder="Date butoire Ex:02-05-2018">
                    <br>
                    <hr>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <input class="btn btn-success" type="submit" name="" value="Ajouter">
                  </form>
              </div>
            </div>
          </div>
        </div>

      </header>
