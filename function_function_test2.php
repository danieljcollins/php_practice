<?php
function add($a, $b){
	return $a + $b;
}

// we're calling the function and putting the result into a variable
// but this time we are mapping the function/method call

$funcName = 'add'; //this is referring to the function declared above of course

$result = $funcName(1,2);

echo $result;
?>
