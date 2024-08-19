CREATE DATABASE marinade;

USE marinade;

CREATE TABLE recettes (
id_recette INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
titre_recette VARCHAR(50) NOT NULL UNIQUE,
description_recette VARCHAR(255),
nombre_portions INT,
instruction_recette TEXT
);

CREATE TABLE ingredients (
id_ingredient INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nom_ingredient VARCHAR(255),
unite_ingredient VARCHAR(50)
);

CREATE TABLE contenir (
id_recette INT,
id_ingredient INT,
FOREIGN KEY (id_recette) REFERENCES recettes (id_recette),
FOREIGN KEY (id_ingredient) REFERENCES ingredients (id_ingredient)
);

CREATE TABLE categories (
id_categorie INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nom_categorie VARCHAR(50)
);

CREATE TABLE plats (
id_plat INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nom_plat VARCHAR(50) NOT NULL UNIQUE,
description_plat VARCHAR(255),
id_categorie INT,
FOREIGN KEY (id_categorie) REFERENCES categories (id_categorie)
);

CREATE TABLE utilisateurs (
id_Utilisateur INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nomPrenom VARCHAR(50) NOT NULL,
pseudo VARCHAR(50) NOT NULL UNIQUE,
telephone INT NOT NULL UNIQUE,
email VARCHAR(255) NOT NULL UNIQUE,
motdepasse VARCHAR(255) NOT NULL
);