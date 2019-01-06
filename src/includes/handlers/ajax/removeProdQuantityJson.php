<?php
include("../../../config/configs.php");

if(isset($_POST['prodId'])) {
	$prodId= $_POST['prodId'];
	$prod_query = mysqli_query($con, "UPDATE Products SET quantity = quantity - 1 WHERE prod_name_ref='$prodId'");
	echo json_encode($prod_query);
	exit();
}