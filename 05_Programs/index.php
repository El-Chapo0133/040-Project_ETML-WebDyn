<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>One Page Wonder - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/one-page-wonder.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Mom spaghetti</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ajouter une recette</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Inscription</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Connexion</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">Des délicieuses recettes</h1>
          <h2 class="masthead-subheading mb-0">Pour tous les goûts</h2>
          <a href="Dishes/dishes.php" class="btn btn-primary btn-xl rounded-pill mt-5">Les recettes</a>
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
                        echo '<img class="img-fluid rounded-circle" src="img/'.$arrayImage[$i].'.jpg" alt="">';
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

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Mom Spaghetti 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>