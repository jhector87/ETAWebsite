<?php
if(isset($_POST['loginBtn'])) {
	//Login button was pressed
	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];
	
	$result = $account->login($username, $password);
	echo $result;
	if($result == true) {
		$_SESSION['userLoggedIn'] = $username;
		echo $username;
		header("Location: index.php?id=cart&lang=en");
	}
}