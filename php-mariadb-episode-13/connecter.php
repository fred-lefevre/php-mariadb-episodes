<?php
session_start();

if (isset($_POST["compte"]) and isset($_POST["mdp"])) {
    // Vérification de l'authentification
    if ($_POST["compte"] == "john" and $_POST["mdp"] == "Doe" ) {
        // Réussite de l'authentification
        $_SESSION["role"] = "administrateur";
        header("Location: ./index.php");
        exit;
    }
    // Échec de l'authentification
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Se connecter</title>
        <!-- Bootstrap 5.1 CSS -->
        <link href="./styles/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="./styles/geo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>Se connecter</h1>
        </div>
        <div class="container-fluid">
            <form action="./connecter.php" method="post">
                <div class="row m-2">
                    <div class="col-sm-2">
                        <label for="compte" class="form-label">Compte :</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="compte" name="compte" required>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-sm-2">
                        <label for="mdp" class="form-label">Mot de passe :</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="mdp" name="mdp" required>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-10">
                        <a href="./index.php" class="btn btn-outline-info">Annuler</a>
                        <button type="submit" class="btn btn-info">Connexion</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Bootstrap Bundle with Popper -->
        <script src="./js/bootstrap.bundle.min.js"></script>
    </body>
</html>