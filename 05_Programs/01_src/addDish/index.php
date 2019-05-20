<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crunchy</title>

    <!-- Bootstrap core CSS -->
    <link href="../../00_ressource/bootstrap/addDish/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../00_ressource/bootstrap/addDish/css/blog-post.css" rel="stylesheet">

    <!--CustomCss in other files-->
    <link href="../../00_ressource/bootstrap/addDish/CustomCss/myCss.css" rel="stylesheet">
    <link href="../../00_ressource/css/contactBox.min.css" rel="stylesheet">
    <link href="../../00_ressource/css/custom-line.min.css" rel="stylesheet">

    <!--DropZone css files-->
    <link href="../../00_ressource/bootstrap/addDish/CustomCss/dropzone.css" rel="stylesheet">

    <!--DropZone css files-->
    <link href="../../00_ressource/bootstrap/addDish/CustomCss/dropzoneStyle.css" rel="stylesheet">

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

    <!-- PHP Part -->
    <?php
        include '../../00_ressource/php/const.php';
        include '../../00_ressource/php/dao_connexion.php';
        session_start();

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
                        <li class="nav-item">
                            <a class="nav-link display-contact-nav" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="contact-content" class="contactBox-before"></div>

        <!-- Page Content -->
        <div class="container">

            <div class="row">

                <!-- Post Content Column -->
                <div class="col-lg-8">

                    <!-- Title -->
                    <h1 class="mt-4">Choisissez l'image de votre recette</h1>

                    <!-- Bootstrap core JavaScript -->
                    <script src="../../00_ressource/bootstrap/addDish/vendor/jquery/jquery.min.js"></script>
                    <script src="../../00_ressource/bootstrap/addDish/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <script src="../../00_ressource/bootstrap/addDish/vendor/dropzone.js"></script>

                    <form action="/file-upload" class="dropzone">
                        <div class="fallback">
                        </div>
                    </form>

                    <!-- Title -->
                    <h1 class="mt-4">Ajoutez votre recette!</h1>

                    <!-- <?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?> -->
                    <!-- Start of form -->
                    <form method="get" action="wahou.php">

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


                    <div class="small-12 columns mt5">
                        <h2 class="mt-4">Quelques informations:</h2>
                        <ul class="menu expanded inline-datas form-ul">
                            <li class="icon-level has-tip top" title="Difficulté" data-tooltip aria-haspopup="true">
                                <p>Difficulté</p>
                                <input type="radio" name="difficulty" value="1" checked><label for="difficulty">1/3</label><br>
                                <input type="radio" name="difficulty" value="2"><label for="difficulty">2/3</label><br>
                                <input type="radio" name="difficulty" value="3"><label for="difficulty">3/3</label><br>
                            </li>
                            <li class="icon-level has-tip top" title="person number" data-tooltip aria-haspopup="true">
                                <p>Nombre de personnes</p>
                                <input type="radio" name="nbPerson" value="1" checked><label for="nbPerson">1</label><br>
                                <input type="radio" name="nbPerson" value="2"><label for="nbPerson">2</label><br>
                                <input type="radio" name="nbPerson" value="3"><label for="nbPerson">3</label><br>
                                <input type="radio" name="nbPerson" value="4"><label for="nbPerson">4</label><br>
                                <input type="radio" name="nbPerson" value="5"><label for="nbPerson">5</label><br>
                                <input type="radio" name="nbPerson" value="6"><label for="nbPerson">6</label><br>
                                <input type="radio" name="nbPerson" value="7"><label for="nbPerson">7</label><br>
                                <input type="radio" name="nbPerson" value="8"><label for="nbPerson">7+</label>
                            </li>
                            <li class="icon-level has-tip top" title="categorie" data-tooltip aria-haspopup="true">
                                <p>categorie</p>
                                <?php
                                    $cat = $database->getAllCategories();
                                    for ($i = 0; $i < count($cat); $i++) {
                                        if ($i == 0) {
                                            echo '<input type="radio" name="category" value="'.$cat[$i]["idCategoryDishes"].'" checked><label for="category">'.$cat[$i]["catName"].'</label>';
                                        } else {
                                            echo '<input type="radio" name="category" value="'.$cat[$i]["idCategoryDishes"].'"><label for="category">'.$cat[$i]["catName"].'</label>';
                                        }
                                        if ($i < count($cat) - 1) {
                                            echo '<br>';
                                        }
                                    }
                                    // get all categories 
                                    // echo <input type="radio" name="category"><label for="category">text</label>
                                ?>
                            </li>
                        </ul>
                    </div>

                    <div class="custom-line"></div
            
                    <div class="row">
                        <div class="col-md-4"style="width:30%;">
                            <!-- Side Widget -->
                            <div class="card my-3  fit-userinput"style="width:100%;">
                                <h5 class="card-header">Les Ingrédients</h5>
                                <div class="card-body">

                                        <textarea class="form-ingredients" name="ingredients" rows="3"></textarea>

                                </div>
                            </div>


                        </div>
                            <div class="col-md-4 recepy"style="width:66%;">
                            <!-- Side Widget -->
                            <div class="card my-4 fit-userinput  "style="width:100%;">
                                <h5 class="card-header">La Recette</h5>
                                <div class="card-body">

                                    <textarea class="form-ingredients" name="receipt" rows="3"></textarea>
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

                    <button type="submit" name="submit" class="custom-button-submit">Terminer</button>

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
        <script src="../../00_ressource/bootstrap/addDish/vendor/jquery/jquery.min.js"></script>
        <script src="../../00_ressource/bootstrap/addDish/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../00_ressource/bootstrap/addDish/vendor/bootstrap/js/popper.min.js"></script>
        <script type="text/javascript" src="../../00_ressource/ajax/ajax-contact.js"></script>
        <script type="text/javascript" src="../../00_ressource/js/contactBox.js"></script>
        <script type="text/javascript">
            /* Get ajax content */
            GetContactContent("../../00_ressource/content/contact-ajax.txt");
        </script>
    </body>
</html>