<?php

include "lib/php/functions.php";
include "parts/templates.php";

$cart = getCartItems();

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Checkout</title>

   <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <div class="container">
      <div class="grid gap">
         <div class="col-xs-12 col-md-8">
            <div class="card soft">
               <a href="#" onclick="history.back();return false;">Back</a>
               <h2>This is a form</h2>

               <div>address, credit card</div>
            </div>
         </div>
         <div class="col-xs-12 col-md-4">
            <div class="card soft flat">
            <?
            echo array_reduce($cart,'makeCondensedCartList');
            echo cartTotals();
            ?>

               <div class="card-section">
                  <button class="btn rainbow round"><a href="confirmation.php">Purchase</a></button>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</html>















