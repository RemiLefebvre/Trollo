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

          <h2><strong><a class="navbar-brand ml-1 navbar-brand" href="index.php">Trollo</a></strong></h2>

          <div class="collapse navbar-collapse " id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li >
                <strong class="nav-link text-muted">Bonjour <?php echo $_SESSION['user'] ?></strong>
              </li>
              <li>
                <a class="nav-link" href="list_projets.php">Liste des projets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="deconnexion.php">Se deconnecter</a>
              </li>

            </ul>
          </div>
        </nav>


      </header>
