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
    <link rel="stylesheet" href="../res/css/mainStyling.css" type='text/css'/>
    <link rel="stylesheet" href="../res/css/homeStyling.css" type='text/css'/>
    <link rel="stylesheet" href="../res/css/plansStyling.css" type='text/css'/>

    <link href="../res/js/animation.js" type='text/javascript'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<nav>
	<?php
	include("navigation.php");
	?>
</nav>
<main>
	<?php
	include_once("navigation.php");
	$currentPage = isset($_GET['id']) ? $_GET['id'] : 'home';
	//            render_content($currentPage); // Using render_content function, you can manipulate  the languages
	
	
	if (trim($currentPage) == 'home') $currentPage = "home";
    elseif (trim($currentPage) == "why eta?") $currentPage = "about";
    elseif (trim($currentPage) == 'cart') $currentPage = "cart";
    elseif (trim($currentPage) == 'login') $currentPage = "login";
	include("" . $currentPage . ".php");
	?>
</main>
</body>
</html>