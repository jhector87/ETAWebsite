<?php

include"../../../config/configs.php";
include("/logout_handler.php");

//if()

?>


<title>ETA - Admin - Order Processing Page</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../../../res/js/cartAdmin.js"></script>
<link rel="stylesheet" href="../../../res/css/mainStyling.css" type='text/css'/>
<link rel="stylesheet" href="../../../res/css/adminPageStyling.css" type='text/css'/>

<button id="logoutBtn" style="float: right; margin: 15px;" onclick="logout()">Logout</button>
<div id='userDetailsContainer'>
	<!-- Creates a request access -->
	<div id="userDetails">
		<?php
		echo "<table id='customers'>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Category</th>
				<th>Quantity</th>
				<th>Total Price</th>
				<th>Process Status</th>
				<th>Process Order</th>
			</tr>";
			
		$user_query = mysqli_query($con, "SELECT * FROM Products, Users WHERE Users.user_cat = Products.product_id");
		
		while($row = mysqli_fetch_array($user_query))
		{
			echo "<tr>";
			echo "<td>" . $row['user_id'] . "</td>";
			echo "<td>" . $row['user_name'] . "</td>";
			echo "<td>" . $row['email'] . "</td>";
			echo "<td>" . $row['user_cat'] . "</td>";
			echo "<td>" . $row['quantity'] . "</td>";
			echo "<td>" . $row['quantity'] * $row['price'] . "</td>";
			echo "<td id='orderConf'>" . $row['process'] . "</td>";
			
			echo "<td><button id='processOrderBtn' onclick='processOrder({$row['user_id']})'> Process Order </button></td>";
			echo "</tr>";
		}
		echo "</table>";
		
		mysqli_close($con);
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
