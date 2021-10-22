<?php
include('configbd.php');
$null = NULL;
$hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$Query = $pdo->prepare("INSERT INTO user (id, surname, name, email, password, phone) VALUES(?,?,?,?,?,?)");
$Query->execute([$null, $_POST['LastName'], $_POST['FirstName'], $_POST['username'], $hashed_password , $_POST['userphone']]);
header('Location: index.php?controller=home');
?>
