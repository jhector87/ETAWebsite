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
    $address = sanitizeForm($_POST['address']);
    $zipcode = sanitizeZForm($_POST['zipcode']);
    $city = sanitizeForm($_POST['city']);
    $country = $_POST['country'];
    $email = sanitizeForm($_POST['email']);
    $emailConfirm = sanitizeForm($_POST['emailConfirm']);
    $password = sanitizePassword($_POST['password']);
    $passwordConfirm = sanitizePassword($_POST['passwordConfirm']);

    $wasSuccessful = $account->register($username, $firstName, $lastName, $lastName, $address, $zipcode, $city, $country, $email, $emailConfirm, $password, $passwordConfirm);

    // if ($wasSuccessful == true) {
    //     header("Location: index.php?id=home");
    // }
}
?>