CREATE DATABASE IF NOT EXISTS siteWeb;
USE siteWeb;
CREATE TABLE user (
id int,
pseudo VARCHAR(100),
nom VARCHAR(100),
prenom VARCHAR(100),
mdp VARCHAR(100),
PRIMARY KEY (id)
);
INSERT INTO user VALUES(1,"abedda","BEDDA","Ayman",md5("azerty"));
INSERT INTO user VALUES(2,"sfarnault","FARNAULT","Simon",md5("azerty"));
INSERT INTO user VALUES(3,"ssami","SAMI","Sami",md5("azerty"));
INSERT INTO user VALUES(4,"llili","LILI","Lili",md5("azerty"));
