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
               <h2>Shipping Information</h2>

               <div class="grid gap">
                  <div class="col-xs-12 col-md-6">
                     
                     <div class="form-control">
                        <label for="example1" class="form-label">First Name</label>
                        <input id="example1" type="text" placeholder="First Name" class="form-input">
                     </div>

                  </div>
                  <div class="col-xs-12 col-md-6">
                     <div class="form-control">
                        <label for="example1" class="form-label">Last Name</label>
                        <input id="example1" type="text" placeholder="Last Name" class="form-input">
                     </div>
                  </div>

                  <div class="col-xs-12">
                     <div class="form-control">
                        <label for="example1" class="form-label">Address 1</label>
                        <input id="example1" type="text" placeholder="1234 Skating St" class="form-input">
                     </div>
                     <div class="form-control">
                        <label for="example1" class="form-label">Address 2</label>
                        <input id="example1" type="text" placeholder="Apt 123" class="form-input">
                     </div>
                  </div>

                  <div class="col-xs-12 col-md-4">
                     <div class="form-control">
                        <label for="example1" class="form-label">City</label>
                        <input id="example1" type="text" placeholder="City" class="form-input">
                     </div>
                  </div>
                  <div class="col-xs-12 col-md-4">
                     <div class="form-control">
                        <label for="example1" class="form-label">State</label>
                        <input id="example1" type="text" placeholder="State" class="form-input">
                     </div>
                  </div>
                  <div class="col-xs-12 col-md-4">
                     <div class="form-control">
                        <label for="example1" class="form-label">Zip Code</label>
                        <input id="example1" type="text" placeholder="Zip Code" class="form-input">
                     </div>
                  </div>
               </div>


               <div class="grid gap">

               <h2>Billing Information</h2>

                  <div class="col-xs-12">
                     <div class="form-control">
                        <label for="example1" class="form-label">Credit Card Number</label>
                        <input id="example1" type="text" placeholder="1234 5678 1234 5678" class="form-input">
                     </div>
                  </div>
                  
                  <div class="col-xs-12 col-md-6"> 
                     <div class="form-control">
                        <label for="example1" class="form-label">First Name</label>
                        <input id="example1" type="text" placeholder="First Name" class="form-input">
                     </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <div class="form-control">
                        <label for="example1" class="form-label">Last Name</label>
                        <input id="example1" type="text" placeholder="Last Name" class="form-input">
                     </div>
                  </div>

                  <div class="col-xs-12 col-md-4">
                     <div class="form-select-credit">
                        <label for="example1" class="form-label">Expiration Month</label>
                        <select>
                           <option value="January">January</option>
                           <option value="February">February</option>
                           <option value="March">March</option>
                           <option value="April">April</option>
                           <option value="May">May</option>
                           <option value="June">June</option>
                           <option value="July">July</option>
                           <option value="August">August</option>
                           <option value="September">September</option>
                           <option value="October">October</option>
                           <option value="November">November</option>
                           <option value="December">December</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-xs-12 col-md-4">
                     <div class="form-select-credit">
                        <label for="example1" class="form-label">Expiration Year</label>
                        <select>
                           <option value="2027">2027</option>
                           <option value="2026">2026</option>
                           <option value="2025">2025</option>
                           <option value="2024">2024</option>
                           <option value="2023">2023</option>
                           <option value="2022">2022</option>
                           <option value="2021">2021</option>
                        </select>
                     </div>
                  </div>
                  
                  <div class="col-xs-12 col-md-4">
                     <div class="form-control">
                        <label for="example1" class="form-label">Zip Code</label>
                        <input id="example1" type="text" placeholder="Zip Code" class="form-input">
                     </div>
                  </div>
                  </div>
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


   </div>
</body>
</html>















