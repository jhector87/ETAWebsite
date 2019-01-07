<?php
require_once "vendor/autoload.php";
use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

//PHPMailer Object
$mail = new PHPMailer();

//Enable SMTP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = "smtp.bfh.ch";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "hectl1";
$mail->Password = "Jh87Dh84Eh13";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";
//Set TCP port to connect to
$mail->Port = 587;
//From email address and name
$mail->From = "louissebastienjonathan.hector@students.bfh.ch";
$mail->FromName = "Jonathan Hector";

//To address and name
$mail->addAddress('louissebastienjonathan.hector@students.bfh.ch', $currentUser );

//Address to which recipient will reply
$mail->addReplyTo("louissebastienjonathan.hector@students.bfh.ch", "Reply");

//CC and BCC
$mail->addCC("louis.jonathan.hector@gmail.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$email = $_POST['email'];
$currentUser = $_COOKIE['firstName'];
$message = $_POST['message'];

//To address and name
$mail->addAddress("appdevelopment87@gmail.com"); //Recipient name is optional

//CC and BCC
$mail->addCC("louis.jonathan.hector@gmail.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "ETA Services";
$mail->Body = "
* &nbsp; * &nbsp; *  &nbsp; &nbsp;&nbsp;W  &nbsp;E &nbsp; L &nbsp; C  &nbsp;O &nbsp; M &nbsp; E &nbsp; &nbsp;  T  &nbsp;O  &nbsp; &nbsp; T  &nbsp;H  &nbsp;E  &nbsp; &nbsp;  E &nbsp;T &nbsp; A  &nbsp; &nbsp;  F  &nbsp;A  &nbsp;M  &nbsp;I  &nbsp;L &nbsp; Y  &nbsp; &nbsp;  * &nbsp; * &nbsp; * <br><br>

Hi {$currentUser},

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