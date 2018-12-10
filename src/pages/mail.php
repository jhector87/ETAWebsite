<?php
/**
 * Created by PhpStorm.
 * User: jpro
 * Date: 28.10.18
 * Time: 15:46
 */

$mailTo = "jonathan@hectorgraphics.ch";
$subject = "I could use your help!";
$body = $_POST["comment"];
$headers = "From: Jonathan With Love!";

if (mail($mailTo, $subject, $body, $headers)) {
	print("The email was successfully sent to ETA Service Department!");
} else {
	print("missing details!");
}