<?php

include "lib/php/functions.php";

$product = MYSQLIQuery("
   SELECT *
   FROM `products`
   WHERE `id` = {$_GET['id']}
")[0];

$thumbs = explode(",", $product->image_other);

$thumb_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='images/store/$o'>";
});


echo $_SESSION['num'];

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product List</title>

   <script src="js/jquery-3.6.0.min.js"></script>
   
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>
   

   <div class="container">
      <div class="grid gap product-display">
         <div class="col-xs-12 col-md-7">
            <div class="card soft">
               <div class="image-main">
                  <img src="images/store/<?= $product->image_main ?>" />
               </div>
               <div class="image-thumbs"><?= $thumb_elements ?></div>
            </div>
         </div>
         <div class="col-xs-12 col-md-5">
            <form class="card soft flat" action="product_added_to_cart.php" method="post">
               <input type="hidden" name="id" value="<?= $product->id ?>">
               <div class="card-section">
                  <div class="product-title"><?= $product->title ?></div>
                  <div class="product-price">&dollar;<?= $product->price ?></div>


                  <div class="radio-colors">
                     <input type="radio" name ="select-color" id="select-color-black" value="black">
                     <label for="select-color-black"></label>
                     <input type="radio" name ="select-color" id="select-color-pink" value="pink">
                     <label for="select-color-pink"></label>
                     <input type="radio" name ="select-color" id="select-color-purple" value="purple">
                     <label for="select-color-purple"></label>
                     <input type="radio" name ="select-color" id="select-color-teal" value="teal">
                     <label for="select-color-teal"></label>
                  </div>
                  <div class="value"></div>




               </div>
               <div class="card-section">
                  <label class="form-label">Amount</label>
                  <div class="form-select">
                     <select name="amount">
                        <!-- option[value='$']*10>{$} -->
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                     </select>
                  </div>
               </div>
               <div class="card-section">
                  <button type="submit" class="form-button sell">Add To Cart</button>
               </div>
            </form>
            <div class="card soft">
               <?= $product->description ?>
            </div>
         </div>
      </div>
   </div>





<script src="js/script.js"></script>











</body>
</html>