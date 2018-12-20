<?php

// Starts a session and checks that the user is logged in to view cart
include("../config/configs.php");
include_once("../includes/classes/ErrorMessages.php");

if (isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
} else  header("Location: index.php?id=login&lang=en");

include("../includes/handlers/cart_handler.php");

?>
<form id="cart_form" action="../includes/handlers/mail.php" method="post">
	<label>CHOOSE A SHIPPING METHOD<br>
	<input type="radio" name="shipping_options"/>Use current shipping details
	<input type="radio" name="shipping_options" id="other_shipping_form"/>Add another address
	</label>
	
	<div id="shipping_form">
		<!-- <form method="post"> -->
		<h2><?php echo t('sign_up') ?></h2>
		<p>
			<label for='username'><?php echo t('username'); ?> </label>
			<input id='username' name='username' type="text" placeholder="eg. jessie873"
			       value="<?php getValueInput('username'); ?>" required>
		</p>
		
		<p>
			<?php echo $account->getError(ErrorMessages::$firstNameNotLongEnough) ?>
			<label for='firstName'><?php echo t('first_name'); ?> </label>
			<input id='firstName' name='firstName' type="text" placeholder="eg. John"
			       value="<?php getValueInput('firstName'); ?>" required>
		
		</p>
		
		<p>
			<?php echo $account->getError(ErrorMessages::$lastNameNotLongEnough) ?>
			<label for='lastName'><?php echo t('last_name'); ?> </label>
			<input id='lastName' name='lastName' type="text" placeholder="eg. Appleseed"
			       value="<?php getValueInput('lastName'); ?>" required>
		
		</p>
		<p>
			<?php echo $account->getError(ErrorMessages::$invalidAddress) ?>
			<?php echo $account->getError(ErrorMessages::$invalidAddressNumber) ?>
			<label for='address'><?php echo t('address') ?> </label>
			<input id='address' name='address' type="text" placeholder="eg. Stiglimattstrasse 23"
			       value="<?php getValueInput('address'); ?>" required>
		
		</p>
		<p>
			<label for='zipcode'><?php echo t('zip_code'); ?> </label>
			<input id='zipcode' name='zipcode' type="text" placeholder="eg. 3250" value="<?php getValueInput('zipcode'); ?>" required>
		</p>
		<p>
			<?php echo $account->getError(ErrorMessages::$invalidZipCode) ?>
			<label for='city'><?php echo t('city'); ?> </label>
			<select id='city' name='city'>
				<?php
				$cities = array(0 => 'Aarau', 'Bern', 'Basel', 'Biel/Bienne', 'Geneva', 'Lyss', 'Lausanne', 'Solothurn', 'Zurich');
				foreach ($cities as $city) {
					if ($city == 'Biel/Bienne') echo "<option selected>$city"; else echo "<option>$city";
				}
				?>
			</select>
		
		</p>
		<p>
			<label for='country'><?php echo t('country') ?> </label>
			<select id='country' name='country'>
				<?php
				$countries = array(0 => 'Australia', 'France', 'Germany', 'Great-Britain', 'Japan', 'New Zealand', 'Switzerland', 'USA');
				foreach ($countries as $country) {
					if ($country == 'Switzerland') echo "<option selected>$country"; else echo "<option>$country";
				}
				?>
			</select>
		</p>
		<p>
			<?php echo $account->getError(ErrorMessages::$emailsDoNotMatch); ?>
			<?php echo $account->getError(ErrorMessages::$invalidEmail); ?>
			<?php echo $account->getError(ErrorMessages::$emailTaken); ?>
			<label for='email'><?php echo t('email'); ?> </label>
			<input id='email' name='email' type="email" placeholder="eg. jessie@eta.com" value="<?php getValueInput('email'); ?>"
			       required>
		
		</p>
		<p>
			<label for='emailConfirm'><?php echo t('cnf_email'); ?> </label>
			<input id='emailConfirm' name='emailConfirm' type="email" placeholder="eg. jessie@eta.com"
			       value="<?php getValueInput('emailConfirm'); ?>"
			       required>
		</p>
		
		<p>
			<?php echo $account->getError(ErrorMessages::$passwordsDoNotMatch); ?>
			<?php echo $account->getError(ErrorMessages::$passwordNotAlphanumeric); ?>
			<?php echo $account->getError(ErrorMessages::$passwordCharacters); ?>
			<label for='password'><?php echo t('pwd'); ?> </label>
			<input id='password' name='password' type="password" placeholder="eg. 123uh178" value="<?php getValueInput('password'); ?>"
			       required>
		
		</p>
		
		<p>
			<label for='passwordConfirm'><?php echo t('cnf_pwd'); ?> </label>
			<input id='passwordConfirm' name='passwordConfirm' type="password" placeholder="eg. 123uh178"
			       value="<?php getValueInput('passwordConfirm'); ?>"
			       required>
		</p>
		
		<button type="submit" name="signUpBtn"><?php echo t('sign_up'); ?></button>
		
		<div class="hasAccountText">
			<span id="hideRegister"><?php echo t('login_text') ?></span>
		</div>
</form>
</div>

<div id="itemInCartRight">
	<a href="https://paypal.com"
	   onclick="void window.open('https://paypal.com','1543955792662','width=500,height=700,toolbar=0,menubar=0,location=0,' +
	    'status=1,scrollbars=1,resizable=1,left=0,top=0');return false;"><img src="../res/icons/paypal_icon.png">
		<span>
				<?php echo t('pay_now') ?>
			</span>
	</a>
</div>
