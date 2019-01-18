<?php
if(isset($_POST['loginBtn'])) {
	// Login button was pressed
	// Since the file is below the sign_up handler file, inheritance can be used :)
	$username = sanitizeFormUsername($_POST['loginUsername']);
	$password = sanitizeFormPassword($_POST['loginPassword']);
	
	$result = $account->login($username, $password);
	if($result == true) {
		$_SESSION['userLoggedIn'] = $username;
		$user = new User($username);
		header("Location: index.php?id=cart&lang=en");
	}
	
}