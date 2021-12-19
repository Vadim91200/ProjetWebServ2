<?php

// If deposit button is clicked ...
if (isset($_POST['btnDeposit'])) {

	$productName = $_POST["ProductName"];
	$productDescription = $_POST["ProductDescription"];
	$productPrice = $_POST["ProductPrice"];
	$productCreationDate = $_POST["ProductCreationDate"];

	$Query = $pdo->prepare("INSERT INTO product (id, product_name, product_description, product_price, creation_date) VALUES(NULL,?,?,?,?)");

    $Query->execute([$productName, $productDescription, $productPrice, $productCreationDate]);

    if (isset($_FILES["picture"])) {
		$picture = $_FILES["picture"];

		$root_picture = "images/".format($productName).".png";

		move_uploaded_file($picture["tmp_name"], $root_picture);
    }
}

render('deposit');