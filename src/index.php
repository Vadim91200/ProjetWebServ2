<?php
session_start();

function render($view) {
	global $controller;
        require('views/header.php');
	require('views/'.$view.'.php');
    echo '<!--';
    print_r($_SESSION);
    echo '-->';
}

if(!isset($_GET['controller'])) {
	$_GET['controller'] = "home";
}
$controller = $_GET['controller'];

include('configbd.php');

require('controllers/'.$controller.'.php');

/*
// views/login.php

<form method="POST" action="index.php?controller=process_login">


// controller/process_login.php

$username = $_POST['username'];

$stmt = $db->query('select * from users where username = ?');
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($ok) {
	render('login_ok');
} else {
	render('login_nok')
}
*/