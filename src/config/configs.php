<?php
ob_start();
session_start();

$timezone = date_default_timezone_set("Europe/Zurich");
$host = "localhost";
$user = "root";
$pwd = "root";
$database = "ETA";

$conn = mysqli_connect($host, $user, $pwd, $database);

if (mysqli_connect_errno()) {
	echo "Failed to connect: " . mysqli_connect_errno();
}
