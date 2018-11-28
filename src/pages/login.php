<?php
include("../config/configs.php");
include("../includes/classes/Account.php");
include("../includes/classes/ErrorMessages.php");
$account = new Account($conn);


include("../includes/handlers/signUpHandler.php");
include("../includes/handlers/loginHandler.php");

// This function remembers the input so that the user can just correct it and having not re-type everything
function getValueInput($name)
{
	if (isset($_POST[$name])) echo $_POST[$name];
}

?>
<div class='form'>

    <div class='signinForm'>
        <!-- Creates a request access -->
        <form action="../pages/index.php?id=login" method="post">
            <h1><?php echo t('sign_in') ?></h1>
            <p>
                <label for='username'><?php echo t('username') ?> </label>
                <input id='username' name='username' type="text" placeholder="eg. jessie873"
                       value="<?php getValueInput('username') ?>" required>
            </p>
            <p>
                <label for="passsword"><?php echo t('pwd') ?> </label>
                <input id="password" name="password" type="password" placeholder="e.g 123hun73" required>
            </p>
            <button id='loginBtn' type="submit" name="loginBtn" value="Login"
                    alt="Login"><?php echo t('sign_in') ?></button>


        </form>

    </div>

    <div class='signupForm'>

        <form action="../pages/index.php?id=login" method="post">
            <!-- <form method="post"> -->
            <h1><?php echo t('sign_up') ?></h1>
            <p>
				<?php $account->getError(ErrorMessages::$usernameNotLongEnough) ?>
                <label for='username'><?php echo t('username') ?> </label>
                <input id='username' name='username' type="text" placeholder="eg. jessie873"
                       value="<?php getValueInput('username') ?>" required>
            </p>
            <p>
				<?php $account->getError(ErrorMessages::$firstNameNotLongEnough) ?>
                <label for='firstName'><?php echo t('first_name') ?> </label>
                <input id='firstName' name='firstName' type="text" placeholder="eg. John"
                       value="<?php getValueInput('firstName') ?>" required>
            </p>
            <p>
				<?php $account->getError(ErrorMessages::$lastNameNotLongEnough) ?>
                <label for='lastName'><?php echo t('last_name') ?> </label>
                <input id='lastName' name='lastName' type="text" placeholder="eg. Appleseed"
                       value="<?php getValueInput('lastName') ?>" required>
            </p>
            <p>
				<?php $account->getError(ErrorMessages::$invalidAddress) ?>
				<?php $account->getError(ErrorMessages::$invalidAddressNumber) ?>

                <label for='address'><?php echo t('address') ?> </label>
                <input id='address' name='address' type="text" placeholder="eg. Stiglimattstrasse 23"
                       value="<?php getValueInput('address') ?>" required>
            </p>
            <p>
				<?php $account->getError(ErrorMessages::$invalidZipCode) ?>
                <label for='zipcode'><?php echo t('zip_code') ?> </label>
                <input id='zipcode' name='zipcode' type="text" placeholder="eg. 3250" value="<?php getValueInput('zipcode') ?>" required>
				<?php $account->getError(ErrorMessages::$cityNotFound) ?>
                <label for='city'><?php echo t('city') ?> </label>
                <input id='city' name='city' type="text" placeholder="eg. Bern" value="<?php getValueInput('city') ?>"
                       required>
            </p>
            <p>
                <label for='country'><?php echo t('country') ?> </label>
                <select id='country' name='country'>
					<?php
					$countries = array(0 => 'Australia', 'France', 'Germany', 'Great-Britain', 'Japan', 'New Zealand', 'Switzerland', 'USA');
					foreach ($countries as $country) {
						if ($country == 'Switzerland') echo "<option selected>$country";
						else echo "<option>$country";
					}
					?>
                </select>
            </p>
            <p>
				<?php $account->getError(ErrorMessages::$emailsDoNotMatch) ?>
				<?php $account->getError(ErrorMessages::$invalidEmail) ?>
                <label for='email'><?php echo t('email') ?> </label>
                <input id="email" type="email" placeholder="e.g john@eta.com" value="<?php getValueInput('email') ?>"
                       required>
            </p>
            <p>
                <label for="emailConfirm"><?php echo t('cnf_email') ?> </label>
                <input id="emailConfirm" type="email" value="<?php getValueInput('emailConfirm') ?>" required>
            </p>
            <p>
				<?php $account->getError(ErrorMessages::$passwordsDoNotMatch) ?>
				<?php $account->getError(ErrorMessages::$invalidPassword) ?>
				<?php $account->getError(ErrorMessages::$passwordNotLongEnough) ?>
                <label for="password"><?php echo t('pwd') ?>:</label>
                <input id="password" name="password" type="password" placeholder="e.g 123hun73"
                       value="<?php getValueInput('password') ?>" required>
            </p>
            <p>
                <label for="passwordConfirm"><?php echo t('cnf_pwd') ?> </label>
                <input id="passwordConfirm" name="passwordConfirm" type="password" placeholder="e.g 123hun73" required>
            </p>
            <button type="submit" name="signUpBtn"><?php echo t('sign_up') ?></button>

        </form>
    </div>
</div>