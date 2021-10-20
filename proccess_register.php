<?php
session_start();
$chiffre = 4;
include('configbd.php');
$hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$Query = $pdo->prepare("INSERT INTO utilisateur VALUES(?,?,?,?,?,?,?)");
$Query->execute([$chiffre, $role, $_POST['LastName'], $_POST['FirstName'], $_POST['username'], $hashed_password , $_POST['userphone']]);
