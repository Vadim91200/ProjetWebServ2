<?php

require('configbd.php');

$pdo->query('CREATE TABLE user 
(
    id INTEGER PRIMARY KEY NOT NULL, 
    nom VARCHAR(100) NOT NULL, 
    prenom VARCHAR(100) NOT NULL, 
    email VARCHAR(255) NOT NULL, 
    password VARCHAR(255) NOT NULL, 
    telephone VARCHAR(10) NOT NULL
)');

$pdo->query('CREATE TABLE produit
(
    id INTEGER PRIMARY KEY NOT NULL,
    nom_produit VARCHAR(100) NOT NULL,
    description VARCHAR(255),
    prix INT NOT NULL,
    date_creation DATE NOT NULL,
    date_fin_offre DATE
)');

$pdo->query('CREATE TABLE categorie
(
    id INTEGER PRIMARY KEY NOT NULL,
    nom_categorie VARCHAR(100) NOT NULL 
);');

$pdo->query('CREATE TABLE categorie_correspondante
(
    id_produit INTEGER NOT NULL,
    id_categorie INTEGER NOT NULL
);');
?>