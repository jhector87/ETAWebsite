<?php
ob_start();

$timezone = date_default_timezone_set("Europe/Zurich");
$host = "localhost";
$user = "root";
$pwd = "";
$database = "ETAWebsite";

$conn = mysqli_connect($host, $user, $pwd, $database);

if (mysqli_connect_errno()) {
	echo "Failed to connect: " . mysqli_connect_errno();
}
