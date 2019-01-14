<?php
require_once("../includes/handlers/helper.php");
include "../config/configs.php";
include"../includes/classes/User.php";

$user = new User($_SESSION['userLoggedIn']);

$language = get_param('lang', 'en');
$pageId = get_param('id', 0);

?>

<!DOCTYPE html>
<html lang="en, de, fr">

<head>
	<meta charset="UTF-8">
	<title>ETA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="../res/css/mainStyling.css" type='text/css'/>
	<link rel="stylesheet" href="../res/css/cartItemsStyling.css" type='text/css'/>
	
	<?php
	if (is_file("../res/css/{$pageId}Styling.css")) echo '<link rel="stylesheet" href="../res/css/' . $pageId . 'Styling.css"
	type="text/css"/>';
	?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<?php
	if (is_file("../res/js/{$pageId}Script.js")) echo '<script src="../res/js/' . $pageId . 'Script.js" type="text/javascript"></script>';
	?>
	
</head>
<body>
<nav>
	
	<div class='lang'><?php render_languages($language, $pageId); ?> </div>
	<div class='menu'>
		<?php
		
		if (trim($pageId) == 'home') $pageId = "home"; elseif (trim($pageId) == "why eta?") $pageId = "about";
		elseif (trim($pageId) == 'cart') $pageId = "cart";
		elseif (trim($pageId) == 'login') $pageId = 'login';

		render_navigation($language, $pageId);
		?>
	</div>
	
	
</nav>
<main>
	<?php
	$currentPage = isset($_GET['id']) ? $_GET['id'] : 'home';
	render_content($currentPage . ".php");
	?>
</main>
</body>
</html>