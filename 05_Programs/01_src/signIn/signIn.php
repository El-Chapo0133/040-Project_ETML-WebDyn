<!-- PHP -->
<?php
$email =$name =$surname =$username =$password =$passwordCheck ="";
$nameErr=$surnameErr=$emailErr=$passwordCheckErr=$passwordErr=$usernameErr="";
$nameRegex ="/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/";
$emailRegex="/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/";
$usernameRegex="/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/";

//$email =trim($_POST['mailAddress']);
//$name =trim($_POST['firstName']);
//$surname=trim($_POST['surName']);
//$username=trim($_POST['usernameInput']);
//$password=trim($_POST['passwordInput']);
//$passwordCheck=trim($_POST['passwordCheck']);

//$errormsg = "Valeur invalide";
$error = 'Ce champ est obligatoire';
$validmsg = "";
$valide = TRUE;


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["firstName"])) {
        $nameErr = "Ce champ est obligatoire";
        $valide = FALSE;
    }
    else if (!preg_match($nameRegex, $_POST["firstName"])) {
        $nameErr = "Le nom n'est pas valide";
        $valide = FALSE;
    }
    else{
        $name = $_POST["firstName"];
    }


    if (empty($_POST["surName"])) {
        $surnameErr = "Ce champ est obligatoire";
        $valide = FALSE;
    }
    else if (!preg_match($nameRegex, $_POST["surName"])) {
        $surnameErr = "Le nom de famille n'est pas valide";
        $valide = FALSE;
    }
    else{
        $surname = $_POST["surName"];
    }


    if (empty($_POST["mailAddress"]))  {
        $emailErr = "Ce champ est obligatoire";
        $valide = FALSE;
    }
    else  if (!preg_match($emailRegex,$_POST["mailAddress"])){
        $emailErr ="L'Email n'est pas valide";
        $valide = FALSE;
    }
    else{
        $email = $_POST["mailAddress"];
    }


    if (empty($_POST["passwordInput"]))  {
        $passwordErr = "Ce champ est obligatoire";
        $valide = FALSE;
    }
    else {
        $password = $_POST["passwordInput"];
    }

    if (empty($_POST["passwordCheck"]))  {
        $passwordCheckErr = "Ce champ est obligatoire";
        $valide = FALSE;
    }
    else if($_POST["passwordCheck"]!==$_POST["passwordInput"]){
        $passwordCheckErr ="Les mots de passe ne se correspondent pas";
        $valide = FALSE;
    }
    else{
        $passwordCheck = $_POST["passwordCheck"];
    }

    if (empty($_POST["usernameInput"]))  {
        $usernameErr = "Ce champ est obligatoire";
        $valide = FALSE;
    }
    else  if (!preg_match($usernameRegex,$_POST["usernameInput"])){
        $usernameErr ="Le nom d'utilisateur n'est pas valide";
        $valide = FALSE;
    }
    else{
        $username = $_POST["usernameInput"];
    }

    if ($valide === TRUE) {
        $validmsg="Vos infotmazions fhuzsdgfjhdg";
    }

}
/*
if($_POST['submit']) {

    if (!preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/",$email)){
        $error ="L'Email n'est pas valide";
    }

    if(empty($email)) {
        $error .= 'Veuillez renseigner ce champ<br>';
    }

    if(!preg_match('/^[a-z ]+$/i', $name)) {
        $error .= 'Veuillez remplir ce champ correctement<br>';
    }

    if(empty($name)) {
        $error .= 'Veuillez renseigner ce champ<br>';
    }

    if(!preg_match('/^[a-z ]+$/i', $surname)) {
        $error .= 'Veuillez remplir ce champ correctement<br>';
    }

    if(empty($surname)) {
        $error .= 'Veuillez renseigner ce champ<br>';
    }

    if(!preg_match('/^[a-z ]+$/i', $username)) {
        $error .= 'Veuillez remplir ce champ correctement<br>';
    }

    if(empty($username)) {
        $error .= 'Veuillez renseigner ce champ<br>';
    }

    if(!preg_match('/^[a-z ]+$/i', $password)) {
        $error .= 'Veuillez remplir ce champ correctement<br>';
    }

    if(empty($password)) {
        $error .= 'Veuillez renseigner ce champ<br>';
    }

    if(empty($passwordCheck)) {
        $error .= 'Veuillez renseigner ce champ<br>';
    }

    if(empty($passwordCheck)) {
        $error .= 'Veuillez renseigner ce champ<br>';
    }
}
*/
?>
<!-- PHP -->


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Inscription</title>

        <!--CustomCss in other files-->
        <link href="../../00_Ressource/bootstrap/signIn/CustomCss/myCss.css" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="../../00_Ressource/bootstrap/signIn/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../../00_Ressource/bootstrap/signIn/css/blog-post.css" rel="stylesheet">
        <link href="../../00_ressource/css/contactBox.min.css" rel="stylesheet">

        <!-- PHP Part -->
        <?php session_start() ?>


    </head>

    <body>

        <!-- Navigation -->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

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

                    <h1 class="mt-4">Créez votre compte!</h1>

                    <hr>

                    <!-- Form  -->

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

                        <!-- Nom de Famille  -->
                        <div class="form-row">
                            <label for="validationDefault02">Nom de Famille</label>
                            <input type="text" class="form-control" name="surName" id="validationDefault02" placeholder="Nom de Famille" value="<?php echo htmlspecialchars($surname);?>" pattern="/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/" required> *
                            <span class="error"><?php echo $surnameErr;?></span>
                        </div>
                        <br>


                        <!-- Prénom  -->
                        <div class="form-row">
                            <label for="validationServer01">Prénom</label>
                            <input type="text" class="form-control" id="validationServer01" placeholder="Prénom" name="firstName" value="<?php echo htmlspecialchars($name);?>" pattern="/[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*/*" required> *
                            <span class="error"><?php echo $nameErr;?></span>

                        </div>
                        <br>


                        <!-- Adresse Mail  -->

                        <div class="form-row">

                            <label for="exampleInputEmail1">Adresse Mail</label>

                            <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Mail" name="mailAddress"   class="form-control" pattern="[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+\.[a-zA-Z]{2,4}" value="<?php echo htmlspecialchars($email);?>" required>

                            <small id="emailHelp" class="form-text text-muted">Votre adresse mail ne sera jamais divulgué au publique.<br>*  <span class="error"><?php echo $emailErr;?></span></small>


                        </div>
                        <br>
                        <!-- Mot de Passe  -->
                        <div class="form-row">
                            <label for="inputPassword" class="control-label">Mot de passe</label>
                            <input type="password" pattern=".{6,}" data-minlength="6"  aria-describedby="passwordHelp"  class="form-control" id="inputPassword" placeholder="Password" name="passwordInput" title="Au minimum 6 caractéres." value="<?php echo htmlspecialchars($password);?>" required>
                            <small id="passwordHelp" class="form-text text-muted">Au minimum 6 caractéres.<br>*  <span class="error"><?php echo $passwordErr;?></span></small>

                        </div>

                        <!--Verification du Mot de Passe  -->
                        <div class="form-row">
                            <label for="inputPassword" class="control-label">Confirmation du mot de passe</label>
                            <input type="password" pattern=".{6,}" class="form-control" name="passwordCheck" id="inputPasswordConfirm" placeholder="Confirmation du mot de passe" required> *  <span class="error"><?php echo $passwordCheckErr;?></span>

                            <div class="help-block with-errors"></div>
                        </div>
                        <br>





                        <!-- Nom d'utilisateur  -->
                        <div class="form-row">
                            <label for="validationServerUsername">Nom d'utilisateur⠀</label>

                            <small id="usernameHelp" class="form-text text-muted">Les autres utilisateurs vous reconaitront par le nom d'utilisateur.</small>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                </div>
                                <input type="text" class="form-control" name="usernameInput" id="validationServerUsername" placeholder="Nom d'utilisateur" pattern="[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-ZÀ-ÖØ-öø-ÿ]+\.?)*" aria-describedby="inputGroupPrepend3" value="<?php echo htmlspecialchars($username);?>" required>

                                <br>
                                <div class="invalid-feedback">
                                    Veuillez entrer un nom d'utilisateur valide.
                                </div>
                            </div>
                            *<span class="error"><?php echo $usernameErr;?></span>


                        </div>
                        <br>
                        <br>
                        <button type="submit" name="submit" class="btnPerso" ><span>Créer compte</span></button>
                        <?php echo $validmsg;?></span>
                        <br>
                        <br>



                        <!-- Form  -->
                </div>
            </div>
        </div>

        <div id="contact-content" class="contactBox-before"></div>

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Crunchy 2019</p>
            </div>

        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="../../00_Ressource/bootstrap/signIn/vendor/jquery/jquery.min.js"></script>
        <script src="../../00_Ressource/bootstrap/signIn/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="../../00_ressource/js/contactBox.js"></script>
        <script type="text/javascript" src="../../00_ressource/ajax/ajax-contact.js"></script>
        <script type="text/javascript">
            /* Get ajax content */
            GetContactContent("../../00_ressource/content/contact-ajax.txt");
        </script>

    </body>

</html>