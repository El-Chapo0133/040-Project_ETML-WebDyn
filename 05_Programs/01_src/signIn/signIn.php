<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inscription</title>

    <!--CustomCss in other files-->
    <link href="CustomCss/myCss.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

    <div class="container">

        <a class="navbar-brand" href="../../index.php">Crunchy</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="..\..\index.php">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="..\addDish\index.php">Ajouter une recette</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Inscription</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Connexion</a>
                </li>

            </ul>
        </div>

    </div>

</nav>

    <!-- PHP -->
<?php

// define variables and set to empty values
$surNameErr = $passwordCheckErr = $websiteErr = $userNameErr = $passwordErr = $emailErr = $firstNameErr = "";
$firstName  = $gender = $surName = $password = $email = $surName = $userName = $passwordCheck = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstName"])) {
        $firstNameErr = "Name is required";
    } else {
        $firstName = test_input($_POST["firstName"]);
    }

    if (empty($_POST["mailAddress"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["mailAddress"]);
    }

    if (empty($_POST["surName"])) {
        $surNameErr = "SurName is required";
    } else {
        $surName = test_input($_POST["surName"]);
    }

    if (empty($_POST["usernameInput"])) {
        $userNameErr = "Username is required";
    } else {
        $userName = test_input($_POST["usernameInput"]);
    }

    if (($_POST["passwordCheck"]) != ($_POST["passwordInput"])) {
        $passwordCheckErr = "The password isn't the same";
    } else {
        $passwordCheck = test_input($_POST["passwordCheck"]);
    }

    if (empty($_POST["passwordInput"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["passwordInput"]);
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
    <!-- PHP -->


<!-- Page Content -->

<div class="container">

    <div class="row">

        <!-- Post Content Column -->

        <div class="col-lg-8">

            <!-- Title -->

            <h1 class="mt-4">Créez votre compte!</h1>

            <hr>

            <!-- Form  -->

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                <!-- Adresse Mail  -->

                <div class="form-row">

                    <label for="exampleInputEmail1">Adresse Mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Mail" name="mailAddress">

                    <small id="emailHelp" class="form-text text-muted">Votre adresse mail ne sera jamais divulgué au publique.<br>*</small>
                    <?php echo $firstNameErr;?>

                </div>
                <br>
                <!-- Mot de Passe  -->
                <div class="form-row">
                    <label for="inputPassword" class="control-label">Password</label>
                    <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" name="passwordInput" required>
                    <small id="passwordHelp" class="form-text text-muted">Au minimum 6 caractéres.<br>*</small>
                    <?php echo $passwordErr;?>
                </div>

                <!--Verification du Mot de Passe  -->
                <div class="form-row">
                    <input type="password" class="form-control" name="passwordCheck" id="inputPasswordConfirm" placeholder="Confirm" required> *
                    <?php echo $passwordCheckErr;?>
                    <div class="help-block with-errors"></div>
                </div>
                <br>

                <!-- Prénom  -->
                <div class="form-row">
                    <label for="validationServer01">Prénom</label>
                    <input type="text" class="form-control" id="validationServer01" placeholder="Prénom" name="firstName" value="" required> *
                    <?php echo $firstNameErr;?>
                </div>
                <br>

                <!-- Nom de Famille  -->
                <div class="form-row">
                    <label for="validationDefault02">Nom de Famille</label>
                    <input type="text" class="form-control" name="surName" id="validationDefault02" placeholder="Nom de Famille" value="" required> *
                    <?php echo $surNameErr;?>
                </div>
                <br>

                <!-- Nom d'utilisateur  -->
                <div class="form-row">
                    <label for="validationServerUsername">Nom d'utilisateur</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                        </div>
                        <input type="text" class="form-control" name="usernameInput" id="validationServerUsername" placeholder="Nom d'utilisateur" aria-describedby="inputGroupPrepend3" required>
                        <br>
                        <div class="invalid-feedback">
                            Veuillez entrer un nom d'utilisateur valide.
                        </div>
                    </div>
                    <small id="usernameHelp" class="form-text text-muted">Les autres utilisateurs vous reconaitront par le nom d'utilisateur.</small>
                </div>
                <br>
                <br>
                <button type="submit" name="userButton" class="btnPerso"><span>Créer compte</span></button>

                <br>
                <br>
                <!-- Form  -->
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Crunchy 2019</p>
    </div>

</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>