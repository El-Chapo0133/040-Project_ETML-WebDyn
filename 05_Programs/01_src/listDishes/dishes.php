<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crunchy</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">

    <link href="../../00_resources/00_css/01_dishes/dishesCss.css" rel="stylesheet">
    <link href="../../00_resources/00_css/99_Universal/logIn.css" rel="stylesheet">
    <link href="../../00_resources/00_css/99_Universal/searchBox.css" rel="stylesheet">

    <!-- Fonts Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-red fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../index.php">Crunchy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../../index.php">Accueil</a>
            </li>
            <!-- <balisephp>
              if ($_SESSION["IsAdmin"] == true) {
                <li class="nav-item">
                <a class="nav-link" href="#">Ajouter une recette</a>
                </li>
              }
            -->
            <li class="nav-item">
              <a class="nav-link" href="#">Ajouter une recette</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../signIn/signIn.php">Inscription</a>
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
      <a class="searchButton bg-red" href="#">
        <i class="fas fa-search"></i>
      </a>
    </div>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Recettes
        <small>par ordre alphabétique</small>
      </h1>

      <?php

       $arrayName = array('poulet','salades');

      for ($i=0; $i < count($arrayName); $i++) {
          echo '<div class="row">';
          echo '<div class="col-md-7">';
            echo '<a href="#">';
              echo '<img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">';
            echo '</a>';
          echo '</div>';
          echo '<div class="col-md-5">';
            echo '<h3>Project</h3>';
            echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>';
            echo '<button class="btnPerso"><span>Voir recette</span></button>';
          echo '</div>';
        echo '</div>';
        echo '<hr>';
      }
      ?>

      <!-- LogIn Fixed -->
      <!-- php if SESSION["IsLoged"] == TRUE -->
      <div class="display-logIn-container">
          <i class="fas fa-angle-double-left rotate-left"></i>
      </div>
      <!--  -->
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

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-red">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Crunchy 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../00_resources/03_js/99_Universal/logIn_Event.js"></script>
    <script type="text/javascript" src="00_resources/03_js/99_Universal/searchBox_ColorChanger.js"> </script>

  </body>

</html>
