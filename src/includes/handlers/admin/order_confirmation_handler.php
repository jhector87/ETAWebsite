<?php
include"../../../config/configs.php";
?>

<title>ETA - Admin - Order Processing Page</title>


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

<div class="itemName">
	<?php
	$product_query = mysqli_query($con, "SELECT * FROM Products WHERE product_id=1");
	while ($row = mysqli_fetch_array($product_query))
		echo $row['prod_name'];
	?>
</div>

<div class="itemAmount">
	<?php
	$product_query = mysqli_query($con, "SELECT * FROM Products WHERE product_id=1 ;");
	while ($row = mysqli_fetch_array($product_query))
		echo "Quantity: " . $row['quantity'];
	?>
</div>
<div class="description">
	<?php
	$product_query = mysqli_query($con, "SELECT * FROM Products WHERE product_id=1 ;");
	while ($row = mysqli_fetch_array($product_query))
		echo "CHF " . $row['price'] * $row['quantity'] .".00";
	?>
</div>


<button> Process Order </button>