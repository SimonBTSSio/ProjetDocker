CREATE DATABASE IF NOT EXISTS site-web;
USE site-web;
CREATE TABLE user ( id int, pseudo VARCHAR(100), nom(100), prenom(100));
INSERT INTO user VALUES
(1,"abedda","BEDDA","Ayman"),
(2,"sfarnault","FARNAULT","Simon"),
(3,"ssami","SAMI","Sami"),
(4,"llili","LILI","Lili");
