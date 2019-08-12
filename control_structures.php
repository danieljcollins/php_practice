<?php

$a = 10;
$b = 15;

if($a < $b){
	echo 'a is less than b' . '<br>';
}
elseif($a > $b){
	echo 'a is greater than b' . '<br>';
}
else{
	echo 'You\'ve reached the else statement.';	
}


// ternary operator
echo($a > $b) ? "a is greater than b" : "a is NOT greater than b";
echo '<br>';

// alternate form of if statement
if($a == 10):
	echo "variable a is 10.";
elseif($a == 11):
	echo "variable a is 11.";
endif;
echo '<br>';

$i = 1;
while($i < 10){
	echo $i;
	$i++;
}
echo '<br>';

$i = 0;
do{
	$i++;
	echo $i;
} while($i < 10);

// goto
goto MyLabel;
echo 'This text will be skipped, because of the jump.';

MyLabel:
echo 'Hello World';

echo '<br>';

// declare is used to set an execution directive for a block of code.
//declare(ticks = 1);

// must be first line of code in the script if you use this:
//declare(strict_types=1);	// enables strict type mode

// require is similar to include, except that it will produce a fatal error
// E_COMPILE_ERROR if it fails to find/load the file
// require 'file.php';
// include 'file.php';
// you can put values into a file and then include them later
//
// config.php contents:
// <?php
// return [
// 	'dbname => 'mydb',
// 	'user' => 'admin',
// 	'pass' => 'pass',
// 	];
//
// main.php contents
// $config = include 'config.php';
//
// that can be handy when you don't want to pollute your current scope
// with changed or added variables
//
// a note on return, it returns the program to the calling function,
// but keep in mind that if return is called from within a function,
// the execution of the current function will end (of course)
//

for($i = 1; $i < 10; $i++){
	echo $i;
}

echo '<br>';

$array = [1,2,3];
foreach($array as $value){
	echo $value;
}
echo '<br>';

//to use foreach with an object, it has to implement Iterator interface

$array = ['color' => 'red'];
foreach($array as $key => $value){
	echo $key . ': ' . $value;
}
echo '<br>';

$colour = 'red';

switch($colour){
case 'blue':
	echo 'the colour is blue';
	break;
case 'green':
	echo 'the colour is green';
	break;
case 'red':
	echo 'the colour is red';
	break;
default:
	echo 'the colour is something else';
	break;
}

echo '<br>';

// you can put expressions in the case statements
$i = 1024;
switch(true){
case($i > 10000):
	echo 'more than 10000';
	break;
case($i > 1000):
	echo 'more than 1000';
	break;
}

// the continue statement breaks out of the current loop and continues 
// on the next iteration (can be used to skip iterations selectively)
// you can also use continue 2 (or any number) to break out of two 
// levels of loop, or more if necessary.

// break is the same. can use break 2 to break out of two loops


?>
