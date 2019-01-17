<link rel="stylesheet" href="../../res/css/mainStyling.css">
<link href="../../res/js/loginScript.js">

<form action="#" method="post">
	<p><span> Quick request </span></p>
	<p><input type="email" placeholder="Please enter your email..." name="email" id="email"></p>
	<p> <textarea class="errorMsg" id="commentError" name="message" placeholder="Please enter a short message here describing your request..." rows="8" cols="80"> </textarea></p>
	<br>
	<button type="submit" value="Submit request" onclick="requestSubmission()">
		<?php echo t('submit_request') ?></button>
	<br>
</form>
