<?php
session_start();

function format($string) {
    return strtolower(str_replace(['.png', ' '], '', $string));
}

function getproduct(){
    require('configbd.php');
    $stmt = $pdo->prepare("SELECT * FROM product");
    $stmt->execute();
    $res = $stmt->fetchAll();

    for ($i=0; $i < count($res); $i++) { 
        $res[$i]["picture"] = "images/".format($res[$i]["product_name"]).".png";
    }

    return $res;
}

function render($view) {
	global $controller;
        require('views/header.php');
	require('views/'.$view.'.php');
    echo '<!--';
    print_r($_SESSION);
    echo '-->';
}

function e($s) {
    return ($s);
}

if(!isset($_GET['controller'])) {
	$_GET['controller'] = "home";
}
$controller = $_GET['controller'];

require('configbd.php');

require('controllers/'.$controller.'.php');
