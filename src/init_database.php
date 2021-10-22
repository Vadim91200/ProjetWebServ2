<?php

require('configbd.php');

$pdo->query('CREATE TABLE user 
(
    id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT, 
    surname VARCHAR(100) NOT NULL, 
    name VARCHAR(100) NOT NULL, 
    email VARCHAR(255) NOT NULL, 
    password VARCHAR(255) NOT NULL, 
    phone VARCHAR(10) NOT NULL,
    PRIMARY KEY (id)
)');

$pdo->query('CREATE TABLE product
(
    id INTEGER PRIMARY KEY NOT NULL,
    name_produit VARCHAR(100) NOT NULL,
    description VARCHAR(255),
    price INT NOT NULL,
    creation_date DATE NOT NULL
)');

$pdo->query('CREATE TABLE categorie
(
    id INTEGER PRIMARY KEY NOT NULL,
    nom_category VARCHAR(100) NOT NULL 
);');
?>