<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- meta informations -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="page for the project 040 - ETML">
        <meta name="author" content="dossantogo - levequelo">

        <!-- title -->
        <title>Crunchy</title>

        <!-- Bootstrap core CSS -->
        <link href="../../00_ressource/bootstrap/index/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../../00_ressource/bootstrap/index/css/one-page-wonder.css" rel="stylesheet">

        <!-- customs styles -->
        <link href="../../00_ressource/css/searchBox.index.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/logIn.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/universal.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/contactBox.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/index.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/searchBox.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/footer.bug.min.css" rel="stylesheet">
        <link href="../../00_ressource/css/footer.min.css" rel="stylesheet">

        <!-- Fonts Awesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

        <!-- php current session -->
        <?php
            include '../../00_ressource/php/const.php';
            include '../../00_ressource/php/dao_connexion.php';
            session_start();

            $database = new Dbconnect;
         ?>
    </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../index/index.php">Crunchy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- navbar link responsive -->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../index/index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <?php
                            /*if ($_SESSION["IsAdmin"] === true) {
                                echo '<li class="nav-item">
                                <a class="nav-link" href="../addDish/index.php">Ajouter une recette</a>
                                </li>';
                            }*/
                        ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link display-contact-nav">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../signIn/signIn.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link display-logIn-nav">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- _===== SearchBox =====_ -->
    <div class="searchBox">
        <input class="searchTxt" type="text" name="earch" placeholder="Search">
        <a class="searchButton" href="#">
            <i class="fas fa-search"></i>
        </a>
    </div>

    <!-- Page title / the header -->
    <header class="masthead text-center text-white bg-red-header">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">Des délicieuses recettes</h1>
                <h2 class="masthead-subheading mb-0">Pour tous les goûts</h2>
                <a href="../listDishes/dishes.php" class="button-header btn btn-primary btn-xl rounded-pill mt-5">Voir les recettes</a>
            </div>
        </div>
    </header>

    <div id="contact-content" class="contactBox-before"></div>

    <div id="main-container">
        <?php
            // Read Form db
            $result = $database->getAllCategories();

            // show the value from arrays
            for ($i=0; $i < count($result); $i++) {
                echo '<section>' ;
                    echo '<div class="container">';
                        echo ' <div class="row align-items-center">';
                            echo '<div class="col-lg-6 order-lg-2">';
                                echo '<div class="p-5">';
                                    echo '<img class="img-fluid rounded-circle" src="../../00_ressource/images/'.$result[$i]['catImages'].'" alt="'.$result[$i]["catName"].'">';
                                echo '</div>';
                            echo '</div>';
                            echo '<div class="col-lg-6 order-lg-1">';
                                echo ' <div class="p-5">';
                                    echo '<h2 class="display-4">'.$result[$i]['catName'].'</h2>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</section>';
            }
        ?>
    </div>


    <!-- LogIn Fixed -->
    <!-- php if SESSION["IsLoged"] == TRUE -->
    <div class="display-logIn-container">
        <i class="fas fa-angle-double-left rotate-left"></i>
    </div>
    <!-- end if -->
    <!-- if the display button isn't here, we cant access into the form -->
    <!-- but it's more securised the take this into the if -->
    <div class="logIn-container-before">
        <div class="text-logIn">
            <p>Log In</p>
        </div>
        <div class="form-logIn">
            <form action="../index/index.php" method="post">
                <input type="text" placeholder="Login"><br>
                <input type="password" placeholder="password"><br>
                <button type="submit">Log In</button>
            </form>
        </div>
    </div>


    <div class="down-bg">
        <!-- /Empty/ -->
    </div>
    <!-- Footer -->
    <footer class="py-5 bg-red">
        <div class="container">
            <p class="m-0 text-center text-white small">Copyright &copy; Crunchy 2018-2019 <span class="footer-text-part2">Made by : Levêque, Dos Santos t(^-^t)</span></p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../../00_ressource/bootstrap/index/vendor/jquery/jquery.min.js"></script>
    <script src="../../00_ressource/bootstrap/index/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- customs javascripts -->
    <script type="text/javascript" src="../../00_ressource/js/logIn_Event.js"></script>
    <script type="text/javascript" src="../../00_ressource/js/searchBox_ColorChanger.js"></script>
    <script type="text/javascript" src="../../00_ressource/js/contactBox.js"></script>
    <script type="text/javascript" src="../../00_ressource/ajax/ajax-contact.js"></script>
    <script type="text/javascript">
        /* Get ajax content */
        GetContactContent("../../00_ressource/content/contact-ajax.txt");
    </script>
  </body>
</html>
