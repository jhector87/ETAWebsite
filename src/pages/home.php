<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>ETA</title>
	<link rel="stylesheet" href="../res/css/mainStyling.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
$(document).ready(function(){
        $('#logo-animation').fadeIn(3000).removeClass('hidden');
			});
</script>
</head>

<body class="container-fluid">
	<div class="fixed-bckg" id="rectangle">

	<?php include("navigation.php")?>


	<!-- <div class="content">
    <h1>Heading</h1>
    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
  </div> -->

<div class="logo2" id="logo-animation"><img src="../../src/res/icons/png/002-antenna.png"><br>
<h2 style="color:white; background: rgba(0.0,0.0, 0.0, 0.5)">Be as efficient as if it was your second nature.</h2>
</div>
	</div>

	<main>

		<div class="responsive">
			<div class="gallery">
				<a target="_blank" href="../../src/res/images/png/1086695-computer-technology/png/005-cloud-server.png">
					<img src="../res/images/1086695-computer-technology/png/005-cloud-server.png" alt="CLOUD SERVER" width="600" height="400">
				</a>
				<div class="desc">
					<h3>Database</h3>
					<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor idnibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. <br><br>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
			</div>
		</div>


		<div class="responsive">
			<div class="gallery">
				<a target="_blank" href="/src/res/icons/png/003-apartment.png">
					<img src="../res/images/1086695-computer-technology/png/008-data-link.png" alt="DATA" width="600" height="400">
				</a>
				<div class="desc">
					<h3>File Sharing</h3>
					<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. <br><br>Vivamus sagittis lacus
						vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
			</div>
		</div>

		<div class="responsive">
			<div class="gallery">
				<a>
					<img src="../res/images/1086695-computer-technology/png/030-shield.png" alt="SECURITY" width="600" height="400">
				</a>
				<div class="desc">
					<h3>Security</h3>
					<p>Best-in-class 256-bit AES encryption
						Your data is protected by advanced mathematics in AES-256, the encryption standard trusted by security experts worldwide.</p>

					<p>IP address masking:
						No need to reveal your true IP address and location; change your IP address through one of ExpressVPN's secure VPN servers.
					</p>
				</div>
			</div>
		</div>

		<div class="responsive">
			<div class="gallery">
				<a>
					<img src="../res/images/1086695-computer-technology/png/032-network-1.png" alt="Network" width="600" height="400">
				</a>
				<div class="desc">
					<h3>Instant Access</h3>
					<p>Curabitur blandit tempus porttitor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibus, <br><br>tellus
						ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus mollis interdum.</p>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>

		</div>



		<!-- Creates a request access -->
		<div class="quickrequest oval" id="#top">
			<form action="login.php" method="post">
				<p><input type="text" placeholder="Please enter your email..." name="email"></p>
				<p><textarea name="comment" placeholder="Please enter a short message here describing your request..." rows="5" cols="60" style="border-color: #66CC00;"></textarea></p>
				<br>
				<a href=accept="../../src/config/request.php" /><input type="submit" value="Submit request"></a><br>
				<a style="margin-top: 10px;"><img src="../res/icons/rocket-2.png"></a>
			</form>


		</div>

	</main>

	<footer style="display: center;">
		<?php include("../pages/footer.php"); ?>
	</footer>
</body>
</html>
