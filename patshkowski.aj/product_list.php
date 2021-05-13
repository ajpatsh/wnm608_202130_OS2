<?php

include "lib/php/functions.php";
include "parts/templates.php";
include "data/api.php";

// pretty_dump([$_GET,$_POST]);

$_SESSION['num'] = isset($_SESSION['num']) ?
	$_SESSION['num']+1 :
	0;

$search = isset($_GET['s']) ? $_GET['s'] : "";


if(isset($_GET['t'])) {
   $result = makeStatement($_GET['t']);
   $products = isset($result['error']) ? [] : $result;
} else {
   $result = makeStatement("products_all");
   $products = isset($result['error']) ? [] : $result;
}

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product List</title>
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>

   <div class="container">

      <form action="product_list.php" method="get" class="hotdog" style="margin-top:1em">
         <input type="hidden" name="t" value="search">
         <input type="search" name="s" placeholder="Search" value="<?= $search ?>">
      </form>

      <h2>Product List</h2>

      <div class="grid gap product-list">
      <?php

      if(empty($products)) {
         echo "No products found.";
      } else {
         echo array_reduce($products,'makeProductList');
      }

      ?>
      </div>
   </div>
</body>
</html>