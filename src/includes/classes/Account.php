<?php
class Account
{
    public function __construct()
    {

    }

    public function register() {
        validateUsername($username);
        validateFirstName($firstName);
        validateLastName($lastName);
        validateEmails($email, $emailConfirm);
        validatePasswords($password, $passwordConfirm);
    }

    private function validateUsername($un)
    {

    }

    private function validateFirstName($fn)
    {

    }

    private function validateLastName($ln)
    {

    }

    private function validateEmails($em, $cnfEm)
    {

    }

    private function validatePasswords($pw, $cnfPw)
    {

    }
}