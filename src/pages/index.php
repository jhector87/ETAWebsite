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
	<?php 
if (is_file("../res/css/{$pageId}Styling.css"))
	echo '<link rel="stylesheet" href="../res/css/' . $pageId . 'Styling.css" type="text/css"/>';
?>
    <link href="../res/js/animation.js" type='text/javascript'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<nav>
	<div class='menu'>
	<?php
	global $navs;

	if (trim($pageId) == 'home') $pageId = "home";
	elseif (trim($pageId) == "why eta?") $pageId = "about";
	elseif (trim($pageId) == 'cart') $pageId = "cart";
	elseif (trim($pageId) == 'login') $pageId = "login";

	render_navigation($language, $pageId);
	?>
	</div>
<div class='lang'><?php render_languages($language, $pageId); ?> </div>
</nav>
<main>
	<?php
require_once("navigation.php");
global $navs;
$currentPage = isset($_GET['id']) ? $_GET['id'] : 'home';

// if (trim($currentPage) == "home") $currentPage = "home";
// elseif (trim($currentPage) == "why eta?") $currentPage = "about";
// elseif (trim($currentPage) == "cart") $currentPage = "cart";
// elseif (trim($currentPage) == "login") $currentPage = "login";
render_content($currentPage . ".php");
?>
</main>
</body>
</html>