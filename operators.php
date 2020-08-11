

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