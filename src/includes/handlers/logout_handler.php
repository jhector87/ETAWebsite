<?php
	session_start();
	session_destroy();
	
	$t = time() - 86400; // sets the time to previous day thus removing it.
// sets any cookie reference to empty
	setcookie("loginUsername", "", $t);
	setcookie("loginPwd", "", $t);
	