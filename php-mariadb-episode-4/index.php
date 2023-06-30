<?php
$dbh = new PDO('mysql:host=127.0.0.1;dbname=geographie;port=3306;charset=utf8mb4', 'marco', 'polo');
$stmt = $dbh->query('SELECT * FROM pays');
$les_pays = $stmt->fetchAll(PDO::FETCH_ASSOC);
$nb_pays = count($les_pays);
$dbh = null;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Géographie</title>
        <!-- Bootstrap 5.1 CSS -->
        <link href="./styles/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="./styles/geo.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>Accueil Base Géographie</h1>
        </div>
        <div class="container-fluid">
            <a href="./ajouter-pays.php" class="btn btn-info">Ajouter un pays</a>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" colspan="5"><?= $nb_pays ?> pays</th>
                    </tr>
                    <tr class="table-info">
                        <th>code</th>
                        <th>nom</th>
                        <th>capitale</th>
                        <th>population</th>
                        <th>superficie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($les_pays as $un_pays) { ?>
                        <tr>
                            <td><?= $un_pays["code"] ?></td>
                            <td><?= $un_pays["nom"] ?></td>
                            <td><?= $un_pays["capitale"] ?></td>
                            <td><?= $un_pays["population"] ?></td>
                            <td><?= $un_pays["superficie"] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- Bootstrap Bundle with Popper -->
        <script src="./js/bootstrap.bundle.min.js"></script>
    </body>
</html>