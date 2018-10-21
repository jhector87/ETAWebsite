<?php
require_once("helper.php");

$language = get_param('lang', 'en');
$pageId = get_param('id', 0);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ETA</title>
    <link rel="stylesheet" href="../res/css/mainStyling.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#logo-animation').fadeIn(3000).removeClass('hidden');
        });
    </script>
</head>

<body>
<nav>
    <?php
//        include("navigation.php");
    $navs = array(0 => ' why eta? ', 'plans ', 'tutorials ');
            foreach ($navs as $nav)
            echo "<a href=\"index.php?id=$nav\">" . strtoupper($nav) . "</a>";

    ?>
</nav>
<main>
    <?php
        $currentPage = isset($_GET['id']) ? $_GET['id'] : 0;
//
        render_content($currentPage);
//
//    if (trim($currentPage) == "why eta?") $currentPage = "home";
//    elseif (trim($currentPage) == "sign-in") $currentPage = "siging";
//    include("". $currentPage . ".php");
    ?>
</main>
</body>
</html>