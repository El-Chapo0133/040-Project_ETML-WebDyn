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
        <link href="99_vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="98_css/one-page-wonder.min.css" rel="stylesheet">

        <!-- customs styles -->
        <link href="00_resources/00_css/99_Universal/searchBox.css" rel="stylesheet">
        <link href="00_resources/00_css/99_Universal/logIn.css" rel="stylesheet">
        <link href="00_resources/00_css/00_index/searchBox.css" rel="stylesheet">

        <!-- Fonts Awesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

        <!-- php current session -->
        <?php session_start() ?>
    </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Crunchy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- navbar link responsive -->
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="01_src/addDish/index.php">Ajouter une recette</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="01_src/signIn/signIn.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Connexion</a>
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
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">Des délicieuses recettes</h1>
                <h2 class="masthead-subheading mb-0">Pour tous les goûts</h2>
                <a href="01_src/listDishes/dishes.php" class="btn btn-primary btn-xl rounded-pill mt-5">Les recettes</a>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>

    <?php
        // Read Form db
        $arrayType = array('poulet','salades');
        $arrayImage = array('poulet','salades');
        $arrayDesc = array('wallah1', 'wallah2');

        // show the value from arrays
        for ($i=0; $i < count($arrayType); $i++) {
            echo '<section>' ;
                echo '<div class="container">';
                    echo ' <div class="row align-items-center">';
                        echo '<div class="col-lg-6 order-lg-2">';
                            echo '<div class="p-5">';
                                echo '<img class="img-fluid rounded-circle" src="00_resources/01_images/00_mainPage/'.$arrayImage[$i].'.jpg" alt="">';
                            echo '</div>';
                        echo '</div>';
                        echo '<div class="col-lg-6 order-lg-1">';
                            echo ' <div class="p-5">';
                                echo '<h2 class="display-4">'.$arrayType[$i].'</h2>';
                                echo '<p>'.$arrayDesc[$i].'</p>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</section>';
        }
    ?>


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
            <form action="index.php" method="post">
                <input type="text" placeholder="Login"><br>
                <input type="password" placeholder="password"><br>
                <button type="submit">Log In</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-red">
        <div class="container">
            <p class="m-0 text-center text-white small">Copyright &copy; Crunchy 2018</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="99_vendor/jquery/jquery.min.js"></script>
    <script src="99_vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- customs javascripts -->
    <script type="text/javascript" src="00_resources/03_js/99_Universal/logIn_Event.js"></script>
    <script type="text/javascript" src="00_resources/03_js/99_Universal/searchBox_ColorChanger.js"> </script>
  </body>
</html>
