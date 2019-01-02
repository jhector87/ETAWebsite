<?php
include("../../../config/configs.php");

if(isset($_POST['prodId'])) {
	$prodId= $_POST['prodId'];
	$prod_query = mysqli_query($con, "INSERT INTO ProcessStatus VALUES 'true' WHERE user_id='$prodId'");
	$resultArray = mysqli_fetch_array($prod_query);
	echo json_encode($resultArray);
}
