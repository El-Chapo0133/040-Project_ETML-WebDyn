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
    <link href="css/blog-post.css" rel="stylesheet">


    <!--CustomCss in other files-->
    <link href="CustomCss/myCss.css" rel="stylesheet">
    <link href="../../00_resources/00_css/99_Universal/logIn.css" rel="stylesheet">
    <link href="../../00_resources/00_css/99_Universal/searchBox.css" rel="stylesheet">
    <link href="../../00_resources/00_css/02_specialDish/searchBox.css" rel="stylesheet">

    <!-- Fonts Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  </head>

  <body>





    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-red fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Crunchy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="..\..\index.php">Accueil</a>
            </li>
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
      <a class="searchButton" href="#">
        <i class="fas fa-search"></i>
      </a>
    </div>






    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">Poulet Style KFC</h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">Username</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on January 1, 2018 at 12:00 PM</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""
          style="  width: 9000000px;">

        <div class="col-md-4">
          <!-- Side Widget -->
          <div class="card my-4 ingredients">
            <h5 class="card-header">Les Ingrédients</h5>
            <div class="card-body">
               <p> Des morceaux de poulet de votre choix</p>
               <p> De la farine</p>
               <p> Du lait</p>
               <p> Un œuf</p>
               <p> 1/3 de cuillère à soupe de sel</p>
               <p> 1 cuillère à soupe de poivre noir</p>
               <p> 1/2 cuillère à soupe de basilic</p>
               <p> 1/3 de cuillère à soupe d’origan</p>
               <p> 1 cuillère à soupe de sel au céleri</p>
               <p> 1 cuillère à soupe de moutarde en poudre</p>
               <p> 4 cuillères à soupe de paprika</p>
               <p> 1 cuillère à soupe de sel à l’ail</p>
               <p> 1 cuillère à soupe de gingembre moulu</p>
               <p> 1 cuillère à soupe de poivre blanc</p>
            </div>
          </div>

          </div>
          <div class="following">
               <!-- Post Content -->
               <p class="lead">La recette</p>

               <p>Faire chauffer de l’huile dans une poêle en fonte.
               </p>

               <p>Dans un bol,  mélanger 240 grammes de farine, le sel, le poivre noir, le basilic, l'origan, le céleri, la moutarde en poudre, le paprika, le sel à l’ail, le gingembre moulu et le poivre blanc. </p>

               <p>Dans un autre bol, ajouter du lait et un œuf et mélanger. Y incorporer le poulet, puis le tremper dans le mélange de farine et d’épices. Faire frire le poulet dans la poêle pendant 10 à 15 minutes. Laisser un peu refroidir avant de déguster.</p>
          </div>

         <!--<blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Someone famous in
              <cite title="Source Title">Source Title</cite>
            </footer>
          </blockquote>-->
          <hr>
          <!-- Sidebar Widgets Column -->
          </div>
          <!-- Comments Form -->
          <div class="card my-4 comment">
               <h5 class="card-header">Leave a Comment:</h5>
               <div class="card-body">
                    <form>
                    <div class="form-group">
                         <textarea class="form-control" rows="3"></textarea>
                              </div>
                                 <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
               </div>
          </div>

          <!-- Single Comment -->
           <div class="media mb-4 ">
               <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
               <div class="media-body">
                    <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>
          </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

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

    <!-- Footer -->
    <footer class="py-5 bg-red">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../00/resources/03_js/99_Universal/logIn_Event.js"></script>
    <script type="text/javascript" src="../../00_resources/03_js/99_Universal/searchBox_ColorChanger.js"> </script>

  </body>

</html>
