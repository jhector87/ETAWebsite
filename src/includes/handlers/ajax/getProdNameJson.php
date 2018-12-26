<?php
include("../../../config/configs.php");

if(isset($_POST['prodId'])) {
	$prodId= $_POST['prodId'];
	$prod_query = mysqli_query($con, "SELECT * FROM Products WHERE prod_name_ref='$prodId'");
	$resultArray = mysqli_fetch_array($prod_query);
	echo json_encode($resultArray);
}
