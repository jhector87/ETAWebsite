<?php

session_start();
session_destroy();

$t = time() - 86400; // sets the time to previous day thus removing it.
setcookie("loginUsername", $_POST["loginUsername"], $t);
setcookie("loginPwd", $_POST["loginPassword"], $t);

echo "You are not Logged out";
?>

<button href="index.php?id=home&lang=en">Go Home</button>
