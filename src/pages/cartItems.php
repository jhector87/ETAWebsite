<!--//if ($_POST['student'] && $_POST['id'] == 'cart') echo '<script> alert("Button clicked in cartItems!"); </script>';-->
<!--//else echo "<h1 style='padding: 80px; align-content: center; text-align: center; '>CART EMPTY</h1>";-->

<?php
$product_query = mysqli_query($con, "SELECT * FROM Products");

$resultArray = array();

while ($row = mysqli_fetch_array($product_query)) array_push($resultArray, $row['prod_name_ref']);

$jsonArray = json_encode($resultArray);
?>

<script src="../res/js/Cart.js"></script>

<script>

    $(document).ready(function () {
        currentCart = <?php echo $jsonArray; ?>;
        productElement = new Cart();
        // setProduct(currentCart[0], currentCart, false);
    });

    function setProduct(prodName, prodQuant, itemChosen) {
        // // AJAX CALL TO DATABASE
        // $.post("../includes/handlers/ajax/getProdNameJson.php", {prodId: prodName}, function (data) {
        //     var item = JSON.parse(data);
        //     $('#itemName').text(item.prod_name);
		//
        //     $.post("../includes/handlers/ajax/getProdQuantityJson.php", {prodId: prodName}, function () {
        //         $('#itemAmount').text('Quantity: ' + item.quantity);
		//
        //     });
		//
        //     $.post("../includes/handlers/ajax/getProdNameJson.php", {prodId: prodName}, function () {
        //         $('#itemTotal').text('Total amount: CHF ' + (item.quantity * item.price).toFixed(2));
        //     });
        //
		//
        //     productElement.setItem(item.prod_name);
        //     updateQuantity();
        // });
    }

</script>

<div id="currentItemsInCartContainer">
	<div id="currentItemsInCart">
		
		<div id="itemInCartLeft">
			<div class="content">
				<div class="currentItem">
						<span class="itemIcon">
							<img src="../res/images/logoWhite.png" alt="Basket Logo">
						</span>
					<div class="itemInfo">
						<div id="itemName"></div>
						<div id="itemAmount"></div>
						<div id="itemTotal"></div>
					
					
					</div>
				
				</div>
			</div>
		</div>
		
		<div id="itemInCartCenter">
			<div id="itemDescription"></div>
		
		</div>
		
		<script src="../res/js/cartScript.js"></script>
		<div id="itemInCartRight">
			<a href="index.php?id=cart&lang=en"><img src="../res/icons/png/030-money-2.png" alt="Pay
			Now">
				<span>
					<?php
					echo t('pay_now');
					?>
				</span>
			</a>
		</div>
	</div>
</div>