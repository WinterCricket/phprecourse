<?php
$x = 100; // decimal number
var_dump($x);
echo "<br>";

$y = -100; // a negative number
var_dump($y);
echo "<br>";


$var = "PHP Powers almost 80% of the Modern Web.  ";
echo $var;
echo "<br>";

$z = 50.35;
var_dump($z);

echo "<br>";
// Assign the value FALSE to a variable
$notTrue = FALSE;
var_dump($notTrue);

echo "<br>";

// Assign the value TRUE to a variable
$isTrue = TRUE;
var_dump($isTrue);

echo "<br>";

$os = array("Linux", "Windows", "MacOS");
var_dump($os);

echo "<br>";

// Class definition
class welcome{
    // public property
    public $txt = "Hello";

    // methods
    function display_txt(){
        return $this->txt;
    }
}

// Create object from class
$msg = new welcome;
var_dump($msg);
