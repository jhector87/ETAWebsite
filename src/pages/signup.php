<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOT</title>
    <link rel="stylesheet" href="../res/css/mainStyling.css"/>
</head>
<body>
<main>
<header>
    <?php
    include("navigation.php");
    ?>
</header>
    <?php

$user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
$link,
$host,
$user,
$password,
$db,
$port
);
?>
</main>

</body>
</html>