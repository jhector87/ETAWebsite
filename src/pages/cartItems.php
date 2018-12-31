<!--//if ($_POST['student'] && $_POST['id'] == 'cart') echo '<script> alert("Button clicked in cartItems!"); </script>';-->
<!--//else echo "<h1 style='padding: 80px; align-content: center; text-align: center; '>CART EMPTY</h1>";-->

<!-- TODO: remove up to </script> -->
<?php
//$product_query = mysqli_query($con, "SELECT * FROM Products");
//
//$resultArray = array();
//
//while ($row = mysqli_fetch_array($product_query)) array_push($resultArray, $row['prod_name_ref']);
//
//$jsonArray = json_encode($resultArray);
//?>
<!---->
<!--<script src="../res/js/Cart.js"></script>-->
<!---->
<!--<script>-->
<!--    $(document).ready(function () {-->
<!--        currentCart = --><?php //echo $jsonArray; ?><!--//;-->
<!--//        productElement = new Cart();-->
<!--//        // setProduct(currentCart[0], currentCart, false);-->
<!--//    });-->
<!--</script>-->

<div id="currentItemsInCartContainer">
	<div id="currentItemsInCart">
		
		<div id="itemInCartLeft">
			<div class="content">
				<div class="currentItem">
						<span class="itemIcon">
							<img src="../res/images/logoWhite.png" style="min-width:57px; min-height: 57px;">
						</span>
					<div class="itemInfo">
						<div id="itemName"></div>
						<div id="itemAmount"></div>
						<div id="itemTotal" ></div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="itemInCartCenter">
			<div id="itemDescription"><?php echo t("title")?></div>
		
		</div>
		
		<script src="../res/js/cartScript.js"></script>
		<div id="itemInCartRight">
			<a href="index.php?id=cart&lang=en" style="vertical-align: middle;" onclick="checkItem()"><img src="../res/icons/png/030-money-2.png" alt="Pay Now">
				<span>
					<?php
					echo t('pay_now');
					?>
				</span>
			</a>
		</div>
	</div>
</div>