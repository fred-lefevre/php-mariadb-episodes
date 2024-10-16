<?php
require_once "./inc/outils.php";

session_start();
$role = $_SESSION["role"] ?? 'anonyme';
verifier_role($role,  "administrateur");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ajouter un pays</title>
        <!-- Bootstrap 5.1 CSS -->
        <link href="./styles/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="./styles/geo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>Ajouter un pays</h1>
        </div>
        <div class="container-fluid">
            <form action="./ajouter-pays-resultat.php" method="post">
                <div class="row m-2">
                    <div class="col-sm-2">
                        <label for="code" class="form-label">Code :</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="code" name="code" required minlength="3" maxlength="3">
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-sm-2">
                        <label for="nom" class="form-label">Nom :</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-sm-2">
                        <label for="capitale" class="form-label">Capitale :</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="capitale" name="capitale" required>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-sm-2">
                        <label for="popu" class="form-label">Population :</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="popu" name="popu" required>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-sm-2">
                        <label for="super" class="form-label">Superficie :</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="super" name="super"required>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-10">
                        <a href="./index.php" class="btn btn-outline-info">Annuler</a>
                        <button type="submit" class="btn btn-info">Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
        <?= info_connexion($role) ?>
        <!-- Bootstrap Bundle with Popper -->
        <script src="./js/bootstrap.bundle.min.js"></script>
    </body>
</html>