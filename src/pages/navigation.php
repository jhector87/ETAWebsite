<!--<nav class="col-12 left">-->
<!--	<ul>-->
<!--		<li class="logo active"><a href="index.php"><img src="../res/images/logoWhite.png" alt="Home" height="30"></a></li>-->
<!---->
<!--		<li><a href="about.php">WHY ETA?</a></li>-->
<!--		<div class="dropdown">-->
<!--			<li class="dropbtn">PLANS</li>-->
<!--			<div class="dropdown-content">-->
<!--				<a href="plans.php">STUDENT EDITION</a>-->
<!--				<a href="plans.php">BUSINESS EDITION</a>-->
<!--				<a href="plans.php">ENTERPRISE EDITION</a>-->
<!--			</div>-->
<!--		</div>-->
<!--		<li><a href="tutorials.php">TUTORIALS</a></li>-->
<!---->
<!---->
<!--		<li style="float: right;"><a href="signup.php"><img src="../res/icons/png/173-user.png" height="20" alt="Log in/Sign Up"></a></li>-->
<!--		<li style="float: right;"><a href="cart.php"><img src="../res/icons/png/004-shopping-bag.png" alt="Cart" height="20"></a></li>-->
<!--		<li style="float: right;"><a>ENG</a></li>-->
<!--		<li style="float: right;"><a>FR</a></li>-->
<!--	</ul>-->
<!--</nav>-->

<?php
$home = "<img src='../res/images/logoWhite.png' alt='Home' height='30' style='margin-left: 20px;'>";
$cart = "<img src='../res/icons/png/004-shopping-bag.png' alt='Cart' height='20' style='float: right; margin-right:10px;'>";
$login ="<img src='../res/icons/png/173-user.png' height='20' alt='Log in/Sign Up' style='float: right;  margin-right:10px;  '>";

$navs = array(0 => $home, ' why eta? ', 'plans ', 'tutorials ', 'EN', 'FR', $login, $cart);
foreach ($navs as $nav)
    echo "<a href=\"index.php?id=$nav\">" . strtoupper($nav) . "</a>";
