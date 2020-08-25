

<?php

include "../studiowebPHP/style.php";

//arithmetic operators
?>
<h1>Arithmetic Operators:</h1>

<?php

$x = 50;
$y = 6;
echo $x + $y . '<br>'; // outputs: 56
echo $x - $y . '<br>'; // outputs: 44
echo $x * $y . '<br>'; // outputs: 300
echo $x / $y . '<br>'; // outputs: 8.3333333333333
echo $x % $y . '<br>'; // outputs: 2
?>

<h1>Assignment Operators:</h1>


<?php  

$x = 50;
$y = 6;

echo $x . "<br>";

$x = 50;
$y = 6;

$x += $y;

echo $x . "<br>";
$x = 50;
$y = 6;

 $x -= $y;

echo $x . "<br>";
$x = 50;
$y = 6;

$x /= $y;


echo $x . "<br>";
$x = 50;
$y = 6;

$x *= $y;

echo $x ;
?>
<h1>Comparison Operators:</h1>

<?php  

$x = 70;
$y = 60;
$z = "70";

var_dump( $x == $z );
echo "<br>";  // Outputs: boolean true
var_dump( $x === $z );
echo "<br>"; // Outputs: boolean false
var_dump( $x != $y );
echo "<br>";  // Outputs: boolean true
var_dump( $x !== $z );
echo "<br>"; // Outputs: boolean true
var_dump( $x < $y );
echo "<br>";   // Outputs: boolean false
var_dump( $x > $y );
echo "<br>";   // Outputs: boolean true
var_dump( $x <= $y );
echo "<br>";  // Outputs: boolean false
var_dump( $x >= $y );
echo "<br>";  // Outputs: bool
// real world example
$age = 20;
if($age >= 21){
	echo "<h2>You are considered an adult and can do adult type disgusting activities, such as destroy the world.</h2>";
}else {
	echo "<h2>You're a pipsqueek, a fledgling, and can't do all the stupid, self-justified nonsense adults get up to.</h2>";
}

?>
<!-- //The increment/decrement operators are used to increment/decrement a variable’s value
 -->
<h1>Increment/decrement operators</h1>

<?php 
$a = 10;
echo ++ $a; // Outputs: 11
echo '<br>';
echo $a;   // Outputs: 11
echo '<br>';

$b = 10;
echo $b ++; // Outputs: 10
echo '<br>';
echo $b;   // Outputs: 11
echo '<br>';

$c = 10;
echo -- $c; // Outputs: 9
echo '<br>';
echo $c;   // Outputs: 9
echo '<br>';

$d = 10;
echo $d --; // Outputs: 10
echo '<br>';
echo $d;   // Outputs: 9
echo '<br>';

 ?>

 <h1>Logical Operators</h1>

 <?php
$x = 60;
$y = 40;

if ($x == 60 and $y == 40) {
  echo '<h3>$x is equal to 60 and $y is equal to 40.</h3>' ;
} else {
  echo "<h3>Sorry, they both need to match </h3>";
}

if ($x == 60 && $y == 2) {
  echo "<h3>Both are true </h3>";
} else {
  echo "<h3>Both need to be true. </h3>";
}

if ($x == 60 or $y == 30) {
  echo '<h3>$x is equal to 60 or $y is equal to 30.</h3>' ;
}

if ($x == 60 || $y == 30) {
  echo '<h3>$x is equal to 60 or $y is equal to 30.</h3>' ;
}

if ($x == 60 xor $y == 40) {
    echo "<h3>True if either is true but not both.</h3>";
} else {
	echo "<h3>They can't both be true.</h3>";
}

if ($x !== 55) {
  echo '<h3>True if $x is not true</h3>';
}
?>

  <h1>String Operators</h1>

  <?php
$x = " Hello ";
$y = "  World! ";
echo $x . $y; // Outputs: Hello World!

$x .= $y;
echo $x; // Outputs: Hello World!

// Reset the $x and $y variables
$x = " Hello ";
$y = " World! ";
echo $x .= $y; // Outputs: Hello World!
?>

<h1>Array Operators</h1>

<?php
$x = array( "a" => "Red", "b" => "Green", "c" => "Blue" );
$y = array( "u" => "Yellow", "v" => "Orange", "w" => "Pink" );
$z = $x + $y; // Union of $x and $y
var_dump( $z );
echo '<br>';
var_dump( $x == $y );   // Outputs: boolean false
echo '<br>';
var_dump( $x === $y );  // Outputs: boolean false
echo '<br>';
var_dump( $x != $y );   // Outputs: boolean true
echo '<br>';
var_dump( $x <> $y );   // Outputs: boolean true
var_dump( $x !== $y );  // Outputs: boolean true

?>
<h1>Spaceship Operator New in PHP 7</h1>
<?php
// Comparing Integers
echo 1 <=> 1; // Outputs: 0
echo '<br>';
echo 1 <=> 2; // Outputs: -1
echo '<br>';
echo 2 <=> 1; // Outputs: 1
echo '<br>';

// Comparing Floats
echo 1.5 <=> 1.5; // Outputs: 0
echo '<br>';
echo 1.5 <=> 2.5; // Outputs: -1
echo '<br>';
echo 2.5 <=> 1.5; // Outputs: 1
echo '<br>';

// Comparing Strings
echo "x" <=> "x"; // Outputs: 0
echo '<br>';
echo "x" <=> "y"; // Outputs: -1
echo '<br>';
echo "y" <=> "x"; // Outputs: 1
?>
<h2>My experiment</h2>
<?php 
echo "3" <=> "4";//seems to go by number not spelling
echo '<br>';
echo "4" <=> "3";
 ?> 

<h1>Conditional Assignment Operators</h1>

<h2>Ternary operator example</h2>
<?php

$var = 5;
// Ternary operator example
$var2 = $var > 2 ? 'yes' : 'no'; // returns yes
echo $var2;
?>
<h2>Null Coalescing and then Ternary Operator</h2>
<?php
// Fetches the value of $_GET['user']
// and returns 'nobody'if it doesn't exist.

// Null Coalescing example

echo $username = $_GET['user'] ?? 'nobody';

// This is equivalent to:
// Ternary operator example
echo $username = isset( $_GET['user'] ) ? $_GET['user'] : 'nobody';

// Coalescing can be chained: this will return the first
// defined value out of $_GET['user'], $_POST['user'], and
// 'nobody'.
echo $username = $_GET['user'] ?? $_POST['user'] ?? 'nobody';
?>

<h2>if isset else example</h2>

<?php
 $name1 = 'Jay';
if ( isset( $name1 ) ) {
	echo $name1;
} else {
	echo '$name1 variable not set';
}
?>

<h2>Using the ternary operator to achieve the same result</h2>

<?php
$name2 = 'Jaysoon';
echo $namecheck = isset( $name2 ) ? $name2 : '$name2 variable not set';
?>

<h2>Use Null coalescing to achieve the same result</h2>

<?php
$name3 = "<h3>Jayjay</h3>";
// $name3 = NULL;
$namecheck = $name3 ?? '<h3>$name3 variable not set</h3>';
var_dump($namecheck);

?>