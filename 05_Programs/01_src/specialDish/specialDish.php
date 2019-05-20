<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crunchy</title>

    <!-- Bootstrap core CSS -->
    <link href="../../00_ressource/bootstrap/specialDish/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../00_ressource/bootstrap/specialDish/css/blog-post.css" rel="stylesheet">


    <!--CustomCss in other files-->
    <link href="../../00_ressource/bootstrap/specialDish/CustomCss/myCss.css" rel="stylesheet">
    <link href="../../00_ressource/css/searchBox.min.css" rel="stylesheet">
    <link href="../../00_ressource/css/contactBox.min.css" rel="stylesheet">
    <link href="../../00_ressource/css/curtain.css" rel="stylesheet">

    <!-- Fonts Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <!-- PHP Part -->
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
              <a class="nav-link" href="..\index\index.php">Accueil</a>
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
      <input class="searchTxt" type="text" name="earch" placeholder="Search">
      <a class="searchButton" href="#">
        <i class="fas fa-search"></i>
      </a>
    </div>

    <!-- Page Content -->
    <?php
      $result = $database->getOneDish($_GET['id']);
    ?>
    <div class="container">
      <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
          <!-- Title -->
          <h1 class="mt-4"><?php echo $result[0]['disName']; ?></h1>
          <!-- Author -->
          <p class="lead">
            by
            <a href="#">Username</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?php echo $result[0]['disCreationDate']; ?></p>

          <hr>

          <!-- Preview Image -->
          <?php echo '<img class="img-fluid rounded" src="../../00_ressource/images/'.$result[0]['disImage'].'" alt="dish image" style="  width: 9000000px;">'; ?>
          

        <div class="col-md-4">
          <!-- Side Widget -->
          <div class="card my-4 ingredients">
            <h5 class="card-header">Les Ingrédients</h5>
            <div class="card-body">
              <?php
                echo $result[0]['disIngridients'];
              ?>
            </div>
          </div>

          </div>
          <div class="following">
               <!-- Post Content -->
               <p class="lead">La recette</p>

               <?php
                echo $result[0]['disRecepy'];
              ?>
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

    <div id="contact-content" class="contactBox-before"></div>

    <!-- Footer -->
    <footer class="py-5 bg-red">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../../00_ressource/bootstrap/specialDish/vendor/jquery/jquery.min.js"></script>
    <script src="../../00_ressource/bootstrap/specialDish/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../../00_ressource/js/searchBox_ColorChanger.js"> </script>
    <script type="text/javascript" src="../../00_ressource/js/contactBox.js"></script>
    <script type="text/javascript" src="../../00_ressource/ajax/ajax-contact.js"></script>
    <script type="text/javascript">
        /* Get ajax content */
        GetContactContent("../../00_ressource/content/contact-ajax.txt");
    </script>

  </body>

</html>
