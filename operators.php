

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