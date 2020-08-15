<h1>Pseudo code of array structure</h1>

array(
    key  => value,
    key2 => value2,
    key3 => value3,
)

<h1>Types of Arrays in PHP</h1>

<h2>Indexed Array in PHP</h2>
<p>an array with a numeric key</p>

<?php
$names = array( "Joel", "Joyce", "John", "Jane", "Jill" );

$names2 = [ "Joel", "Joyce", "John", "Jane", "Jill" ];

$names3[0] = "Joel";
$names3[1] = "Joyce";
$names3[2] = "John";
$names3[3] = "Jane";
$names3[4] = "Jill";

echo "There are 5 names in the names3 array() which are $names3[0], $names3[1], $names3[2], $names3[3], and $names3[4]";
?>

<h2>Associative Array in PHP</h2>
<p>an array with strings as keys</p>


<h2>Multidimensional Array in PHP</h2>
<p>an array with nested arrays</p>