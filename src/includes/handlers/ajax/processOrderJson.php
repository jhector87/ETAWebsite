<?php
include("../../../config/configs.php");

if(isset($_POST['prodSt'])) {
	$prodSt= $_POST['prodSt'];
	$user_id = $_POST['userid'];
	$prod_query = mysqli_query($con, "INSERT INTO ProcessStatus(user_id, process_status) VALUES ('$prodSt', TRUE) ");
	$resultArray = mysqli_fetch_array($prod_query);
	echo json_encode($resultArray);
	exit();
}
