<?php
$i = 837;
var_dump(is_int($i));

$f = 100.67;
var_dump(is_int($f));

echo "<br>";

$i = 6473829290;
echo number_format($i);

echo "<br>";

//floats my noodling with conditionals, too

$x = 5.65;
$callit = is_float($x);
if($callit != 1){
	echo "go away now";
}
echo "yessum!";

echo "<br>";

//test/conditional checks for numberical string and integer

$test1 = '12345';
$test2 = 12345;

if ( is_int($test1) ) {
  echo '$test1 is an Integer <br>';
} elseif ( is_string($test1)) {
  echo '$test1 is a String <br>';
}

if ( is_int($test2) ) {
  echo '$test2 is a Integer';
}