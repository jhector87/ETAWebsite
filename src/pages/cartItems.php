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
			<a href="#" style="vertical-align: middle;" onclick="checkItem()"><img src="../res/icons/png/030-money-2.png" alt="Pay Now">
				<span>
					<?php
					echo t('pay_now');
					?>
				</span>
			</a>
		</div>
	</div>
</div>