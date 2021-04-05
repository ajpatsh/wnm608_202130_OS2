<? 

// phpinfo();
// broken

echo "<h1>Hello World</h1>"; //this is a STRING LITERAL
echo "Goodbye World\n\t";

$a = 5; //$ symbol means THIS is a variable (instead of var or let)
// a is a variable, it is not a standard variable, we made it up
// = is the assignment operator
// 5 is a LITERAL NUMBER
// in this instance, a is a variable number

// String Interpolation
echo "<div>I have $a things</div>\n"; //works
echo '<div>I have $a things</div>'; //doesn't work
// pay attention to quotes - can't put double quotes inside of each other
// Hamilton tries to use single quotes on single-terms like $name='Hamilton'

// VALUE TYPES

// Number
// javascript and php is a loosely typed language (in contrast, C is a lot more specific)
// Integer (whole number)
$b = 15;
// Float (decimal)
$b = 0.576;
// PHP can use both integers and floats
$b = 10;
// PHP typically runs from the top to the bottom, so as of right now b's value is 15


// STRING
$name = "Yerdude";
$name = 'Hamilton';


// BOOLEAN (True/1/On and False/0/Off)
$isOn = true;



// FUNCTION, CLASS, OBJECT - will get into later




// MATH
echo "<div>5 + 2 - 3</div>";

// Order of operation: PEMDAS is common. It stands for Parentheses, Exponents, Multiplication/Division, Addition/Subtraction

echo 5 + 2 * 3;
echo (5 + 2) * 3;



// Concatenation
echo "<div>b + a = c</div>";
echo "<div>$b + $a = ($b+$a)</div>";
echo "<div>$b + $a = " . ($b+$a) . "</div>";
// . is the Concatenation operator



?>



<hr>
<div>This is my name</div>
<div>
	<?php  


	$firstname = 'AJ';
	$lastname = 'Patshkowski';
	$fullname = "$firstname $lastname";

echo $fullname;
?>. What's yours?
</div>

<hr>

<?php  

// Superglobal - high level things that tell you about your environment https://www.php.net/manual/en/language.variables.superglobals.php
echo "Name is: ".$_GET['name'];
echo "<div><a href='?name=Bob'>Bob</a></div>";
echo "<div><a href='?name=Grace'>Grace</a></div>";


echo "<div><a href='?name={$_GET['name']}&type=h1'>H1</a></div>";
echo "<div><a href='?name={$_GET['name']}&type=textarea'>Textarea</a></div>";
echo "Name is: <{$_GET['type']}>{$_GET['name']}</{$_GET['type']}>";



?>


<hr>

<?php 

// Arrays
$colors = array("red","green","blue");
$colors = ["red","green","blue"]; //JSON shorthand for writing an array
// In an array, things are numbered starting at 0 and going up one whole # at a time

echo $colors[0];

echo "

	<br>$colors[0]
	<br>$colors[1]
	<br>$colors[2]
	
";

echo count($colors);


?>

<!-- Ham calls this a quick echo -->
<div style="color:<?= $colors[1]?>">   
	This text is green
</div>



<hr>

<?php

// Associative Array - String-indexed array
$colorsAssoc = [
	"red" => "#f00",
	"green" => "#0f0",
	"blue" => "#00f"
];

echo $colorsAssoc['red'];

// Array - an array of items that have a numbered index
// Objects - treated like arrays with String indexes
// String-indexed Array - has no order, Numbered-indexed Array - is in order of the numbers, and an Object

?>



<hr>


<?php

// Casting - take a variable of one value type and cast it to the another value type
// You have the string 5 but you want it to be the number 5, or vice versa - you can cast

$c = "$a";
$d = $c*1;
// interesting thing with multiplication, when you try to multiply a string times a number, php will make an attempt to do that multiplication as if the string was a number - if, however, you try to do addition, that will fail
// There are other castings (maybe look them up to make this make more sense)



// Casting to a for-real-reals object

// Array, Associative Array, Object - cast to an object by using an associative array

// Cast $colorsAssoc to object
$colorsObject = (object)$colorsAssoc;

// echo $colorsObject; objects are complex pieces of data that can't be echoed out


echo "<hr>";



// Array Index Notation
echo $colors[0]."<br>";
echo $colorsAssoc['red']."<br>";
echo $colorsAssoc[$colors[0]]."<br>";
// Using variable values to select other things' variable values





// Object Property Notation - in Javascript, it used a period or dot . - but in php:
echo $colorsObject->red."<br>";
echo $colorsObject->{$colors[0]}."<br>";
// When ASSIGNING a value, use the thick arrow =>, when SELECTING a value, use the thin arrow ->



?>


<hr>


<?php

// print_r means print readable - printed out in a readable way - could also use var_dump or var_export, they show up differently in the html code
print_r($colors);
echo "<hr>";
var_dump($colorsAssoc);
// These are for debugging - a user would never need to see this
// Because I don't have the console, I must know how to var_dump - export data to myself so I can see it and understand it

echo "<pre>",var_dump($colorsObject), "</pre>";
// pre-formatted element - all of the original, html white-spacing is acknowledged within pre element - normally formatting within html text is not acknowledged



// FUNCTIONS - var_dump, count, phpinfo

// CUSTOM FUNCTIONS
function pretty_dump($data) {
	echo "<pre>",var_dump($data), "</pre>";
}

pretty_dump($colors);


?>






<!-- this php function <? phpinfo(); ?> tells me (the developer) everything about the php server I am using


Parse error: syntax error - typically missing something or spelled something wrong

Just because there was a problem on a line doesn't mean it's ON that line - it's typically right after or a bit before

In Javascript, semicolons were optional - In PHP semicolons are NOT optional, they are REQUIRED 


Error: Everything is broken, please fix immediately

Warning: I don't like what you did and I'm going to tell you about it 

You can write HTML into PHP files

String: a sequence of characters, either as a literal constant or as some kind of variable

$ symbol means THIS is a variable (instead of var or let)

-->