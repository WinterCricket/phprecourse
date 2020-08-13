

<?php

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

$age = 21;
if ( $age == 21 ) {
	echo "You are $age years old.";
} else {
	echo "You are not $age years old.";
}

  ?>

  <h1>String Operators</h1>

  <?php
$x = "Hello";
$y = " World!";
echo $x . $y; // Outputs: Hello World!

$x .= $y;
echo $x; // Outputs: Hello World!
echo '<br>';
// Reset the $x and $y variables
$x = "Hello";
$y = " World!";
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
$name3 = null;
echo $namechk = $name3 ?? '$name3 variable not set';
?>