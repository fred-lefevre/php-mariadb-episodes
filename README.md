# 🚀 Projet "php-mariadb-episodes"

## 🎯 Objectif

- Ce dépôt est destiné à des personnes souhaitant apprendre ou revoir comment créer un site web dynamique.

- Il est requis des connaissances basiques en HTML, CSS, PHP et SQL.

- Tout le code est fourni sur `GitHub` et toutes les explications associées sont fournies dans `YouTube`.

- Ce dépôt contient tous les fichiers utilisés dans la playlist YouTube "PHP et MariaDB / MySQL" dont l'URL est https://www.youtube.com/watch?v=jJOV4eVzdGU&list=PLQsTrO2pHmL7zCuVhsgWA5oCanRwQqUy1

- Cette playlist décrit, épisode par épisode, la création d'un site web dynamique. Les langages utilisés sont HTML, CSS, PHP et SQL. La base de données est à hébergée sur un SGBDR (serveur de gestion de base de données relationnelles) MariaDB ou MySQL.

- Il y a un sous-dossier pour chaque épisode de la création du site web. Les fichiers utilisés par l'épisode numéro N sont contenus dans le sous-dossier `php-mariadb-episode-N`.

- Le premier épisode consiste en la création de :
    - Une base de données nommée `geo`. Cette base est gérée par un serveur MariaDB (ou MySQL)
    - Un compte utilisateur nommé `marco`. Ce compte a tous les privilèges pour travailler sur la base de données `geo`.
    
- Les épisodes suivants consistent en l'amélioration progressive du site web. A chaque épisode, il y a soit l'ajout d'une fonctionnalité, comme par exemple "afficher la liste de tous les pays", soit l'amélioration du code, comme par exemple "mutualiser du code PHP avec require_once".

## 🔨 Installation

- Pour utiliser le code fourni, il est nécessaire d'installer au préalable un serveur HTTP et un serveur de base de données relationnelles.

- Par simplicité, j'ai utilisé le logiciel `XAMPP` qui permet d'installer et de configurer un serveur HTTP `Apache` et un serveur de bases de données `MariaDB`.

- Tous les fichiers fournis sont à placer dans un nouveau sous-dossier de `htdocs` (qui est le dossier servi par le serveur `Apache`).
  Par exemple, si notre sous-dossier se nomme `geo`, son chemin absolu sera `C:\XAMPP\htdocs\geo` avec une installation par défaut de `XAMPP` sous Windows.

- Le serveur HTTP pourrait être le serveur embarqué par PHP (sauf pour les quelques épisodes portant sur les fichiers `.htaccess`) … ou un autre serveur HTTP.

- Le serveur de gestion de bases de données pourrait être `MySQL`.
