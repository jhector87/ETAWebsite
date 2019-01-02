<?php
if (isset($_POST['submit'])) {
	include_once("../../SendGrid-API/send-email.php");
	
}
?>

<button type="submit" formaction="../../SendGrid-API/send-email.php">Click to send</button>
