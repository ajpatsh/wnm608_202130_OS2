<?php

include "lib/php/functions.php";

// pretty_dump($_POST);

$product = MYSQLIQuery("SELECT * FROM `products` WHERE `id`=".$_POST['id'])[0];

pretty_dump($product);

addToCart($_POST['id']*1,$_POST['amount']*1,$_POST['skate_size']);

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Added To Cart</title>

   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>
   

   <div class="container">
      <div class="card soft">
         <?php

         if(!isset($_POST['id'])) {
            echo "Please add product to cart";
         } else {
            ?>
            <h2><?= $_POST['amount'] ?> <?= $product->title ?> Added To Your Cart</h2>

            <div class="display-flex">
               <div class="flex-none"><a class="form-button" href="product_cart.php">View Cart</a></div>
               <div class="flex-stretch"></div>
               <div class="flex-none"><a class="form-button" href="product_list.php">Continue Shopping</a></div>
            </div>
            <?
         }
         ?>
      </div>
   </div>
</body>
</html>