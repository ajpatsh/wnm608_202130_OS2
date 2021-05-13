<?php

@include_once "../lib/php/functions.php";

function makeStatement($type) {
	switch($type) {
    	case "products_all":
        	return MYSQLIQuery("
	            SELECT *
	            FROM `products`
	            ORDER BY `date_create` DESC
	            LIMIT 12
	         ");
         		break;

    	case "search":
        	return MYSQLIQuery("
	            SELECT *
	            FROM `products`
	            WHERE
	               `title` LIKE '%{$_GET['s']}%'
	            ORDER BY `date_create` DESC
	            LIMIT 12
	         ");
	         break;

      default: return ["error"=>"No Matched Type"];
   }
}