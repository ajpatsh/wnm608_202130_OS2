<header class="navbar">
		<div class="container display-flex flex-align-center">
			<div class="flex-none">
				<a href="http://ajpatshkowski.com/aau/wnm608/patshkowski.aj/"><img class="navlogo" src="img/Logo.png"></a>
			</div>
			<div class="flex-stretch"></div>
			<nav class="flex-none nav nav flex">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="product_list.php">Products</a></li>
					<li><a href="product_cart.php">
						<span><img src="images/cart.svg" class="icon" style="font-size:2em"></span>
						<span class="badge"><?= makeCartBadge() ?></span>
					</a></li>
				</ul>
			</nav>
		</div>
	</header>