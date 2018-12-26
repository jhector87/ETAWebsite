<div class="itemName">
	<?php
	$product_query = mysqli_query($con, "SELECT * FROM Products WHERE product_id=1 ;");
	while ($row = mysqli_fetch_array($product_query)) echo $row['prod_name'];
	?>
</div>

<div class="itemAmount">
	<?php
	$product_query = mysqli_query($con, "SELECT * FROM Products WHERE product_id=1 ;");
	while ($row = mysqli_fetch_array($product_query)) echo "Quantity: " . $row['quantity'];
	?>
</div>
<div class="description">
	<?php
	$product_query = mysqli_query($con, "SELECT * FROM Products WHERE product_id=1 ;");
	while ($row = mysqli_fetch_array($product_query)) echo "CHF " . $row['price'] * $row['quantity'] . ".00";
	?>
</div>
