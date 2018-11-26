
<span class="plans">
<h1>Make your choice</h1>
<div class="row">

<div class="responsive">
  <div class="gallery">
      <!-- <img src="../res/images/png/005-cloud-server.png" alt="CLOUD SERVER"  width="600" height="400"> -->
      <h2><span id='student'>Education</span></h2>
      <h4>1 - 5 Students / Teachers</h4>
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
            <button onclick='moreThanTwo(this.id)' id='Student'>Buy now</button>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <!-- <img src="../res/images/png/005-cloud-server.png" alt="CLOUD SERVER"  width="600" height="400"> -->
      <h2 id='business'>Business</h2>
      <h4>10 - 100 Employees</h4>
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
            <button onclick='moreThanTwo(this.id)' id='Business'>Buy now</button>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <!-- <img src="../res/images/png/005-cloud-server.png" alt="CLOUD SERVER"  width="600" height="400"> -->
      <h2>Enterprise</h2>
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
            <button><a href='../includes/handlers/requestForm.php'>Contact Us</a></button>
  </div>
</div>

<div class="clearfix"></div>
</div>
</span>

<script>
  
    var clicks = 0;
    function moreThanTwo(clicked_id) {
        clicks++
        if (clicks > 5 && clicked_id == "Student") alert("You added more than 5 items in your basket, you might want to consider an Enterprise version");
        else if (clicks > 10 && clicked_id == "Business") alert("You added more than 10 items in your basket, you might want to consider an Enterprise version");
    };
    </script>

