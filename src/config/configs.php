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
	echo "<h2 style='text-align: center; align-items: center; margin-top: 60px;'>Failed to connect: " . mysqli_connect_errno() . "</h2>";
}
