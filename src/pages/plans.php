<?php
session_start();

include("../config/configs.php");
include("../includes/classes/Account.php");
//include("../includes/handlers/cart_handler.php");

?>



<span class="plans">
	<?php
	if (isset($_SESSION['userLoggedIn'])) echo "Session Started";
	?>
<h1><?php echo t('choose_plan') ?></h1>
<div class="row">

	<div class="center">
<div class="responsive">
  <div class="gallery">
      <!-- <img src="../res/images/png/005-cloud-server.png" alt="CLOUD SERVER"  width="600" height="400"> -->
      <h2><span id='student'><?php echo t('education') ?></span></h2>
      <h4><?php echo t('education_plan') ?></h4>
    <div class="desc">
        <ul>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
        </ul>

    </div>
            <button onclick='moreThanLim(this.id); addToCart(this.id);' id='student'><?php echo t('buy_now') ?></button>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <h2 id='business'><?php echo t('business') ?></h2>
      <h4><?php echo t('business_plan') ?></h4>
    <div class="desc">
        <ul>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
        </ul>
    </div>
            <button onclick='moreThanLim(this.id); addToCart(this.id);' id='business'><?php echo t('buy_now') ?></button>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <!-- <img src="../res/images/png/005-cloud-server.png" alt="CLOUD SERVER"  width="600" height="400"> -->
      <h2><?php echo t('enterprise') ?></h2>
      <h4><?php echo t('enterprise_plan') ?></h4>
    <div class="desc">
        <ul>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
            <li>Add a description of the image here</li>
        </ul>
    </div>
            <button><a href='../includes/handlers/requestForm.php'><?php echo t('contact_us') ?></a></button>
  </div>
</div>

<!--<div class="clearfix"></div>-->
</span>
</div>
</div>

<div id="cart_items">
	<?php include_once("cartItems.php"); ?>
</div>

<script src="../res/js/cartScript.js" type="text/javascript"></script>

