<?php
include_once("navigation.php");

// Returns a certain GET parameter or $default if the parameter
// does not exist.
function get_param($name, $default)
{
	if (isset($_GET[$name]))
		return urldecode($_GET[$name]);
	else
		return $default;
}

// Adds a GET parameter to the url. The url is passed by reference.
function add_param(&$url, $name, $value)
{
	$sep = strpos($url, '?') !== false ? '&' : '?';
	$url .= $sep . $name . "=" . urlencode($value);
	return $url;
}

// Renders the page content for a certain page ID.
function render_content($pageId)
{
	// echo t('content') . " $pageId";
	 include (t($pageId));
}

// Renders the navigation for the passed language and page ID.
function render_navigation($language, $pageId)
{
	global $navs;
	$urlBase = $_SERVER['PHP_SELF'];
	add_param($urlBase, "lang", $language);	
	// for ($i = 0; $i <= count($navs); $i++) {
		// foreach ($navs as $nav) {
	foreach ($navs as $key => $nav) {
		$url = $urlBase;
		add_param($url, "id", $key);
		$class = $pageId == $key ? 'active' : 'inactive';
		// echo "<a class=\"$class\" href=\"$url\">" . t('page') . " $nav</a>"; // Parse in the nav values
		echo "<a class=\"$class\" href=\"$url\">" . t($key) . "</a>"; // Parse in the nav values
		// echo "<a class=\"$class\" href=\"$url\"> $key</a>";
	}
}

// Renders the language navigation.
function render_languages($language, $pageId)
{
	// TODO: Make the language take this a menu 
	$languages = array('de', 'fr', 'en');
	$urlBase = $_SERVER['PHP_SELF'];
	add_param($urlBase, 'id', $pageId);
	foreach ($languages as $lang) {
		$url = $urlBase;
		$class = $language == $lang ? 'active' : 'inactive';
		echo "<a class=\"$class\" href=\"" . add_param($url, 'lang', $lang) . "\">" . strtoupper($lang) . "</a>";
	}

}

//// The translation function.
function t($key)
{
	global $language;
	$texts = array();
	$file = file("../res/languages/messages_$language.txt");
	foreach ($file as $line) {
		// echo $line . "<br>";
		$keyVal = explode('=', $line);
		// echo $keyVal[1]; 	
		// $texts[$keyVal[0]] = isset($keyVal[1]) ? $keyVal[1] : null; // Assigns left-hand side to right-hand side
		$texts[$keyVal[0]] = $keyVal[0] == $key ? $keyVal[1] : null; // Assigns left-hand side to right-hand side
		// if ($keyVal[0] == $key) $texts[$keyVal[0]] = $keyVal[1];
	}

	if (isset($texts[$key][$language])) {
		return $texts[$key][$language];
	} else {
		return "$key";
	}

	// global $language;
	// $texts = array(
	// 	'page' => array(
	// 		'de' => 'Seite',
	// 		'fr' => 'Page',
	// 		'en' => 'Page'
	// 	),
	// 	'content' => array(
	// 		'de' => 'Willkommen auf der Seite ',
	// 		'fr' => 'Bienvenue sur la page ',
	// 		'en' => 'Welcome to page '
	// 	)
	// );
	// if (isset($texts[$key][$language])) {
	// 	return $texts[$key][$language];
	// } else {
	// 	return "[$key]";
	// }
}


// Set langauage and page ID as global variables.
$language = get_param('lang', 'en');
$pageId = get_param('id', 0);
