<?php
if(isset($_POST['loginBtn'])) {
	// Login button was pressed
	$username = sanitizeFormUsername($_POST['loginUsername']);
	$password = sanitizeFormPassword($_POST['loginPassword']);
	
	
	
	$result = $account->login($username, $password);
	if($result == true) {
		$_SESSION['userLoggedIn'] = $username;
		$user = new User($username);
		header("Location: index.php?id=cart&lang=en");
	} else {
		echo $account->getError(ErrorMessages::$loginFailed);
	}
	
}

function sanitizeFormUsername($field)
{
	$field = strip_tags($field);
	$field = str_replace(" ", "", $field);
	return $field;
}

function sanitizeFormPassword($pwd)
{
	$pwd = strip_tags($pwd);
	return $pwd;
}