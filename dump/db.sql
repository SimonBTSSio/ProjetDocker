CREATE DATABASE IF NOT EXISTS siteWeb;
USE siteWeb;
CREATE TABLE user ( id int, pseudo VARCHAR(100), nom VARCHAR(100), prenom VARCHAR(100), PRIMARY KEY (id));
INSERT INTO user VALUES(1,"abedda","BEDDA","Ayman");
INSERT INTO user VALUES(2,"sfarnault","FARNAULT","Simon");
INSERT INTO user VALUES(3,"ssami","SAMI","Sami");
INSERT INTO user VALUES(4,"llili","LILI","Lili");
