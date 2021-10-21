<?php

require('configbd.php');

$pdo->query('DROP TABLE user');

$pdo->query('DROP TABLE produit');

$pdo->query('DROP TABLE categorie');

$pdo->query('DROP TABLE categorie_correspondante');

?>