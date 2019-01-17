<?php

if (isset($_POST['signUpBtn'])) {
	// Form sanitization process to prevent special characters
	$username = sanitizeFormUsername($_POST['username']);
	$firstName = sanitizeFormField($_POST['firstName']);
	$lastName = sanitizeFormField($_POST['lastName']);
	$address = sanitizeFormField($_POST['address']);
	$zipcode = sanitizeFormField($_POST['zipcode']);
	$city = $_POST['city']; // No need to sanitize the form since it's a pre-defined choice.
	$country = $_POST['country'];
	$email = sanitizeFormEmail($_POST['email']);
	$emailcnf = sanitizeFormEmail($_POST['emailConfirm']);
	$password = sanitizeFormPassword($_POST['password']);
	$passwordcnf = sanitizeFormPassword($_POST['passwordConfirm']);
	
	$wasSuccessful = $account->register($username, $firstName, $lastName, $address, $zipcode, $city, $country, $email, $emailcnf, $password, $passwordcnf);
	if ($wasSuccessful) {
		$_SESSION['userLoggedIn'] = $username;
//		include_once("mail/mail_handler.php");
		header("Location: index.php?id=cart&lang=en");
	} else {
		echo "<script>alert('Something went wrong. Please try again later!')</script>";
	}
	
}

function sanitizeFormUsername($field)
{
	$field = strip_tags($field);
	$field = str_replace(" ", "", $field);
	return $field;
}

function sanitizeFormField($field)
{
	$field = strip_tags($field);
	$field = str_replace(" ", "", $field);
	$field = ucfirst(strtolower($field));
	return $field;
}

function sanitizeFormEmail($em)
{
	$em = filter_var($em, FILTER_SANITIZE_EMAIL);
	return $em;
	
}

function sanitizeFormPassword($pwd)
{
	$pwd = strip_tags($pwd);
	return $pwd;
}
