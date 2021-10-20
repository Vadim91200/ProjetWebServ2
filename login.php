<?php
session_start();
include(config.php);

if(isset($_POST('login'))){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $connection->prepare("SELECT * FROM utilisateur WHERE email=? AND mot_de_passe=?")

    $query->bind_param("s", $username, $password);
    $query->execute();
    $result = $query->fetch();
}

?>