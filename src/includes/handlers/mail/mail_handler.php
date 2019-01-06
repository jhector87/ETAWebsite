<?php
require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new \PHPMailer\PHPMailer\PHPMailer();
//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = "smtp.stackmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "admin@hectorgraphics.tech";
$mail->Password = "admin123";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";
//Set TCP port to connect to
$mail->Port = 465;
//From email address and name
$mail->From = "admin@hectorgraphics.tech";
$mail->FromName = "Jonathan Hector";

$email = $_POST['email'];
$currentUser = $_COOKIE['currentUser'];
$message = $_POST['message'];

//To address and name
$mail->addAddress($email, $currentUser );
$mail->addAddress("recepient1@eta.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo("no-reply@eta.com", "Reply");

//CC and BCC
$mail->addCC("louis.jonathan.hector@gmail.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "ETA Services";
$mail->Body = "
* &nbsp; * &nbsp; *  &nbsp; &nbsp;&nbsp;W  &nbsp;E &nbsp; L &nbsp; C  &nbsp;O &nbsp; M &nbsp; E &nbsp; &nbsp;  T  &nbsp;O  &nbsp; &nbsp; T  &nbsp;H  &nbsp;E  &nbsp; &nbsp;  E &nbsp;T &nbsp; A  &nbsp; &nbsp;  F  &nbsp;A  &nbsp;M  &nbsp;I  &nbsp;L &nbsp; Y  &nbsp; &nbsp;  * &nbsp; * &nbsp; * <br><br>

Email: {$email}<br>
Purpose: {$message}<br><br>

You successfully signed-up!!!
";
$mail->AltBody = "Welcome to ETA Services. Glad to have you on-board";

if(!$mail->send())
{
	echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
	echo "<script>console.log('Message successfully sent');</script>";
}