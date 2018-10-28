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
<!---->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--    <script>-->
<!--        $(document).ready(function () {-->
<!--            $('#logo-animation').fadeIn(3000).removeClass('hidden');-->
<!--        });-->
<!--    </script>-->
</head>

<body>
<nav>
    <?php
            include("navigation.php");

    ?>
</nav>
<main>
    <?php
    $currentPage = isset($_GET['id']) ? $_GET['id'] : 'home';
    //
    //        render_content($currentPage); // Using render_content function, you can manipulate  the languages

    $homePage = "<a href='index.php'><img src='../res/images/logoWhite.png' alt='Home' height='30'></a>";
    $cartPage = "<a href='cart.php'><img src='../res/icons/png/004-shopping-bag.png' alt='Cart' height='20'></a>";

    $loginPage = "<img src='../res/icons/png/173-user.png' height='20' alt='Log in/Sign Up'>";

     if (trim($currentPage) == $homePage) $currentPage = "home";
    elseif (trim($currentPage) == "why eta?") $currentPage = "about";
    elseif (trim($currentPage) == $cartPage) $currentPage = "cart";
    elseif (trim($currentPage) == $loginPage) $currentPage = "login";
    include("" . $currentPage . ".php");
    ?>
</main>
</body>
<footer  style="display: inline-block; position: fixed;">
    <?php include("footer.php"); ?>
</footer>
</html>