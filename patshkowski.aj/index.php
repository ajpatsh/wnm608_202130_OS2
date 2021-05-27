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

<div class="grid gap container">
	<div class="col-xs-12 col-lg-4">
		<div class="container">
			<div class="card featured">
				<div class="title"><h2>Bont Park Star</h2></div>
				<div class="image"><img src="images/store/bontparkpink.png"></div>

				<a href="product_item.php?id=2" class="display-inline-flex"><button class="btn rainbow round">Learn More</button></a>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-lg-4">
		<div class="container">
			<div class="card featured">
				<div class="title"><h2>Riedell Dart Ombré</h2></div>
				<div class="image"><img src="images/store/dartgreen.png"></div>

				<a href="product_item.php?id=4" class="display-inline-flex"><button class="btn rainbow round">Learn More</button></a>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-lg-4">
		<div class="container">
			<div class="card featured">
				<div class="title"><h2>Antik Jet Carbon</h2></div>
				<div class="image"><img src="images/store/antikjet.png"></div>

				<a href="product_item.php?id=5" class="display-inline-flex"><button class="btn rainbow round">Learn More</button></a>
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


<div class="grid gap container">
	
			
	<div class="col-xs-12 col-lg-4">
		<div class="flex-justify-center">
			<h1>Riedell Dart</h1>

			<h4 class="display-inline-flex">As one of our most popular skate sets, the Riedell Dart Ombré has been introducing a much-needed flash of vibrant color and style to rinks and recreational skating areas across the country.</h4>

			<a href="product_item.php?id=4" class="display-inline-flex"><button class="btn rainbow round">See Specs</button></a>
		</div>
	</div>


	<div class="col-xs-12 col-lg-8">
		<img class="featured" src="images/store/dartpink.png">
	</div>
</div>







<div class="grid gap container">
	
	<div class="col-xs-12 col-lg-8">
		<img class="featured" src="images/store/solaris.png">
	</div>



	<div class="col-xs-12 col-lg-4">
		<div class="flex-justify-center">

			<h1>Riedell Solaris</h1>

			<h4 class="display-inline-flex">If you’re searching for the best skating equipment on the market, look no further than the Solaris Pro. This skate is perfect for everything from recreational skating to roller derby.</h4>
			<a href="product_item.php?id=3" class="display-inline-flex"><button class="btn rainbow round">See Specs</button></a>

		</div>
	</div>

		
	</div>
</div>





<script src="js/script.js"></script>



<?php include "parts/footer.php" ?>

</body>
</html>