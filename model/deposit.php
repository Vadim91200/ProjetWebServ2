<?php
    
    $productName = $mobile["ProductName"];
    $productDescription = $mobile["ProductDescription"];
    $productPrice = $mobile["ProductPrice"];
    $productCreationDate = $mobile["ProductCreationDate"];

    $Query = $pdo->prepare("INSERT INTO product (id, product_name, product_description, product_price, creation_date) VALUES(NULL,?,?,?,?)");

    $Query->execute([$productName, $productDescription, $productPrice, $productCreationDate]);

    if (isset($mobile["picture"])) {    
        $root_picture = "upload-picture/".format($productName).".png";

        move_uploaded_file($mobile["picture"]["tmp_name"], $root_picture);
        header('Location: index.php?controller=home');
    }
?>