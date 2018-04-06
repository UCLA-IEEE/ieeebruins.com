<!DOCTYPE HTML>
<html>
<head>
	<title>Projects - IEEE at UCLA</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- JQUERY -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- FONT AWESOME -->
    <script src="https://use.fontawesome.com/348865e609.js"></script>

    <!-- STYLESHEETS -->
    <link rel='stylesheet' href='/public/css/footer.css' />
    <link rel='stylesheet' href='/public/css/navbar.css' />
		<link rel='stylesheet' href='/public/css/projects.css'/>
		<link rel='stylesheet' href='/public/css/style.css'/>
    <!--Favicon -->
    <link rel='icon' href='/public/favicon.ico' />
</head>
<body>
    <!-- NAVBAR -->
    <?php include('./includes/navbar.html'); ?>
    <div class="pt-3"></div>







		<!--Advanced Projects section-->
		<div id="APsection" class="container-fluid">
			<div class="contentwrapper2">
				<div class="row">
					<div id= "APleft" class="col-md-8">
						<h2 id="APsub2">Time to Build Something Really Cool</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
				   		<button id="APbutton" class="moredetails background-ieee-blue"><p>More Details Here</p></button>

					</div>
					<div id="APright" class="col-md-4 text-right">
						<h1 id="APheader">Advanced Projects</h1>
						<h2 id="APsub1">Let's Build a Quadcopter</h2>
					</div>
				</div>

			</div>


		</div>








		<!-- Student Project Initiative (SPI) section -->
		<div class="container-fluid background-grey">
			<div class="contentwrapper1">
				<h1 id="SPIheader">Student Project Initiative (SPI)</h1>
				<p id="SPIpara"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>


				<div class="container-fluid" align = "center">
		   		<button class="moredetails background-ieee-blue"><p>More Details Here</p></button>
				</div>
			</div>
		</div>



















		<!-- FOOTER -->
    <?php include('./includes/footer.html'); ?>
</body>
</html>