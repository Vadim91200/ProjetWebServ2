<?php
session_start();
$chiffre = 4;
include('configbd.php');
$hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$Query = $pdo->prepare("INSERT INTO user (id, surname, name, email, password, phone) VALUES(NULL,?,?,?,?,?)");
$Query->execute([$chiffre, $_POST['LastName'], $_POST['FirstName'], $_POST['username'], $hashed_password , $_POST['userphone']]);
?>