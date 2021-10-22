<?php
session_start();
include('configbd.php');

$stmt = $pdo->prepare("SELECT * FROM user where email = ?");
$stmt->execute([$_POST['username']]);
$res = $stmt->fetch();

if ($res === null) {
    header('Location: index.php?controller=login&error=bad_login');
    exit;
}

if (password_verify($res['password'], $_POST['password'])) {
    header('Location: index.php?controller=login&error=bad_password');
    exit;
}

header('Location: index.php?controller=home');


$_SESSION['name'] = $_POST['prenom']
?>