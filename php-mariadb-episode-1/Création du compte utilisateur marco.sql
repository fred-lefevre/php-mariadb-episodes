-- Suppression du compte marco si et seulement si il existe
DROP USER IF EXISTS 'marco'@'localhost';

-- Création du compte marco utilisable depuis localhost uniquement
CREATE USER 'marco'@'localhost'
    IDENTIFIED BY 'polo';

-- marco peut tout faire sur la BD geographie
GRANT ALL ON 'geographie'.*
    TO 'marco'@'localhost';

