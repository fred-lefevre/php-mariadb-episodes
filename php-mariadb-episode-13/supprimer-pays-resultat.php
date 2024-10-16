<?php
require_once "./inc/outils.php";

session_start();
$role = $_SESSION["role"] ?? 'anonyme';
verifier_role($role,  "administrateur");

try {
    $sql = "DELETE FROM pays WHERE code=:code;";

    $dbh = new PDO('mysql:host=127.0.0.1;dbname=geographie;port=3306;charset=utf8mb4', 'marco', 'polo');
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':code', $_POST['code']);
    $stmt->execute();
    $dbh = null;

    $message = "Réussite de la suppression du pays de code : {$_POST['code']}";
    $feedback = alerte($message, 'alert-info');
} catch (Exception $e) {
    $message = $e->getMessage();
    $feedback = alerte($message, 'alert-danger');
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Supprimer un pays - Résultat</title>
        <!-- Bootstrap 5.1 CSS -->
        <link href="./styles/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="./styles/geo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>Résultat de la suppression du pays</h1>
        </div>
        <div class="container-fluid">
            <?= $feedback; ?>
            <p><a href="./index.php" class="btn btn-outline-info">Accueil</a></p>
        </div>
        <!-- Bootstrap Bundle with Popper -->
        <script src="./js/bootstrap.bundle.min.js"></script>
    </body>
</html>