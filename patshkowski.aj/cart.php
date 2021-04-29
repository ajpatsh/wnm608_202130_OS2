<?php

include "lib/php/functions.php";
include "parts/templates.php";

$cart = MYSQLIQuery("
   SELECT *
   FROM `products`
   WHERE `id` IN (5,9,13)
");

?><!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Cart</title>

	<?php include "parts/meta.php" ?>
	
</head>
<body>
	
	<?php include "parts/navbar.php" ?>

	<div class="container">
		<div class="card soft">
			<h2>This is your Cart</h2>

			<?php

         	echo array_reduce($cart,'makeCartList');

         	?>


			<button class="btn rainbow round"><a href="checkout.php">Checkout Now</a></button>

		</div>
	</div>
</body>
</html>