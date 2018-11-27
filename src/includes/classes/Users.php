<?php

function testUserInput($user)
{

}

function userInDB($user)
{
    $users = array(
    	"user" => "abcd123",
        "user@gmail.com" => "abcd123",
        "admin@eta.com" => "pass123"
    );

    foreach ($users as $u) {
        if ($user == $u) return true;
    }
    return false;
}

function userQuery()
{
    return array();
}