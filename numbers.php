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