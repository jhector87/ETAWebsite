<?php
include("../includes/handlers/helper.php");
include("../config/configs.php");
include_once("../includes/classes/ErrorMessages.php");
setcookie('username', $_POST['loginUsername'], time() + 100000);
setcookie('pwd', md5($_POST['loginPassword']), time() + 100000);

if (isset($_POST['loginBtn'])) {
	if (isset($_POST['loginUsername']) && strlen($_POST['loginUsername']) < 5) {
		echo ErrorMessages::$firstNameNotLongEnough;
	} else {
		$name = $_COOKIE['username'];
		$pwd = $_COOKIE['pwd'];
		
		echo $name . " " . $pwd;
	}
}

if (isset($_POST['signUpBtn'])) {
	$result = mysqli_query($this->con,
						   "INSERT INTO Users (user_name)
									  VALUES ('heushsueheushshe')");
}

function getValueInput($name)
{
	if (isset($_POST[$name])) echo $_POST[$name];
}

function getCookie($in)
{
	echo $_COOKIE[$in];
}
?>

<form action="../../SendGrid-API/send-email.php" method="post">
	<h2><?php echo t('sign_in') ?></h2>
	<p>
		<label for='loginUsername'><?php echo t('username') ?> </label>
		<input id='loginUsername' name='loginUsername' type="text" placeholder="eg. jessie873"
		       value="<?php getCookie('username') ?>" required>
	</p>
	<p>
		<label for="loginPassword"><?php echo t('pwd') ?> </label>
		<input id="loginPassword" name="loginPassword" type="password" placeholder="e.g 123hun73" value="<?php getCookie('pwd') ?>"
		       required>
	</p>
	<button type="submit" name="loginBtn"><?php echo t('sign_in') ?></button>

</form>