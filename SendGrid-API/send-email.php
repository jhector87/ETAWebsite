<?php
/*SendGrid Library*/
require_once ('vendor/autoload.php');

/*Post Data*/
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

/*Content*/
$from = new SendGrid\Email("ETA Services", "appdevelopment87@gmail.com");
$subject = "ETA Services enquiry";
$to = new SendGrid\Email("Jonathan Hector", "louis.jonathan.hector@gmail.com");
$content = new SendGrid\Content("text/html", "
* &nbsp; * &nbsp; *  &nbsp; &nbsp;&nbsp;W  &nbsp;E &nbsp; L &nbsp; C  &nbsp;O &nbsp; M &nbsp; E &nbsp; &nbsp;  T  &nbsp;O  &nbsp; &nbsp; T  &nbsp;H  &nbsp;E  &nbsp; &nbsp;  E &nbsp;T &nbsp; A  &nbsp; &nbsp;  F  &nbsp;A  &nbsp;M  &nbsp;I  &nbsp;L &nbsp; Y  &nbsp; &nbsp;  * &nbsp; * &nbsp; * <br><br>
		
Email: {$email}<br>
Purpose: {$message}<br><br>

You successfully signed-up!!!

");

/*Send the mail*/
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = ('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');
$sg = new \SendGrid($apiKey);

/*Response*/
$response = $sg->client->mail()->send()->post($mail);
?>