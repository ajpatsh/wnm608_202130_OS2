<?php

include "../lib/php/functions.php";

$filename = "users.json";
$users = file_get_json("users.json");

// pretty_dump($_SERVER);
// pretty_dump([$_GET,$_POST]);
// pretty_dump($GLOBALS);




$empty_object = (object) [
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[]
];




switch(@$_GET['crud']) {
   case 'update':
      $users[$_GET['id']]->name = $_POST['user-name'];
      $users[$_GET['id']]->type = $_POST['user-type'];
      $users[$_GET['id']]->email = $_POST['user-email'];
      $users[$_GET['id']]->classes = explode(", ",$_POST['user-classes']);

      file_put_contents($filename,json_encode($users));

      header("location:{$_SERVER['PHP_SELF']}?id=".$_GET['id']);
      break;
   case 'create':
      $empty_object->name = $_POST['user-name'];
      $empty_object->type = $_POST['user-type'];
      $empty_object->email = $_POST['user-email'];
      $empty_object->classes = explode(", ",$_POST['user-classes']);

      $id = count($users);

      // array_push()
      $users[] = $empty_object;

      file_put_contents($filename,json_encode($users));

      header("location:{$_SERVER['PHP_SELF']}?id=$id");
      break;
   case 'delete':
      array_splice($users,$_GET['id'],1);

      file_put_contents($filename,json_encode($users));

      header("location:{$_SERVER['PHP_SELF']}");
      break;
}







function showUserPage($user) {

$id = $_GET['id'];
$classes = implode(", ", $user->classes);
$addoredit = $id=="new" ? 'Add' : 'Edit';
$createorupdate = $id=="new" ? 'create' : 'update';

echo <<<HTML
<div class="grid gap">
<div class="col-xs-12">
<div class="card soft">
<nav class="nav pills display-flex">
   <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
   <div class="flex-stretch"></div>
   <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$id&crud=delete">Delete</a></div>
</nav>
</div>
</div>
<div class="col-xs-12 col-md-4">
   <div class="card soft">
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
</div>
<form class="col-xs-12 col-md-8" method="post" action="{$_SERVER['PHP_SELF']}?id=$id&crud=$createorupdate">
   <div class="card soft">
      <h2>$addoredit User</h2>
      <input type="hidden" name="id" value="$id">
      <div class="form-control">
         <label class="form-label" for="user-name">Name</label>
         <input class="form-input"type="text" id="user-name" name="user-name" value="$user->name">
      </div>
      <div class="form-control">
         <label class="form-label" for="user-type">Type</label>
         <input class="form-input"type="text" id="user-type" name="user-type" value="$user->type">
      </div>
      <div class="form-control">
         <label class="form-label" for="user-email">Email</label>
         <input class="form-input"type="email" id="user-email" name="user-email" value="$user->email">
      </div>
      <div class="form-control">
         <label class="form-label" for="user-classes">Classes</label>
         <input class="form-input"type="text" id="user-classes" name="user-classes" value="$classes">
      </div>
      <div class="form-control">
         <input class="form-button" type="submit" value="Submit">
      </div>
   </div>
</form>
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
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">
      <div class="card soft">

         <?php
         if(isset($_GET['id'])) {
            // ternary, conditional
            showUserPage(
               $_GET['id']=="new" ?
               $empty_object :
               $users[$_GET['id']]
            );
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