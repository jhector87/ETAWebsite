<?php
setcookie("visited","yes",time()+15); // expires in 15sec
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Cookies</title>
</head>
<body>
<h1>Cookie Demo</h1>
<p><?php
	if (isset($_COOKIE["visited"])) {
		echo "You have been here in the last 15sec";
	} else {
		echo "You have not been here in the last 15sec";
	}
	?></p>
<a href="cookieTest.php">Reload</a>
</body></html>