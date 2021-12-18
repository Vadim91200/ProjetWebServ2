<?php

require('configbd.php');

$pdo->query('DROP TABLE user');

$pdo->query('DROP TABLE product');

$pdo->query('DROP TABLE categorie');


?>