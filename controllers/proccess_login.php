<?php

$stmt = $pdo->prepare("SELECT * FROM user where email = ?");
$stmt->execute([$_POST['username']]);
$res = $stmt->fetch();

if ($res === null) {
    header('Location: index.php?controller=login');
    exit;
}

if (!password_verify($_POST['password'], $res['password'])) {
    header('Location: index.php?controller=login');
    exit;
}

$_SESSION['name'] = $res['name'];
$_SESSION['user'] = $res;
header('Location: index.php?controller=home');
?>