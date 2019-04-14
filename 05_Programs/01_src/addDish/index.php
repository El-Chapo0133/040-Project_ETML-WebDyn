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

    <!--DropZone css files-->
    <link href="CustomCss/dropzone.css" rel="stylesheet">

    <!--DropZone css files-->
    <link href="CustomCss/dropzoneStyle.css" rel="stylesheet">

    <!--Google Adsence Program Code-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- XYZ 336 x 280 -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-test="on";
         data-ad-client="ca-pub-0000000000000000"
         data-ad-slot="0000000000"
         data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

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
                <li class="nav-item active">
                    <a class="nav-link" href="..\addDish\index.php">Ajouter une recette</a>
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

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">Choisissez l'image de votre recette</h1>

            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="vendor/dropzone.js"></script>

            <form action="/file-upload" class="dropzone">
                <div class="fallback">
                </div>
            </form>

            <!-- Title -->
            <h1 class="mt-4">Ajoutez votre recette!</h1>

            <!-- Start of form -->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                <div class="form-row">

                    <label for="inputRecepyName">Nom de votre recette :</label>
                    <input type="text" class="form-control" id="inputRecepyName" placeholder="Nom de recette" name="userRecepyName">

                </div>
                <br>
                <!-- Author -->
                <p class="lead">
                    par
                    <a href="#">Username</a>
                </p>
                <hr>

                <!-- Date/Time -->
                <p>La date de l'ajout de la recette sera affiché ici</p>

                <hr>

                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <div class="wrapper">
                    <a href="http://www.google.com"><i class="fa fa-3x fa-google-plus"></i></a>
                    <a href="http://www.facebook.com"><i class="fa fa-3x fa-facebook-square"></i></a>
                    <a href="http://www.twitter.com"><i class="fa fa-3x fa-twitter-square"></i></a>
                </div>
            </form>


                <div class="small-12 columns mt5">
                    <h2 class="mt-4">Quelques informations:</h2>
                    <ul class="menu expanded inline-datas">
                        <li class="icon-man has-tip top" title="Nombre de personnes" data-tooltip aria-haspopup="true">
                            <div class="card-body">

                            <textarea class="form-people" placeholder="Nom de recette" rows="1"></textarea>
                            </div>
                        </li>
                        <li id="ContentPlaceHolder_trPrepa" class="icon-prepa has-tip top" title="Temps de préparation" data-tooltip="" aria-haspopup="true">
                            <span id="ContentPlaceHolder_LblRecetteTempsPrepa">30 min</span>
                        </li>
                        <li id="ContentPlaceHolder_trCuisson" class="icon-cuisson has-tip top" title="Temps de cuisson" data-tooltip="" aria-haspopup="true">
                            <span id="ContentPlaceHolder_LblRecetteTempsCuisson">20 min</span>
                        </li>
                        <li id="ContentPlaceHolder_trRepos" class="icon-repos has-tip top hide-for-small" title="Temps de repos" data-tooltip="" aria-haspopup="true">
                            <span id="ContentPlaceHolder_LblRecetteTempsRepos"></span>
                        </li>
                        <li class="icon-euro has-tip top" title="Coût de la recette" data-tooltip aria-haspopup="true">
                            18,17
                        </li>
                        <li class="icon-level has-tip top" title="Difficulté" data-tooltip aria-haspopup="true">
                            <span id="ContentPlaceHolder_LblRecetteDifficulte">Facile</span>
                        </li>
                        <li id="ContentPlaceHolder_trCalories" class="icon-notebook has-tip top" title="Calories" data-tooltip="" aria-haspopup="true">
                            <span id="ContentPlaceHolder_lblCalories"></span>
                        </li>
                    </ul>
                </div>



            <hr>
            <div class="row">
            <div class="col-md-4"style="width:30%;">
                <!-- Side Widget -->
                <div class="card my-3  fit-userinput"style="width:100%;">
                    <h5 class="card-header">Les Ingrédients</h5>
                    <div class="card-body">

                            <textarea class="form-ingredients" rows="3"></textarea>

                    </div>
                </div>


            </div>
                <div class="col-md-4 recepy"style="width:66%;">
                <!-- Side Widget -->
                <div class="card my-4 fit-userinput  "style="width:100%;">
                    <h5 class="card-header">La Recette</h5>
                    <div class="card-body">

                        <textarea class="form-ingredients" rows="3"></textarea>

                    </div>
                </div>

            </div>
            </div>


            <!--<blockquote class="blockquote">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer">Someone famous in
          <cite title="Source Title">Source Title</cite>
        </footer>
      </blockquote>-->

            <!-- Sidebar Widgets Column -->
            </form>
            <!-- Comments Form -->

        </div>

        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>

<!-- Footer -->
<footer class="py-5 bg-red">
    <div class="container-footer">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>