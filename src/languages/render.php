<?php
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
    echo t('content') . " $pageId";
}

	// Renders the navigation for the passed language and page ID.
function render_navigation($language, $pageId)
{
    $urlBase = $_SERVER['PHP_SELF'];
    add_param($urlBase, "lang", $language);
    for ($i = 0; $i <= 5; $i++) {
        $url = $urlBase;
        add_param($url, "id", $i);
        $class = $pageId == $i ? 'active' : 'inactive';
        echo "<a class=\"$class\" href=\"$url\">" . t('page') . " $i</a>";
    }
}
	// Renders the language navigation.
function render_languages($language, $pageId)
{
    $languages = array('de', 'fr', 'en');
    $urlBase = $_SERVER['PHP_SELF'];
    add_param($urlBase, 'id', $pageId);
    foreach ($languages as $lang) {
        $url = $urlBase;
        $class = $language == $lang ? 'active' : 'inactive';
        echo "<a class=\"$class\" href=\"" . add_param($url, 'lang', $lang) . "\">" . strtoupper($lang) . "</a>";
    }
}

	// The translation function.
function t($key)
{
    global $language;
    $texts = array(
        'page' => array(
            'de' => 'Seite',
            'fr' => 'Page',
            'en' => 'Page'
        ),
        'content' => array(
            'de' => 'Willkommen auf der Seite ',
            'fr' => 'Bienvenue sur la page ',
            'en' => 'Welcome to page '
        )
    );
    if (isset($texts[$key][$language])) {
        return $texts[$key][$language];
    } else {
        return "[$key]";
    }
}

	// Set langauage and page ID as global variables.
$language = get_param('lang', 'de');
$pageId = get_param('id', 0);

?>  