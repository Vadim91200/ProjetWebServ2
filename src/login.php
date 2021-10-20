<?php session_start() ?>
<html>
<h1>login</h1>
<h1>
<?php

    echo $_SESSION['user'];
?>
</h1>
<form method="post" action="proccess_login.php">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit">
</form>