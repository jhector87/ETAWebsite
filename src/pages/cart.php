<?php

// Starts a session and checks that the user is logged in to view cart
include("../config/configs.php");

if (isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
} else header("Location: index.php?id=login&lang=en");
?>

<div id="currentItemsInCartContainer">
	<div id="currentItemsInCart">
		<div id="itemInCartLeft">
		
		</div>
		
		<div id="itemInCartCenter">
			<div class="content">
			Hello
			</div>
			<div class="description">
			I'm description
			</div>
		</div>
		
		<div id="itemInCartRight">
		
		</div>
	</div>
</div>