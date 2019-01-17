<?php
if(isset($_POST['loginBtn'])) {
	// Login button was pressed
	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];
	
	$result = $account->login($username, $password);
	if($result == true) {
		$_SESSION['userLoggedIn'] = $username;
		$user = new User($username);
		header("Location: index.php?id=cart&lang=en");
	}
	
}