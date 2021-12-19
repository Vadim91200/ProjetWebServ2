<?php

if(isset($_GET['action']) && $_GET['action'] == "process"){
    include "model/register.php";
}

render('register');