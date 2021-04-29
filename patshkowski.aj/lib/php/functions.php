<?php

session_start();




function pretty_dump($data) {
   echo "<pre>",var_dump($data),"</pre>";
}


function file_get_json($filename) {
   $data_string = file_get_contents($filename);
   return json_decode($data_string);
}

function file_put_json($filename) {
	$data_string = file_put_contents($filename);
	return json_encode($data_string);
}




/* DATABASE CONNECTION */

function MYSQLIConn() {
	include_once "data/auth.php";

	$conn = new mysqli(...MYSQLIAuth()); /*look up spread operator*/

	if($conn->connect_errno)
		die($conn->connect_error);

	$conn->set_charset('utf8');

	return $conn;

}


/* DATABASE CALL */
function MYSQLIQuery($sql) {
   $conn = MYSQLIConn();

   $a =[];

   $result = $conn->query($sql);

   while($row = $result->fetch_object()) {
      $a[] = $row;
   }
   
   return $a;
}



// CART FUNCTIONS

function getCart() {
	return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}

function setCart($a) {
	$_SESSION['cart'] = $a;
}


function resetCart() { setCart([]); }


function addToCart($id,$amount) {
	$cart = getCart();

	$p = (object) ["id"=>$id,"amount",$amount];

	$cart[] = $p;

	setCart($cart);
}










