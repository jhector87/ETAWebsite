<?php
function sanitizeUsername($username)
{
    $username = strip_tags($username);
    $username = str_replace(" ", "", $username);
    return $username;
}

function sanitizePassword($password)
{
    $password = strip_tags($password);
    return $password;
}

function sanitizeForm($inputText)
{
    $inputText = strip_tags($inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

if (isset($_POST['signUpBtn'])) {
    $username = sanitizeUsername($_POST['username']);
    $firstName = sanitizeForm($_POST['firstName']);
    $lastName = sanitizeForm($_POST['lastName']);
    $email = sanitizeForm($_POST['email']);
    $emailConfirm = sanitizeForm($_POST['emailConfirm']);
    $password = sanitizePassword($_POST['password']);
    $passwordConfirm = sanitizePassword($_POST['passwordConfirm']);

}
?>