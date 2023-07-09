DROP DATABASE IF EXISTS geographie;

CREATE DATABASE geographie
    DEFAULT CHARACTER SET utf8mb4;

CREATE TABLE geographie.pays (
    code CHAR(3) NOT NULL,
    nom VARCHAR(100) UNIQUE NOT NULL,
    capitale VARCHAR(100) DEFAULT NULL,
    population INTEGER DEFAULT NULL,
    superficie INTEGER DEFAULT NULL,
    PRIMARY KEY(code)
) ENGINE InnoDB DEFAULT CHARSET=utf8mb4;

DROP USER IF EXISTS 'marco'@'localhost';

CREATE USER 'marco'@'localhost' IDENTIFIED BY 'polo';
GRANT ALL ON geographie.* TO 'marco'@'localhost';

INSERT INTO geographie.pays (code, nom, capitale, population, superficie) VALUES ('AFG', 'Afghanistan', 'Kabul', 38346720, 652867);
INSERT INTO geographie.pays (code, nom, capitale, population, superficie) VALUES ('AGO', 'Angola', 'Luanda', 34795287, 1246700);
INSERT INTO geographie.pays (code, nom, capitale, population, superficie) VALUES ('ARG', 'Argentina', 'Buenos Aires', 46044703, 2780400);
INSERT INTO geographie.pays (code, nom, capitale, population, superficie) VALUES ('CAN', 'Canada', 'Ottawa', 39566248, 9984670);
