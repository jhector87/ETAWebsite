<?php
$home = "<img src='../res/images/logoWhite.png' alt='Home' height='30' style='margin-left: 20px; padding-top: 10px;'>";
$cart = "<img src='../res/icons/png/004-shopping-bag.png' alt='Cart' height='20' style='float: right; margin-right:10px; padding-top: 10px;'>";
$login = "<img src='../res/icons/png/173-user.png' height='20' alt='Log in/Sign Up' style='float: right;  margin-right:10px;  padding-top: 10px;'>";

$langEn;

$langs = array(
	"<span style='float:right;'>FR</span>",
	"<span style='float:right;'>EN</span>"
);
$navs = array('home' => $home, 'about' => 'why eta?', 'plans' => 'plans', 'tutorials' => 'tutorials', 'en' => $langs[0], 'fr' => $langs[1], 'login' => $login, 'cart' => $cart);

foreach ($navs as $key => $nav) {
	echo "<a href='index.php?lang=en&id=$key'>" . $nav . "</a>";
}
