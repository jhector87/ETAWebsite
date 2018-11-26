<?php
class Account
{
    private $errorArr;

    public function __construct()
    {
        $this->errorArr = array();

    }

    public function register($username, $firstName, $lastName, $address, $zipcode, $city, $country, $email, $emailCnf, $password, $passwordCnf)
    {
        $this->validateUsername($username);
        $this->validateFirstName($firstName);
        $this->validateLastName($lastName);
        $this->validateAddress($address, $zipcode, $city, $country);
        $this->validateEmails($email, $emailCnf);
        $this->validatePasswords($password, $passwordCnf);

        if (empty($this->errorArr) == true) {
            return true;
        } else {
            return false;
        }
    }

    public function getError($error)
    {
        if (!in_array($error, $this->errorArr)) $error = "";
        echo "<span class='errorMessage'>$error</span>";
    }

    private function validateUsername($un)
    {
        if (strlen($un) > 25 || strlen($un) < 5) {
            array_push($this->errorArr, ErrorMessages::$usernameNotLongEnough);
            return;
        } 

        // TODO: check that the username existS
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

    private function validateAddress($st, $zip, $city, $country)
    {
        $stArr = explode(" ", $st);
        if (preg_match('/[^A-Za-z -]/', $stArr[0]) && preg_match('/[^A-Za-z -]/', stArr[1]) && empty($stArr[0])) {
            array_push($this->errorArr, ErrorMessages::$invalidAddress);
            return;
        }

        // FIXME: Needs to check that the address ends with a number
        // if (preg_match('/[^0-9 -]/', $stArr[2]) || empty($stArr[2])) {
        //     array_push($this->errorArr, ErrorMessages::$invalidAdressNumber);
        //     return;
        // }

        if (preg_match('/[^0-9 -]/', $zip)) {
            array_push($this->errorArr, ErrorMessages::$invalidZipCode);
            return;
        }

        $cityArr = array( 'Bern', 'Aargau', 'Solothurn', 'Biel', 'Zurich');

        foreach ($cityArr as $c) {
            if ($c != $city) {
                array_push($this->errorArr, ErrorMessages::$cityNotFound);
                return;
            }
        }
    }

    private function validateEmails($em, $emCnf)
    {
        if ($em != $emCnf) {
            array_push($this->errorArr, ErrorMessages::$emailsDoNotMatch);
            return;
        }
        if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errorArr, ErrorMessages::$invalidEmail);
            return;
        }

        // TODO: Check that username hasn't already been used
    }

    private function validatePasswords($pw, $pwCnf)
    {
        if ($pw != $pwCnf) {
            array_push($this->errorArr, ErrorMessages::$passwordsDoNotMatch);
            return;
        }
        // Checks that there's only numbers and letters
        if (preg_match('/[^A-Za-z0-9]/', $pw)) {
            array_push($this->errorArr, ErrorMessages::$invalidPassword);
            return;
        }

        if (strlen($pw) > 30 || strlen($pw) < 6) {
            array_push($this->errorArr, ErrorMessages::$passwordNotLongEnough);
            return;
        }
    }
}