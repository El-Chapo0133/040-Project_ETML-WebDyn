<!DOCTYPE html>
<html lang="fr" class="js">
        <head>
        <!-- meta informations -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="page for the project 040 - ETML">
        <meta name="author" content="dossantogo - levequelo">

        <!-- Title -->
        <title>Crunchy</title>

        <!-- Bootstrap core CSS -->
        <link href="../../00_ressource/bootstrap/listDishes/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <link href="css/1-col-portfolio.css" rel="stylesheet">

        <!-- My customs styles -->
        <link href="../../00_ressource/css/universal.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/contactBox.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/searchBox.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/footer.bug.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/container.bug.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/footer.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/listDish.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/button-a.list.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/button-perso-1.min.css" rel="stylesheet">

        <!-- Fonts Awesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

        <!-- php current session -->
        <?php
          session_start(); 
          include '../../00_ressource/php/dao_connexion.php';
          include '../../00_ressource/php/const.php';
          $database = new Dbconnect;
        ?>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-red fixed-top">
          <div class="container">
            <a class="navbar-brand" href="../index/index.php">Crunchy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="../index/index.php">Accueil</a>
                </li>
                        <?php
                            /*if ($_SESSION["IsAdmin"] === true) {
                                echo '<li class="nav-item">
                                <a class="nav-link" href="../addDish/index.php">Ajouter une recette</a>
                                </li>';
                            }*/
                        ?>
                <li class="nav-item">
                  <a class="nav-link display-contact-nav" href="#">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../signIn/signIn.php">Inscription</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- _===== SearchBox =====_ -->
        <div class="searchBox">
          <!-- ToDo : a form !!!! t(^-^t) -->
          <input class="searchTxt" type="text" name="earch" placeholder="Search">
          <a class="searchButton" href="#">
            <i class="fas fa-search"></i>
          </a>
        </div>

        <!-- Page Content -->
        <div class="main-container container">
          <!-- Page Heading -->
          <h1 class="my-4">Recettes
             <small>par ordre alphabétique</small>
          </h1>
          <?php
              $result = $database->getListDishes();
              for ($i=0; $i < count($result); $i++) {
                echo '<div class="row">';
                  echo '<div class="col-md-7">';
                    echo '<a href="#">';
                      echo '<img class="img-fluid rounded mb-3 mb-md-0 listImg" src="../../00_ressource/images/'.$result[$i]["disImage"].'" alt="'.$result[$i]["disName"].'">';
                    echo '</a>';
                  echo '</div>';
                  echo '<div class="col-md-5">';
                    echo '<h3>'.$result[$i]["disName"].'</h3>';
                    echo '<a href="../specialDish/specialDish.php?id='.$result[$i]["idDishes"].'"><button class="btnPerso"><span>Voir recette</span></button></a>';
                    /*if ($_SESSION["isAdmin"] == TRUE) {
                      echo '<a href="../modifyDish/modifyDish.php?id='.$result[$i]["idDishes"].'"><button class="btnPerso"><span>Modifier</span></button></a>';  
                    }*/
                  echo '</div>';
                echo '</div>';
                echo '<br>';
              }
          ?>
        </div>
        <!-- /.container -->

        <div id="contact-content" class="contactBox-before"></div>

        <div class="down-bg">
          <!-- /Empty/ -->
        </div>
        <!-- Footer -->
        <footer class="py-5 bg-red">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Crunchy 2018-2019 <span class="footer-text-part2">Made by : Levêque, Dos Santos</span></p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="../../00_ressource/bootstrap/listDishes/vendor/jquery/jquery.min.js"></script>
        <script src="../../00_ressource/bootstrap/listDishes/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="../../00_ressource/ajax/ajax-contact.js"></script>
        <script type="text/javascript">
            /* Get ajax content */
            GetContactContent("../../00_ressource/content/contact-ajax.txt");
        </script>
        <script type="text/javascript" src="../../00_ressource/js/searchBox_ColorChanger.js"> </script>
        <script type="text/javascript" src="../../00_ressource/js/contactBox.js"></script>
    </body>
</html>
