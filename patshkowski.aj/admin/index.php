<?php

include "../lib/php/functions.php";
include "../data/api.php";
include "../data/auth.php";

// pretty_dump($_SERVER);
// pretty_dump([$_GET,$_POST]);

$products = makeStatement("products_admin_all");

//pretty_dump($products);



$empty_object = (object) [
   "title"=>"",
   "color"=>"",
   "skate_size"=>"",
   "size"=>"",
   "price"=>"",
   "image_main"=>"",
   "image_other"=>"",
   "image_thumb"=>"",
   "description"=>"",
   "category"=>"",
];



switch(@$_GET['crud']) {
   case 'update':
      makeStatement("product_update");
      header("location:{$_SERVER['PHP_SELF']}?id=".$_GET['id']);
      break;
   case 'create':
      $result = makeStatement("product_insert");
      header("location:{$_SERVER['PHP_SELF']}?id=".$result->insert_id);
      break;
   case 'delete':
      makeStatement("product_delete");
      header("location:{$_SERVER['PHP_SELF']}");
      break;
}





function productListItem($r,$product) {
return $r.<<<HTML
<div class="card-section">
   <div class="display-flex">
      <div class="flex-none image-thumbs">
         <img src="images/store/$product->image_thumb">
      </div>
      <div class="flex-stretch">$product->title</div>  
      <div class="flex-none">
         <a href="{$_SERVER['PHP_SELF']}?id=$product->id" class="form-button">Edit</a>
         <a href="product_item.php?id=$product->id" class="form-button">Visit</a>
      </div>  
   </div>
</div>
HTML;
}


function showProductPage($product) {

$id = $_GET['id'];
$thumbs = explode(",", $product->image_main);
$thumb_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='/images/store/$o'>";
});
$addoredit = $id=="new" ? 'Add' : 'Edit';
$createorupdate = $id=="new" ? 'create' : 'update';
$showvisitlink = $id!="new" ? "<div><a href='product_item.php?id=$id' class='form-button'>Visit</a></div>" : "";

echo <<<HTML
<div class="grid gap">
<div class="col-xs-12">
<div class="card soft">
<nav class="nav pills display-flex">
   <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}"><img src="images/arrow-left.svg" class="icon" style="font-size:1.5em"></a></div>
   <div class="flex-stretch"></div>
   <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$id&crud=delete"><img src="images/trash.svg" class="icon" style="font-size:1.5em"></a></div>
</nav>
</div>
</div>
<div class="col-xs-12 col-md-4">
   <div class="card soft">
   
      <h2>$product->title</h2>
      <div>
         <strong>Price</strong>
         <div>&dollar;$product->price</div>
      </div>
      <div>
         <strong>Color</strong>
         <div>$product->color</div>
      </div>
      <div>
         <strong>Skate Size</strong>
         <div>$product->skate_size</div>
      </div>
      <div>
         <strong>Size</strong>
         <div>$product->size</div>
      </div>
      <div>
         <strong>Image Main</strong>
         <div class="image-thumbs">
            <img src="images/store/$product->image_main">
         </div>
      </div>
      <div>
         <strong>Image Thumb</strong>
         <div class="image-thumbs">
            <img src="images/store/$product->image_thumb">
         </div>
      </div>
      <div>
         <strong>Image Other</strong>
         <div class="image-thumbs">$thumb_elements</div>
      </div>
      <div>
         <strong>Description</strong>
         <div>$product->description</div>
      </div>
      <div>
         <strong>Category</strong>
         <div>$product->category</div>
      </div>
      $showvisitlink
   </div>
</div>
<form class="col-xs-12 col-md-8" method="post" action="{$_SERVER['PHP_SELF']}?id=$id&crud=$createorupdate">
   <div class="card soft">
      <h2>$addoredit Product</h2>
      <input type="hidden" name="id" value="$id">
      <div class="form-control">
         <label class="form-label" for="product-title">Title</label>
         <input class="form-input" type="text" id="product-title" name="product-title" value="$product->title">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-price">Price</label>
         <input class="form-input" type="number" min="1" step=".01" id="product-price" name="product-price" value="$product->price">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-color">Color</label>
         <input class="form-input" type="text" id="product-color" name="product-color" value="$product->color">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-color">Skate Size</label>
         <input class="form-input" type="text" id="product-skate_size" name="product-skate_size" value="$product->skate_size">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-color">Size</label>
         <input class="form-input" type="text" id="product-size" name="product-size" value="$product->size">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-image_thumb">Image Main</label>
         <input class="form-input" type="text" id="product-image_main" name="product-image_main" value="$product->image_main">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-image_thumb">Image Thumb</label>
         <input class="form-input" type="text" id="product-image_thumb" name="product-image_thumb" value="$product->image_thumb">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-image_other">Image Other</label>
         <input class="form-input" type="text" id="product-image_other" name="product-image_other" value="$product->image_other">
      </div>
      <div class="form-control">
         <label class="form-label" for="product-description">Description</label>
         <textarea class="form-input" id="product-description" name="product-description">$product->description</textarea>
      </div>
      <div class="form-control">
         <label class="form-label" for="product-category">Category</label>
         <input class="form-input" type="text" id="product-category" name="product-category" value="$product->category">
      </div>
      
      <div class="form-control">
         <input class="form-button" type="submit" value="Submit">
      </div>
   </div>
</form>
</div>
HTML;
}





?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Administrator</title>
   <?php include "../parts/meta.php" ?>
</head>
<body>
   <header class="navbar">
      <div class="container display-flex flex-align-center">
         <div class="flex-none">
            <h1>Product Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <nav class="flex-none nav flex">
            <ul>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">

         <?php
         if(isset($_GET['id'])) {
            // ternary, conditional
            showProductPage(
               $_GET['id']=="new" ?
               $empty_object :
               getItemById($products,$_GET['id'])
            );
         } else {
         ?>

      <div class="card soft flat">
         <div class="card-section"><h2>Product List</h2></div>
         <?php

         echo array_reduce($products,'productListItem');

         ?>
      </div>
         <?php
         }
         ?>
   </div>
</body>
</html>