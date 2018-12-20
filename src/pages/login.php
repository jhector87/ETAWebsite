<?php
include("../config/configs.php");
include("../includes/classes/Account.php");
include("../includes/classes/ErrorMessages.php");
$account = new Account($con);

include("../includes/handlers/register_handler.php");
include("../includes/handlers/login_handler.php");

// This function remembers the input so that the user can just correct it and having not re-type everything
function getValueInput($name)
{
	if (isset($_POST[$name])) echo $_POST[$name];
}

$t = time() + 60 * 60 * 24 * 30; // expires in 30 days
setcookie("firstName", $_POST["firstname"], $t);
setcookie("lastName", $_POST["lastname"], $t);
setcookie("loginUsername", $_POST["loginUsername"], $t);

// Let's the user know about how to access the cart
// FIXME: There's no redirect on the website
if(isset($_SESSION['userLoggedIn'])) echo "Logged in";
//if (!isset($_SESSION['userLoggedIn'])) {
//	echo "<div
//style='text-align:center; padding-top: 50px; padding-bottom:  0px; color: red; background-color: black;'>".
//ErrorMessages::$loginRequiredToAccessCart . "</div>";
//} else echo "";

// PHP USED TO DISPLAY WHICH PART OF THE FORM
if (isset($_POST['registerForm'])) {
	echo '<script>
            $(document).ready(function() {
                $("#loginForm").hide();
                $("#registerForm").show();
             });
		</script>';
} else {
	echo '<script>
                $(document).ready(function() {
                    $("#loginForm").show();
                    $("#registerForm").hide();
                });
			</script>';
}
?>

<div class='form'>
	
	<div id='loginContainer'>
		<div id="inputContainer">
			<!-- Creates a request access -->
			<div id="loginForm">
				<!-- TODO: PARSE THE LANGUAGE -->
				<form action="../pages/index.php?id=cart&lang=en" method="post">
					<h2><?php echo t('sign_in') ?></h2>
					<p>
						<?php echo $account->getError(ErrorMessages::$loginFailed) ?>
						<label for='loginUsername'><?php echo t('username') ?> </label>
						<input id='loginUsername' name='loginUsername' type="text" placeholder="eg. jessie873"
						       value="<?php getValueInput('loginUsername'); ?>" required>
					</p>
					<p>
						<label for="loginPassword"><?php echo t('pwd') ?> </label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="e.g 123hun73" required>
					</p>
					<button type="submit" name="loginBtn"><?php echo t('sign_in') ?></button>
					
					<div class="hasAccountText">
						<span id="hideLogin"><?php echo t('sign_up_text') ?></span>
					</div>
				
				</form>
			</div>
			
			
			<div id="registerForm">
				<form action="../pages/index.php?id=cart&lang=' . $language . '" method="post">
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
						       value="<?php getValueInput('emailConfirm'); ?>" required>
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
		</div>
	</div>
	
	<!-- SIDE INFORMATION -->
	<div id="loginText">
		<h1><?php echo t('login_title_h1') ?></h1>
		<h2><?php echo t('login_title_h2') ?></h2>
		<ul>
			<li><?php echo t('login_stay_connected') ?></li>
			<li><?php echo t('login_real_time_file_access') ?></li>
			<li><?php echo t('login_security') ?></li>
		</ul>
	</div>
</div>