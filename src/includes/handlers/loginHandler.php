<?php
if (isset($_POST['loginBtn'])) {

}

function usernameCleaner($username)
{
    $username = strip_tags($username);
    $username = str_replace(" ", "", $username);
    return $username;
}

function inputCleaner($inputText)
{
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}



if (isset($_POST['username'])) {
    $user = usernameCleaner($_POST['username']);
    echo "<script type='text/javascript'>alert('Log in $user successful!');</script>";
}