<?php

include "lib/php/functions.php";
include "parts/templates.php";
include "data/api.php";

// pretty_dump([$_GET,$_POST]);

setDefault('s',''); // search
setDefault('t','products_all'); // type
setDefault('d','DESC'); // order direction
setDefault('o','date_create'); // order by
setDefault('l','12'); // limit

// pretty_dump($_GET);


function makeSortOptions() {
   $options = [
      ["date_create","DESC","Latest Products"],
      ["date_create","ASC","Oldest Products"],
      ["price","DESC","Price High to Low"],
      ["price","ASC","Price Low to High"]
   ];
   foreach($options as [$orderby,$direction,$title]) {
      echo "
      <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['o']==$orderby && $_GET['d']==$direction ? "selected" : "").">
      $title</option>
      ";
   }
}



function makeFilterSet() {
   $options = [
      "Skates",
      "Gear",
      "Tools"
   ];
   foreach($options as $option) {
      echo "
      <a href='product_list.php?t=products_by_category&category=$option&d={$_GET['d']}&o={$_GET['o']}&l={$_GET['l']}&s={$_GET['s']}' class='filter-button inline ".($option==$_GET['category']?"active":"")."'>$option</a>
      ";
   }
}


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
   <title>Products</title>

   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

   <script src="js/jquery-3.6.0.min.js"></script>
   
   <?php include "parts/meta.php" ?>
</head>
<body>
   <?php include "parts/navbar.php" ?>


<div class="container">
<div class="grid gap">
   <div class="col-xs-12 col-md-9">
      <form action="product_list.php" method="get" class="hotdog" style="margin-top:1em">
         <input type="hidden" name="t" value="search">
         <input type="hidden" name="d" value="<?=$_GET['d']?>">
         <input type="hidden" name="o" value="<?=$_GET['o']?>">
         <input type="hidden" name="l" value="<?=$_GET['l']?>">
         <input type="search" name="s" placeholder="Search" value="<?= $_GET['s'] ?>">
      </form>
   </div>

   <div class="col-xs-12 col-md-3">
         <form action="product_list.php" method="get" style="margin-top:.5em">
            <input type="hidden" name="t" value="search">
            <input type="hidden" name="s" value="<?=$_GET['s']?>">
            <input type="hidden" name="d" value="<?=$_GET['d']?>">
            <input type="hidden" name="o" value="<?=$_GET['o']?>">
            <input type="hidden" name="l" value="<?=$_GET['l']?>">
            <div class="form-select">
               <select onChange="checkSort(this)">
                  <? makeSortOptions() ?>
               </select>
            </div>
         </form>
   </div>
</div>
<div class="display-flex flex-align-center">
   <div class="display-inline-flex">
      <? makeFilterSet() ?>
   </div>
</div>
</div>



<div class="container">
      <h2>Products</h2>

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
</div>

   <script src="lib/js/product.js"></script>
</body>
</html>