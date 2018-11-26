
<span class="plans">
<h1><?php echo t('choose_plan') ?></h1>
<div class="row">

<div class="responsive">
  <div class="gallery">
      <!-- <img src="../res/images/png/005-cloud-server.png" alt="CLOUD SERVER"  width="600" height="400"> -->
      <h2><span id='student'><?php echo t('education') ?></span></h2>
      <h4></h4>
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
            <button onclick='moreThanTwo(this.id)' id='Student'><?php echo t('buy_now') ?></button>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <!-- <img src="../res/images/png/005-cloud-server.png" alt="CLOUD SERVER"  width="600" height="400"> -->
      <h2 id='business'><?php echo t('business') ?></h2>
      <h4></h4>
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
            <button onclick='moreThanTwo(this.id)' id='Business'><?php echo t('buy_now') ?></button>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <!-- <img src="../res/images/png/005-cloud-server.png" alt="CLOUD SERVER"  width="600" height="400"> -->
      <h2><?php echo t('entreprise') ?></h2>
      <h4>> 100 Employees</h4>
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

<div class="clearfix"></div>
</div>
</span>

<script>
  
    var clicks = 0;
    function moreThanTwo(clicked_id) {
        clicks++
        if (clicks > 5 && clicked_id == "Student") alert(" <?php echo t('basket_alert_student') ?>");
        else if (clicks > 10 && clicked_id == "Business") alert(" <?php echo t('basket_alert_business') ?>");
    };
    </script>

