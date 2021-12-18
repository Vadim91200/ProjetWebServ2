<?php

require('configbd.php');

$pdo->query('CREATE TABLE user 
( 
    id INTEGER PRIMARY KEY AUTOINCREMENT, 
    surname VARCHAR(100) NOT NULL, 
    name VARCHAR(100) NOT NULL, 
    email VARCHAR(255) NOT NULL, 
    password VARCHAR(255) NOT NULL, 
    phone VARCHAR(10) NOT NULL
)
');

$pdo->query('CREATE TABLE product
(
    id INTEGER PRIMARY KEY NOT NULL,
    product_image VARCHAR(100) NOT NULL,
    product_name VARCHAR(100) NOT NULL,
    product_description VARCHAR(255),
    product_price INT NOT NULL,
    creation_date DATE NOT NULL
)');

$pdo->query('CREATE TABLE categorie
(
    id INTEGER PRIMARY KEY NOT NULL,
    category_name VARCHAR(100) NOT NULL 
);');
?>