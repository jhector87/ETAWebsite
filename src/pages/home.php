<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>ETA</title>
	<link rel="stylesheet" href="../res/css/mainStyling.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body class="container-fluid" id="id">
	<div class="fixed-bckg" id="rectangle">

	<?php include("../pages/navigation.php"); ?>


	<!-- <div class="content">
    <h1>Heading</h1>
    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
  </div> -->

<div class="logo2"><img src="../../src/res/icons/png/002-antenna.png"></div>
	</div>

	<main>

		<div class="responsive">
			<div class="gallery">
				<a target="_blank" href="../res/images/1086695-computer-technology/png/005-cloud-server.png">
					<img src="../res/images/1086695-computer-technology/png/005-cloud-server.png" alt="Cinque Terre" width="600" height="400">
				</a>
				<div class="desc">
					<h3>Database</h3>
					<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor idnibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. <br><br>Vivamus sagittis lacus
					vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				</div>
			</div>
		</div>


		<div class="responsive">
			<div class="gallery">
				<a target="_blank" href="../res/images/1086695-computer-technology/png/008-data-link.png">
					<img src="../res/images/1086695-computer-technology/png/008-data-link.png" alt="Forest" width="600" height="400">
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
				<a target="_blank" href="../res/images/1086695-computer-technology/png/030-shield.png">
					<img src="../res/images/1086695-computer-technology/png/030-shield.png" alt="Northern Lights" width="600" height="400">
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
				<a target="_blank" href="../res/images/1086695-computer-technology/png/032-network-1.png">
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
			<form action="../../src/config/request.php" method="post">
				<input type="text" placeholder="Please enter your email..." name="email"><br>
				<span class="requestMsg"><input type="text" placeholder="Enter your request here..." name="request"></span><br>
				<br>
				<a href=accept="../../src/config/request.php" /><input type="submit" value="Submit request"></a><br>
				<a style="margin-top: 10px;"><img src="../res/icons/rocket-2.png"></a>
			</form>


		</div>

	</main>

	<footer>
		<?php include("../pages/footer.php"); ?>
	</footer>
</body>
</html>
