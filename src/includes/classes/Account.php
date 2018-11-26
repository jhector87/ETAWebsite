<?php
class Account
{
    private $errorArr;

    public function __construct()
    {
        $this->errorArr = array();

    }

    public function register()
    {
        $this->validateUsername($username);
        $this->validateFirstName($firstName);
        $this->validateLastName($lastName);
        $this->validateAddress($address, $zipcode, $city, $country);
        $this->validateEmails($email, $emailConfirm);
        $this->validatePasswords($password, $passwordConfirm);

        if (empty($this->errorArr) == true) {
            return true;
        } else {
            return false;
        }
    }

    public function getError($error)
    {
        if (!in_array($error, $this->errorArr)) $error = "";
        return "<span class='errorMessage'>$error</span>";
    }

    private function validateUsername($un)
    {
        if (strlen($un) > 25 || strlen($un) < 5) {
            array_push($this->errorArr, "Your username must be between 5 and 25 characters");
            return;
        } 

        // TODO: check that the username existS
    }

    private function validateFirstName($fn)
    {
        if (strlen($fn) > 25 || strlen($fn) < 2) {
            array_push($this->errorArr, "Your first name must be between 2 and 25 characters");
            return;
        }
    }

    private function validateLastName($ln)
    {
        if (strlen($ln) > 25 || strlen($ln) < 2) {
            array_push($this->errorArr, "Your last name must be between 2 and 25 characters");
            return;
        }
    }

    private function validateAddress($st, $zip, $city, $country)
    {
        $stArr = explode(" ", $st);
        if (preg_match('/[^A-Za-z -]/', stArr[0]) && preg_match('/[^A-Za-z -]/', stArr[1]) && empty($stArr[0])) {
            array_push($this->errorArr, "Please enter a valid Address!");
            return;
        }

        if (preg_match('/[^0-9 -]/', stArr[2])) {
            array_push($this->errorArr, "Please include a house/apartment number with NO spaces AFTER the street address!");
            return;
        }

        if (preg_match('/[^0-9 -]/', $zip)) {
            array_push($this->errorArr, "Please enter a valid ZIP CODE!");
            return;
        }

        $cityArr = array(
            'Bern',
            'Aargau',
            'Solothurn',
            'Biel',
            'Zurich'
        );

        foreach ($cityArr as $c) {
            if ($c != $city) {
                array_push($this->erroArr, "Your city is not in the database!");
                return;
            }
        }
    }

    private function validateEmails($em, $emCnf)
    {
        if ($em != $emCnf) {
            array_push($this->erroArr, "Your emails don't match");
            return;
        }
        if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
            array_push($this->erroArr, "Your emails is invalid");
            return;
        }

        // TODO: Check that username hasn't already been used
    }

    private function validatePasswords($pw, $pwCnf)
    {
        if ($pw != $pwCnf) {
            array_push($this->erroArr, "Your passwords don't match");
            return;
        }
        // Checks that there's only numbers and letters
        if (preg_match('/[^A-Za-z0-9]/', $pw)) {
            array_push($this->errorArr, "Your password is not valid!");
            return;
        }

        if (strlen($pw) > 30 || strlen($pw) < 6) {
            array_push($this->errorArr, "Your password  must be between 6 and 30 characters");
            return;
        }
    }
}