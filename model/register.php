<?php
$hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$Query = $pdo->prepare("INSERT INTO user (id, surname, name, email, password, phone) VALUES(NULL,?,?,?,?,?)");
$Query->execute([$_POST['LastName'], $_POST['FirstName'], $_POST['username'], $hashed_password , $_POST['userphone']]);
header('Location: index.php?controller=home');
?>
