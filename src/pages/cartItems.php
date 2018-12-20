<!--//if ($_POST['student'] && $_POST['id'] == 'cart') echo '<script> alert("Button clicked in cartItems!"); </script>';-->
<!--//else echo "<h1 style='padding: 80px; align-content: center; text-align: center; '>CART EMPTY</h1>";-->

<div id="currentItemsInCartContainer">
	<div id="currentItemsInCart">
		
		<div id="itemInCartLeft">
			<div class="content">
				<div class="currentItem">
						<span class="itemLink">
							<img src="../res/icons/education_icon.png" class="itemPicture" alt="Student">
						</span>
					<div class="itemInfo">
						
						<div class="itemName">
							<?php
							$product_query = mysqli_query($con, "SELECT * FROM Products WHERE product_id=1;");
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
					
					</div>
				
				</div>
			</div>
		</div>
		
		<div id="itemInCartCenter">
			<div class="content">
				<?php
				$product_query = mysqli_query($con, "SELECT * FROM Products WHERE product_id=2 ;");
				while ($row = mysqli_fetch_array($product_query))
					echo $row['description'];
				?>
			</div>
			
		</div>
		
		
		<div id="itemInCartRight">
			<a href="index.php?id=cart&lang=en"><img src="../res/icons/png/030-money-2.png" alt="Pay Now">
				<span>
					<?php echo t('pay_now') ?>
				</span>
			</a>
		</div>
	</div>
</div>