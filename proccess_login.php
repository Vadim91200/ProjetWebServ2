<?php
session_start();
include('configbd.php');
if (password_verify($_POST["username"], ) !== pa) {
    echo 'bad login';
    exit;
}

if ($_POST["password"] !== "batman") {
    echo 'bad password';
    exit;
}

echo 'ok';


$_SESSION['user'] = 'babar'
?>
<html>
<a href="login.php"> page 2 </a>;
</html>