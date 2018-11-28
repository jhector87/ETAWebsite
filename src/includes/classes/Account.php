<?php

class Account
{
	private $conn;
	private $errorArr;
	
	public function __construct($conn)
	{
		$this->conn = $conn;
		$this->errorArr = array();
		
	}
	
	public function register($un, $fn, $ln, $add, $zip, $ct, $cn, $em, $em2, $pw, $pw2)
	{
		$this->validateUsername($un);
		$this->validateFirstName($fn);
		$this->validateLastName($ln);
		$this->validateAddress($add, $zip, $ct);
		$this->validateEmails($em, $em2);
		$this->validatePasswords($pw, $pw2);
		
		print("I'm in the register!");
		
		if (empty($this->errorArr) == true) {
			return $this->insertUserDetails($un, $fn, $ln, $add, $zip, $ct, $cn, $em, $pw);
		} else {
			return false;
		}
	}
	
	public function getError($error)
	{
		if (!in_array($error, $this->errorArr)) {
			$error = "";
		}
		return "<span style='color: red;' class='errorMessage'>$error</span>";
	}
	
	
	private function insertUserDetails($un, $fn, $ln, $add, $zip, $ct, $cn, $em, $pw)
	{
		$encryptedPw = md5($pw); // encrypts the password
		$profile_pic = "../res/icons/png/230-user-1.png";
		$date = date("Y-m-d");
		
		echo "INSERT INTO Users VALUES('', '$un', '$fn', '$ln', '$add', '$zip', '$ct', '$cn', '$em', '$encryptedPw', '$date', '$profile_pic');";
		
		$result = mysqli_query($this->conn, "INSERT INTO Users VALUES ('', '$un', '$fn', '$ln', '$add', '$zip', '$ct', '$cn', '$em', '$encryptedPw', '$date', '$profile_pic')");
		
		return $result;
	}
	
	private function validateUsername($un)
	{
		
		if (strlen($un) > 25 || strlen($un) < 5) {
			array_push($this->errorArr, ErrorMessages::$usernameNotLongEnough);
			return;
		}
		
		//TODO: check if username exists
		
	}
	
	private function validateFirstName($fn)
	{
		if (strlen($fn) > 25 || strlen($fn) < 2) {
			array_push($this->errorArr, ErrorMessages::$firstNameNotLongEnough);
			return;
		}
	}
	
	private function validateLastName($ln)
	{
		if (strlen($ln) > 25 || strlen($ln) < 2) {
			array_push($this->errorArr, ErrorMessages::$lastNameNotLongEnough);
			return;
		}
	}
	
	// TODO: VALIDATE THE ADDRESS
	private function validateAddress($add, $zip, $ct)
	{
		$ad = explode(" ", $add);
		if (preg_match("[^0-9 -\/]", $ad[1]) || preg_match("[^0-9 -\/]", isset($ad[2]))) {
			array_push($this->errorArr, ErrorMessages::$invalidAddressNumber);
			return;
		}
		
		if(preg_match("[^0-9 -\/]", $zip)) {
			array_push($this->errorArr, ErrorMessages::$invalidZipCode);
			return;
		}
		
		$cityArr = array('Bern', 'Aarau', 'Solothurn', 'Zurich');
		foreach ($cityArr as $c) {
			if ($ct == $c) {
				array_push($this->errorArr, ErrorMessages::$cityNotFound);
				return;
			} else return;
		}
		
	}
	
	private function validateEmails($em, $em2)
	{
		if ($em != $em2) {
			array_push($this->errorArr, ErrorMessages::$emailsDoNotMatch);
			return;
		}
		
		if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
			array_push($this->errorArr, ErrorMessages::$invalidEmail);
			return;
		}
	}
	
	private function validatePasswords($pw, $pw2)
	{
		
		if ($pw != $pw2) {
			array_push($this->errorArr, ErrorMessages::$passwordsDoNotMatch);
			return;
		}
		
		if (preg_match('/[^A-Za-z0-9]/', $pw)) {
			array_push($this->errorArr, ErrorMessages::$invalidPassword);
			return;
		}
		
		if (strlen($pw) > 30 || strlen($pw) < 5) {
			array_push($this->errorArr, ErrorMessages::$passwordNotLongEnough);
			return;
		}
		
	}
	
	
}
