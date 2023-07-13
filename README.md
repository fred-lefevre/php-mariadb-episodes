# 🚀 Projet "php-mariadb-episodes"

## 🎯 Objectif

- Ce dépôt est destiné à des personnes souhaitant apprendre ou revoir comment créer un site web dynamique.

- Il est requis des connaissances basiques en HTML, CSS, PHP et SQL.

- Tout le code est fourni dans le présent dépôt `GitHub` et toutes les explications associées sont fournies dans `YouTube`.

- Ce dépôt contient tous les fichiers utilisés dans la playlist YouTube "PHP et MariaDB / MySQL" dont l'URL est https://www.youtube.com/watch?v=jJOV4eVzdGU&list=PLQsTrO2pHmL7zCuVhsgWA5oCanRwQqUy1

- Cette playlist décrit, épisode par épisode, la création d'un site web dynamique. Les langages utilisés sont HTML, CSS, PHP et SQL. La base de données est à hébergée sur un SGBDR (serveur de gestion de base de données relationnelles) MariaDB ou MySQL.

- Le fichier `PHP-et-MariaDB-MySQL.pdf` contient les URL des vidéos de chaque épisode.

## 👀 Les épisodes
- Chaque épisode est une étape de  l'amélioration progressive du site web. 

- Les épisodes consistent en l'amélioration progressive du site web.

- A chaque épisode, il y a soit l'ajout d'une fonctionnalité, comme par exemple "afficher la liste de tous les pays", soit l'amélioration du code, comme par exemple "mutualiser du code PHP avec require_once".

## 📋 Prérequis pour l'installation
- Pour utiliser le code fourni, il est nécessaire d'installer au préalable un serveur HTTP et un serveur de base de données relationnelles.

- Par simplicité, j'ai utilisé le logiciel `XAMPP` qui permet d'installer et de configurer un serveur HTTP `Apache` et un serveur de bases de données `MariaDB` ; Mais ce n'est pas une obligation.

- Le serveur HTTP pourrait être le serveur embarqué par PHP (sauf pour les quelques épisodes portant sur les fichiers `.htaccess`) … ou un autre serveur HTTP.

- Le serveur de gestion de bases de données pourrait être `MySQL`.

## 🔨 Installation …
- Pour chaque épisode, il y a :
    - Un sous-dossier `php-mariadb-episode-N` contenant le code (PHP, HTML, CSS, …) destiné au serveur HTTP
    - Un fichier `bd/php-mariadb-episode-N.sql` contenant le code SQL destiné au serveur de bases de données.

- Pour installer la situation initiale de la vidéo de l'épisode numéro N, il faut installer les codes PHP et SQL de l'épisode numéro N.

### … automatique

#### Créer le fichier de configuration
Cette configuration est a effectuer une unique fois.

1. Faire une copie du fichier `preparer-episode.MODELE.json` qui vous nommerez `preparer-episode.json`.

2. Personnalisez éventuellement ce fichier.
Initialement, il contient :
```
{
    "client_bd":"C:/xampp/mysql/bin/mysql.exe",
    "login_bd":"root",
    "adresse_sgbd":"127.0.0.1",
    "port_sgbd":"3306",
    "dossier_site":"C:/xampp/htdocs/geo"
}
```
    - `client_bd` est le chemin absolu vers le client permettant du serveur de bases de données
    - `login_bd` est le compte d'administration du serveur de bases de données
    - `adresse_sgbd` est l'adresse IP du serveur de bases de données
    - `port_sgbd` est le port du serveur de bases de données
    - `dossier_site` est le dossier contenant les fichiers servis par le serveur HTTP

Sous Windows, avec une installation par défaut de `XAMPP`, il n'y a rien à modifier dans ce fichier de configuration.

#### Exécuter le script d'installation
On suppose que le serveur de bases de données est démarré, ainsi que le serveur HTTP.

On suppose que le chemin absolu de l'interpréteur PHP est `C:\xampp\php\php.exe` (ce que l'on obtient avec une installation par défaut de `XAMPP`).

Dans une fenêtre de commande, exécutez `C:\xampp\php\php.exe preparer-episode.php` et répondez aux questions.

Voici une trace d'installation de l'épisode 5 dans laquelle on fournit la réponse `5` à la question `Quel est le numéro de l'épisode ?` et le mot de passe du compte d'administration du serveur de bases de données en réponse à de la question `Enter password:` :
```
Script de préparation d'un épisode de PHP-MariaDB
=> Interprétation du fichier de configuration
=> Version du client du serveur de base de données :
C:/xampp/mysql/bin/mysql.exe  Ver 15.1 Distrib 10.4.24-MariaDB, for Win64 (AMD64), source revision b4477ae73c836592268f7fb231eeb38a4fa83bb6
=> Quel est le numéro de l'épisode ? 5
=> Le dossier contenant le code est php-mariadb-episode-5
=> Le fichier contenant le code SQL est bd/php-mariadb-episode-5.sql
=> Fichier bd/php-mariadb-episode-5.sql
Mot de passe du compte root :
Enter password: *************************
Le schéma de la base de données 'geographie' est préparé.
Les données sont insérées dans la base 'geographie'.
Les accès à la base 'geographie' sont préparés.
=> Dossier servi par le serveur Apache : dossier_cible
Création du dossier vide C:/xampp.htdocs/geo
Le code est copié dans le dossier C:/xampp.htdocs/geo
=> Fin de la préparation de l'épisode 5
```

Pour installer la situation d'un autre épisode, on relance la même commande, à savoir `C:\xampp\php\php.exe preparer-episode.php`

### … manuelle
1. Il faut exécuter sur le serveur de gestion de bases de données le code SQL contenu dans le fichier `bd/php-mariadb-episode-N.sql`
2. Il faut copier dans un sous-dossier de `htdocs` (qui est le dossier servi par le serveur `Apache`) le code contenu dans le dossier dossier `php-mariadb-episode-N`. Par exemple, si notre sous-dossier se nomme `geo`, son chemin absolu sera `C:\XAMPP\htdocs\geo` avec une installation par défaut de `XAMPP` sous Windows.
3. Pour une installation locale, l'URL de la page d'accueil est alors `http://127.0.0.1/geo`

