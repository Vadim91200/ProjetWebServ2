<?php

// If deposit button is clicked ...
if (isset($_POST['btnDeposit'])) {
	$mobile = $_POST;

    if (isset($_FILES["picture"])) {
		$mobile["picture"] = $_FILES["picture"];
    }

	include "model/deposit.php";
}

render('deposit');