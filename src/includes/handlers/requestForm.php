<form action="../../pages/index.php?lang=en&id=home" method="post">
	<p><span> Quick request </span></p>
	<p><input type="email" placeholder="Please enter your email..." name="email" col="60"></p>
	<p> <textarea name="comment" placeholder="Please enter a short message here describing your request..."
	              rows="8" cols="80" style="border-color: #66CC00;"> </textarea></p>
	<br>
	<button type="submit" value="Submit request"
	        onclick="alert('Your request was successfully received. ' +
	         'One of our agents will be in contact with you within the next 24 hours.')">
		<?php echo t('submit_request') ?></button>
	<br>
</form>
