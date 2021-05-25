<?php

include "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>

	<title>SoCal Roller Skate Co.</title>

	<script src="js/jquery-3.6.0.min.js"></script>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

	<?php include "parts/meta.php" ?>

</head>



<body>
	
	<?php include "parts/navbar.php" ?>

<div class="view-window hero display-flex flex-align-center flex-justify-center" style="background-image:url(images/skateshero.jpg)">
			<h2 class="card soft dark"><a href="http://ajpatshkowski.com/aau/wnm608/patshkowski.aj/product_list.php">PRODUCT</a></h2>
</div>

<h1>Featured Skates</h1>

<div class="grid">
	<div class="col-xs-12 col-lg-4">
		<div class="container">
			<div class="card featured">
				<div class="title"><h2>Bont Park Star</h2></div>
				<div class="image"><img src="images/store/bontparkpink.png"></div>

				<button class="btn round rainbow" a href="#">Learn More</a></button>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-lg-4">
		<div class="container">
			<div class="card featured">
				<div class="title"><h2>Riedell Dart Ombré</h2></div>
				<div class="image"><img src="images/store/dartgreen.png"></div>

				<button class="btn round rainbow" a href="#">Learn More</a></button>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-lg-4">
		<div class="container">
			<div class="card featured">
				<div class="title"><h2>Antik Jet Carbon</h2></div>
				<div class="image"><img src="images/store/antikjet.png"></div>

				<button class="btn round rainbow" a href="#">Learn More</a></button>
			</div>
		</div>
	</div>
</div>

<div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url(images/outdoorskate.jpg)">
	<div class="display-right">
		<h1>30% OFF</h1>
		<h2 class="summer">Summer Sale</h2>
	</div>
</div>


<div class="grid">
		<div class="container main display-flex flex-align-center">

			<div class="col-xs-12 col-md-8 col-lg-8">
				<img class="display-flex flex-align-center" src="images/store/dartpink.png">
			</div>
			
			<div class="col-xs-12 col-md-4 col-lg-4">
			<div class="container">
				<h1>Featured product name</h1>

				<h4 class="display-inline-flex">Supporting text about how awesome this product is and how much it will solve all of your problems and make your life so much easier.</h4>

			<button class="btn rainbow round display-inline-flex">Call To Action</button>
			</div>
		</div>
		</div>
	</div>
</div>




<div class="grid">
	<div class="col-xs-12 col-md-6 col-lg-2">
		<div class="container display-flex flex-align-center">

			<div class="container">

				<h1>Featured product name</h1>

				<h4 class="display-inline-flex">Supporting text about how awesome this product is and how much it will solve all of your problems and make your life so much easier.</h4>
				<button class="btn rainbow round display-inline-flex">Call To Action</button>

			</div>

			<div class="container">
				<img class="display-flex flex-align-center" src="images/store/solaris.png">
			</div>

		</div>
	</div>
</div>





<script src="js/script.js"></script>



<?php include "parts/footer.php" ?>

</body>
</html>