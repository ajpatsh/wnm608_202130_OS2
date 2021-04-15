<?php

include "../lib/php/functions.php";

$users = file_get_json("users.json");

// pretty_dump($_SERVER);
// pretty_dump($_GET);
// pretty_dump($GLOBALS);







function showUserPage($user) {

$classes = implode(", ", $user->classes);

echo <<<HTML
<nav class="nav crumbs">
   <ul>
      <li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
   </ul>
</nav>


<div>
   <h2>$user->name</h2>
   <div>
      <strong>Type</strong>
      <span>$user->type</span>
   </div>
   <div>
      <strong>Email</strong>
      <span>$user->email</span>
   </div>
   <div>
      <strong>Classes</strong>
      <span>$classes</span>
   </div>
</div>

<h2>Update User Info</h2>

<div class="form-control">
	<label for="example1" class="form-label">First Name</label>
	<input id="example1" type="text" placeholder="$user->firstname" class="form-input">
</div>
<div class="form-control">
	<label for="example1" class="form-label">Last Name</label>
	<input id="example1" type="text" placeholder="$user->lastname" class="form-input">
</div>
<div class="form-control">
	<label for="example1" class="form-label">Email</label>
	<input id="example1" type="text" placeholder="$user->email" class="form-input">
</div>
<div class="form-control">
	<label for="example1" class="form-label">Classes</label>
	<input id="example1" type="text" placeholder="$classes" class="form-input">
</div>

<input type="submit" class="form-button" value="Submit">



HTML;
}





?><!DOCTYPE html>
<html lang="en">
<head>
   <title>User Administrator</title>
   <?php include "../parts/meta.php" ?>
</head>
<body>
   <header class="navbar">
      <div class="container display-flex flex-align-center">
         <div class="flex-none">
            <h1>User Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <nav class="flex-none nav flex">
            <ul>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">
      <div class="card soft">

         <?php
         if(isset($_GET['id'])) {
            showUserPage($users[$_GET['id']]);
         } else {
         ?>

         <h2>User List</h2>

         <ul>
         <?php

         for($i=0; $i<count($users); $i++) {
            echo "<li>
            <a href='{$_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->name}</a>
            </li>";
         }

         ?>
         </ul>
         <?php
         } 
         ?>
      </div>
   </div>
</body>
</html>