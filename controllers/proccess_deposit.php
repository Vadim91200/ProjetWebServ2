<?php
$PATH = 'upload-picture/' . $_POST['ProductName'];
//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)
	
		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"upload-picture/".$pic_name);

$Query = $pdo->prepare("INSERT INTO product (id, product_image, product_name, product_description, product_price, creation_date) VALUES(NULL,?,?,?,?,?)");
$Query->execute([$pic_name, $pic_name, $_POST['ProductDescription'], $_POST['ProductPrice'], $_POST['ProductCreationDate']]);
header('Location: index.php?controller=home');
}
?>