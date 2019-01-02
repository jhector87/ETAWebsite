<?php
$home = "<img src='../res/images/logoWhite.png' alt='Home' height='30' style='margin-left: 20px; padding-top: 10px;'>";
$cart = "<img src='../res/icons/png/004-shopping-bag.png' alt='Cart' height='20' style='float: right; margin-right:10px; padding: 10px 12px;'>";
$login = "<img src='../res/icons/png/173-user.png' height='20' alt='Log in/Sign Up' style='float: right;  margin-right:10px;  padding-top: 10px;'>";
$loginUser = "";
if(session_status() == PHP_SESSION_NONE) echo $_SESSION['userLoggedIn'] . $loginUser;
//else $loginUser = $login;

$navs = ['home' => $home, 'about' => 'why eta?', 'plans' => 'plans', 'tutorials' => 'tutorials','cart' => $cart, 'login' => $login];