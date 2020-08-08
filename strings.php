<?php  

$stringexample = 'Hello World';
	// echo str_split($stringexample);
$proxy = str_ireplace("world", "London", $stringexample);
$reborn = str_split(str_shuffle($proxy));

echo join($reborn);

echo str_word_count($stringexample);

echo strlen($reborn);


	// echo str_shuffle($stringexample);
  // echo $stringexample . "<br>";
  // echo "Hello World Again <br>";
  // echo 'I\'m Back' . "<br>";

  // echo "I'm Back <br>";