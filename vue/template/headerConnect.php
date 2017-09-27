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
      <header class="">
        <nav id="navheader" class="navbar navbar-toggleable-md navbar-light bg-faded">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <h2><strong><a class="navbar-brand ml-1 navbar-brand" href="index.php">Trollo</a></strong></h2>

          <div class="collapse navbar-collapse " id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <strong class="nav-link">Bonjour <?php echo $_SESSION['user'] ?></strong>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Ajouter un projet</a>
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
                    <a class="dropdown-item" href="#">Date butoire</a>
                    <a class="dropdown-item" href="#">Ordre alphabètique</a>
                    <a class="dropdown-item" href="#">Date de création</a>
                  </div>
                </div>
              </li>
              <li class="nav-item">

              </li>
            </ul>
          </div>
        </nav>
      </header>
