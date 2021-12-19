<?php

if(isset($_GET['action']) && $_GET['action'] == "process"){
    include "model/login.php";
}

render('login');