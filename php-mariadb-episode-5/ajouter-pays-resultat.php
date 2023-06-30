<?php
$sql = "INSERT INTO pays (code, nom, capitale, population, superficie)
VALUES (UPPER(TRIM(:code)), :nom, :capitale, :population, :superficie)";

$dbh = new PDO('mysql:host=127.0.0.1;dbname=geographie;port=3306;charset=utf8mb4', 'marco', 'polo');
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':code', $_POST['code']);
$stmt->bindValue(':nom', $_POST['nom']);
$stmt->bindValue(':capitale', $_POST['capitale']);
$stmt->bindValue(':population', $_POST['popu']);
$stmt->bindValue(':superficie', $_POST['super']);
$stmt->execute();
$dbh = null;

$message = "Réussite de l'ajout de : {$_POST['nom']}";
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ajouter un pays - Résultat</title>
        <!-- Bootstrap 5.1 CSS -->
        <link href="./styles/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="./styles/geo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>Résultat de l'ajout du pays</h1>
        </div>
        <div class="container-fluid">
            <div class="alert alert-info">
                <?= $message; ?>
            </div>
            <p><a href="./index.php" class="btn btn-outline-info">Accueil</a></p>
        </div>
        <!-- Bootstrap Bundle with Popper -->
        <script src="./js/bootstrap.bundle.min.js"></script>
    </body>
</html>