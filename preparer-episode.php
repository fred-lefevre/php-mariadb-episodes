<?php
// -----------------------------------------------------------------------------
// preparer-episode.php
//
// Frederic Lefevre <fred.lefevre@gmail.com>
// -----------------------------------------------------------------------------

require_once "./outils.php";

echo "Script de préparation d'un épisode de PHP-MariaDB" . PHP_EOL;

echo "=> Interprétation du fichier de configuration" . PHP_EOL;
$fichier_config = "preparer-episode.json";
if (!file_exists($fichier_config)) {
    echo "ERREUR : Le fichier de configuration $fichier_config n'existe pas" . PHP_EOL;
    exit;
}
$resultat = file_get_contents($fichier_config);
if (!$resultat) {
    echo "ERREUR : Impossible de lire le contenu du fichier de configuration $fichier_config" . PHP_EOL;
    exit;
}
$config = json_decode($resultat, true);
$json_error = json_last_error();
if ($json_error != JSON_ERROR_NONE) {
    echo "ERREUR JSON n°" . $json_error . " : ". json_last_error_msg() . " lors de l'interprétation du fichier de configuration" . PHP_EOL;
    exit;
}

if (!file_exists($config["client_bd"])) {
    echo "ERREUR : " . $config["client_bd"] . " est un chemin incorrect vers le client du serveur de base de données." . PHP_EOL;
    exit;
}

$cmd = $config["client_bd"] . " --version";
$execution = exec($cmd, $txt_exec, $code_exec);
if ($code_exec === 1) {
    echo "ERREUR : échec de l'exécution de la commande $cmd" . PHP_EOL;
    exit;
}
echo "=> Version du client du serveur de base de données : " . PHP_EOL;
echo $txt_exec[0] . PHP_EOL;

echo "=> Quel est le numéro de l'épisode ? ";
fscanf(STDIN, "%d", $num_episode);
$dossier_code = "php-mariadb-episode-$num_episode";
if (!file_exists($dossier_code)) {
    echo "ERREUR : Le dossier $dossier_code, contenant le code, n'existe pas." . PHP_EOL;
    exit;
}
echo "=> Le dossier contenant le code est $dossier_code" . PHP_EOL;
$fic_sql = "bd/php-mariadb-episode-$num_episode.sql";
if (!file_exists($fic_sql)) {
    echo "ERREUR : Le fichier $fic_sql, contenant le SQL, n'existe pas." . PHP_EOL;
    exit;
}
echo "=> Le fichier contenant le code SQL est $fic_sql" . PHP_EOL;

$cmd = $config["client_bd"] . " -u " . $config["login_bd"] . " -p -h " . $config["adresse_sgbd"] . " -P " . $config["port_sgbd"] . " < $fic_sql";
echo "=> Fichier $fic_sql" . PHP_EOL;
echo "Mot de passe du compte " . $config["login_bd"] . " : " . PHP_EOL;
$execution = exec($cmd, $txt_exec, $code_exec);
if ($code_exec === 1) {
    echo "ERREUR : échec de l'exécution de la commande $cmd" . PHP_EOL;
    exit;
}
echo "Le schéma de la base de données 'geographie' est préparé.". PHP_EOL;
echo "Les données sont insérées dans la base 'geographie'.". PHP_EOL;
echo "Les accès à la base 'geographie' sont préparés.". PHP_EOL;

$dossier_cible = $config["dossier_site"];
echo "=> Dossier servi par le serveur Apache : dossier_cible" . PHP_EOL;
if (!supprimer_dossier($dossier_cible)) {
    echo "ERREUR : Échec de la suppression du dossier $dossier_cible" . PHP_EOL;
    exit;
}
if (!mkdir($config["dossier_site"], 0777, true)) {
    echo "ERREUR : Échec de la création du dossier $dossier_cible" . PHP_EOL;
    exit;
}
echo "Création du dossier vide $dossier_cible" . PHP_EOL;
if (!copier_dossier($dossier_code, $dossier_cible)) {
    echo "ERREUR : Échec de la copie du dossier $dossier_code vers le dossier $dossier_cible" . PHP_EOL;
    exit;
}
echo "Le code est copié dans le dossier $dossier_cible" . PHP_EOL;

echo "=> Fin de la préparation de l'épisode $num_episode" . PHP_EOL;

echo "Avec une installation locale, l'URL de la page d'accueil est : http://127.0.0.1/geo" . PHP_EOL;
