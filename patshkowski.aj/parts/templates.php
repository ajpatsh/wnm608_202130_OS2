<?php

function makeProductList($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-sm-6 col-md-4">
   <a href="product_item.php?id=$o->id" class="product">
      <div class="product-image">
         <img src="$o->image_thumb" alt=""> /* MAKE SURE TO ADD CORRECT IMAGE LOCATION */
      </div>
      <figcaption class="product-caption">
         <div class="product-price">&dollar;$o->price</div>
         <div class="product-title">$o->name</div>
      </figcaption>
   </a>
</div>
HTML;
}