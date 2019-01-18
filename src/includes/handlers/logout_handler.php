<?php
session_start();
session_regenerate_id();
session_destroy();

$t = time() - 86400; // sets the time to previous day thus removing it.
// sets any cookie reference to empty
setcookie("username", "", $t);
unset($_COOKIE["username"]);
setcookie("firstName", "", $t);
unset($_COOKIE["firstName"]);
setcookie("currentUser", "", $t);
unset($_COOKIE["currentUser"]);
