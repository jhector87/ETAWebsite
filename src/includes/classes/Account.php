<?php

	class Account {

		private $con;
		private $errorArray;

		public function __construct($con) {
			$this->con = $con;
			$this->errorArray = array();
		}
		
		public function login($un, $pw) {
			$encryptedPw = md5($pw);
			$query = mysqli_query($this->con, "SELECT * FROM Users WHERE user_name='$un' AND password='$encryptedPw'");
			
			if (mysqli_num_rows($query) == 1) {
				return true;
			} else {
				array_push($this->errorArray, ErrorMessages::$loginFailed);
				return false;
			}
		}

		public function register($un, $fn, $ln, $add, $zip, $ct, $cn, $em, $em2, $pw, $pw2) {
			$this->validateUsername($un);
			$this->validateFirstName($fn);
			$this->validateLastName($ln);
			
			$this->validateEmails($em, $em2);
			$this->validatePasswords($pw, $pw2);

			if(empty($this->errorArray) == true) {
				//Insert into db
				return $this->insertUserDetails($un, $fn, $ln, $add, $zip, $ct, $cn, $em, $pw);
			}
			else {
				array_push($this->errorArray, ErrorMessages::$loginFailed);
				return false;
			}

		}

		public function getError($error) {
			if(!in_array($error, $this->errorArray)) {
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>";
		}

		private function insertUserDetails($un, $fn, $ln, $street_add, $zip, $city, $country, $em, $pw) {
			$encryptedPw = md5($pw);
			$profilePic = "../res/icons/png/230-user-1.png";
			$date = date("Y-m-d");

			$result = mysqli_query($this->con, "INSERT INTO Users (user_name, first_name, last_name, street_add, zip_code, city, country, email, password, signup_date, profile_pic)
VALUES ('$un', '$fn', '$ln', '$street_add', '$zip', '$city', '$country', '$em', '$encryptedPw', '$date', '$profilePic')");

			return $result;
		}

		private function validateUsername($un) {

			if(strlen($un) > 25 || strlen($un) < 5) {
				array_push($this->errorArray, ErrorMessages::$usernameNotLongEnough);
				return;
			}

			$checkUsernameQuery = mysqli_query($this->con, "SELECT user_name FROM Users WHERE user_name='$un'");
			if(mysqli_num_rows($checkUsernameQuery) != 0) {
				array_push($this->errorArray, ErrorMessages::$usernameTaken);
				return;
			}

		}

		private function validateFirstName($fn) {
			if(strlen($fn) > 25 || strlen($fn) < 2) {
				array_push($this->errorArray, ErrorMessages::$firstNameNotLongEnough);
				return;
			}
		}

		private function validateLastName($ln) {
			if(strlen($ln) > 25 || strlen($ln) < 2) {
				array_push($this->errorArray, ErrorMessages::$lastNameNotLongEnough);
				return;
			}
		}

		private function validateEmails($em, $em2) {
			if($em != $em2) {
				array_push($this->errorArray,ErrorMessages::$emailsDoNotMatch);
				return;
			}
//
//			if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
//				array_push($this->errorArray, ErrorMessages::$invalidEmail);
//				return;
//			}

			$checkEmailQuery = mysqli_query($this->con, "SELECT email FROM Users WHERE email='$em'");
			if(mysqli_num_rows($checkEmailQuery) != 0) {
				array_push($this->errorArray, ErrorMessages::$emailTaken);
				return;
			}

		}

		private function validatePasswords($pw, $pw2) {
			
			if($pw != $pw2) {
				array_push($this->errorArray, ErrorMessages::$passwordsDoNotMatch);
				return;
			}

			if(preg_match('/[^A-Za-z0-9]/', $pw)) {
				array_push($this->errorArray, ErrorMessages::$passwordNotAlphanumeric);
				return;
			}
//
//			if(strlen($pw) > 30 || strlen($pw) < 5) {
//				array_push($this->errorArray, ErrorMessages::$passwordCharacters);
//				return;
//			}

		}


	}