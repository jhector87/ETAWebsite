<?php
require_once "vendor/autoload.php";
use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

//PHPMailer Object
$mail = new PHPMailer();

//Enable SMTP debugging.
$mail->SMTPDebug = 3;
$mail->isSMTP();
$mail->Host = "smtp.bfh.ch";
$mail->SMTPAuth = true;
$mail->Username = "hectl1";
$mail->Password = "Jh87Dh84Eh13";
$mail->SMTPSecure = "tls";
$mail->Port = 587;
$mail->From = "louissebastienjonathan.hector@students.bfh.ch";
$mail->FromName = "Jonathan Hector";

$mail->isHTML(true);
$email = isset($_POST['email']) ? $_POST['email'] : $_COOKIE['email'];
$currentUser = $_COOKIE['firstName'];
$message = $_POST['message'];
//To address and name
$mail->addAddress("appdevelopment87@gmail.com"); //Recipient name is optional
//$mail->addAddress('louissebastienjonathan.hector@students.bfh.ch', $currentUser );
//$mail->addReplyTo("louissebastienjonathan.hector@students.bfh.ch", "Reply");
//CC and BCC
$mail->addCC("louis.jonathan.hector@gmail.com");

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
	echo '<script>'. $mail->ErrorInfo . '</script>';
} else {
	echo "<script>console.log('Message successfully sent');</script>";
}