<?php

include_once("../../SendGrid-API/send-email.php");

function sanitizeFormPassword($inputText)
{
	$inputText = strip_tags($inputText);
	return $inputText;
}

function sanitizeFormUsername($inputText)
{
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	return $inputText;
}

function sanitizeFormString($inputText)
{
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}


if (isset($_POST['submit'])) {
	// Register button was pressed
	echo "Register button was pressed";
	$username = sanitizeFormUsername($_POST['username']);
	$firstName = sanitizeFormString($_POST['firstName']);
	$lastName = sanitizeFormString($_POST['lastName']);
	$address = sanitizeFormString($_POST['address']);
	$zipcode = sanitizeFormString($_POST['zipcode']);
	$city = $_POST['city']; // No need to sanitize the form since they are pre-defined choice.
	$country = $_POST['country'];
	$email = sanitizeFormString($_POST['email']);
	$emailcnf = sanitizeFormString($_POST['emailConfirm']);
	$password = sanitizeFormPassword($_POST['password']);
	$passwordcnf = sanitizeFormPassword($_POST['passwordConfirm']);
	
	$wasSuccessful = $account->register($username, $firstName, $lastName, $address, $zipcode, $city, $country, $email, $emailcnf, $password, $passwordcnf);
	
	// FIXME: Cannot find the proper page to go back to when everything is successful
	if ($wasSuccessful) {
		$_SESSION['userLoggedIn'] = $username;
//		header("Location: index.php?id=cart&lang=en");
	} else {
		echo "<srcipt>alert('Something went wrong. Please try again!')</script>";
	}
	
}
