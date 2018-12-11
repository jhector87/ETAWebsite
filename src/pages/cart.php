<?php

// Starts a session and checks that the user is logged in to view cart
include("../config/configs.php");
include_once("../includes/classes/ErrorMessages.php");

if (isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
} else	header("Location: index.php?id=login&lang=en");

//include("cartItems.php");
?>
<!---->
<!--<div id="currentItemsInCartContainer">-->
<!--	<div id="currentItemsInCart">-->
<!--		-->
<!--		<div id="itemInCartLeft">-->
<!--			<div class="content">-->
<!--				<div class="currentItem">-->
<!--						<span class="itemLink">-->
<!--							<img src="../res/icons/education_icon.png" class="itemPicture" alt="Student">-->
<!--						</span>-->
<!--					<div class="itemInfo">-->
<!--						-->
<!--						<span class="itemName">-->
<!--							<span>--><?php //echo t('education_abo') ?><!--</span>-->
<!--						</span>-->
<!--						-->
<!--						<span class="itemAmount">-->
<!--							<span id="itemQuantity" onclick="addItem()">Quantity: 1</span>-->
<!--						</span>-->
<!--					-->
<!--					</div>-->
<!--				-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--			-->
<!--			<div id="itemInCartCenter">-->
<!--				<div class="content">-->
<!--					Hello-->
<!--				</div>-->
<!--				<div class="description">-->
<!--					I'm description-->
<!--				</div>-->
<!--			</div>-->
<!--			-->
<!--			<div id="itemInCartRight">-->
<!--				<a href="https://paypal.com" onclick="void window.open('https://paypal.com','1543955792662','width=500,height=700,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;"><img src="../res/icons/paypal_icon.png"><span>--><?php //echo t('pay_now') ?><!--</span></a>-->
<!--				-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->