<?php
$home = "<img src='../res/images/logoWhite.png' alt='Home' height='30' style='margin-left: 20px; padding-top: 10px;'>";
$cart = "<img src='../res/icons/png/004-shopping-bag.png' alt='Cart' height='20' style='float: right; margin-right:10px; padding-top: 10px;'>";
$login = "<img src='../res/icons/png/173-user.png' height='20' alt='Log in/Sign Up' style='float: right;  margin-right:10px;  padding-top: 10px;'>";

$langNavs = array(
	'en' => "<span style='float:right;'>FR</span>",
	'fr' => "<span style='float:right;'>EN</span>"
);

$navs = array('home' => $home, 'about' => 'why eta?', 'plans' => 'plans', 'tutorials' => 'tutorials', 'login' => $login, 'cart' => $cart);


foreach ($navs as $keyMainNav => $nav) {
		echo "<a href='index.php?lang=en&id=$keyMainNav'>" . $nav . "</a>";
}
