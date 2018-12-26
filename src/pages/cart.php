<?php
include("../config/configs.php");
include("../includes/classes/Account.php");
include("../includes/classes/ErrorMessages.php");
$account = new Account($con);

include("../includes/handlers/signup_handler.php");
include("../includes/handlers/login_handler.php");

// Let's the user know about how to access the cart
if (isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
	if ($userLoggedIn == 'administrator') header("Location: ../includes/handlers/admin/order_confirmation_handler.php");
}
else header("Location: index.php?id=login&lang=en");
?>


<div class='details'>
	
	<div id='userDetailsContainer'>
		<!-- Creates a request access -->
		<div id="userDetails">
			<?php
			// TODO: Parse-in the logged-in user
			$user_query = mysqli_query($con, "SELECT * FROM Users WHERE user_id=2;");
			while ($row = mysqli_fetch_array($user_query)) {
				echo "<h2>" . ucfirst(strtolower($row['first_name'])) . " " . ucfirst(strtolower($row['last_name'])) . "</h2>";
				echo "<h5>" . $row['street_add'] . "</h5>";
				echo "<h5>" . $row['zip_code'] . " " . $row['city'] . "</h5>";
				echo "<h5>" . $row['country'] . "</h5>";
			}
			?>
		</div>
	</div>
	
	<!-- SIDE INFORMATION -->
	<div id="cart_items">
		<div class="itemInfo">
			<?php include("../includes/handlers/cart_handler.php") ?>
		</div>
	</div>

</div>
<div id="payment_method">
	<button type="submit" name="signUpBtn"
	 href="https://paypal.com"
	   onclick="void window.open('https://paypal.com','1543955792662','width=500,height=700,toolbar=0,menubar=0,location=0,' +
	    'status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
		
				<?php
				echo t('pay_now');
				include("../includes/handlers/mail.php");
				?>
		</button>
	
</div>