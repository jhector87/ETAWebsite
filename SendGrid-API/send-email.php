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
Email: {$email}<br>
Purpose: {$message}<br>
");

/*Send the mail*/
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = ('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');
$sg = new \SendGrid($apiKey);

/*Response*/
$response = $sg->client->mail()->send()->post($mail);
//header("Location: index.php?id=cart&lang=en");
?>

<!--Print the response-->
<!--<pre>-->
<!--    --><?php
//    var_dump($response);
//    ?>
<!--</pre>-->