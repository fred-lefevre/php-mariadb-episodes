-- Suppression de la BD geographie si et seulement si elle existe
DROP DATABASE IF EXISTS geographie;

-- Création de la base de données geographie
CREATE DATABASE geographie
    DEFAULT CHARACTER SET utf8mb4;

-- Création de la table pays
CREATE TABLE geographie.pays (
    code CHAR(3) NOT NULL,
    nom VARCHAR(100) UNIQUE NOT NULL,
    capitale VARCHAR(100) DEFAULT NULL,
    population INTEGER DEFAULT NULL,
    superficie INTEGER DEFAULT NULL,
    PRIMARY KEY(code)
) ENGINE InnoDB DEFAULT CHARSET=utf8mb4;

-- https://en.wikipedia.org/wiki/Afghanistan
INSERT INTO geographie.pays (code, nom, capitale, population, superficie)
    VALUES ('AFG', 'Afghanistan', 'Kabul', 38346720, 652867);

-- https://en.wikipedia.org/wiki/Angola
INSERT INTO geographie.pays (code, nom, capitale, population, superficie)
    VALUES ('AGO', 'Angola', 'Luanda', 34795287, 1246700);

-- https://en.wikipedia.org/wiki/Canada
INSERT INTO geographie.pays (code, nom, capitale, population, superficie)
    VALUES ('CAN', 'Canada', 'Ottawa', 39566248, 9984670);

-- Liste de tous les pays
-- SELECT * FROM geographie.pays;
