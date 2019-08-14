<?php

// without closures:
$externalVariable = "Hello";
$myFunction = function(){
	var_dump($externalVariable);
};

$myFunction();
echo '<br>';

//with closures
$myFunction = function() use($externalVariable){
	var_dump($externalVariable);
};

$myFunction();
echo '<br>';

// big note: when variables outside of scope to anonymous functions, 
// the value is dictated by what the value was when the closure was 
// defined, not at run-time. to avoid this as a potential issue, pass 
// the variable by reference when declaring the closure

// using closures as parameters when a callback is expected
$uppercase = function($string){
	return strtoupper($string);
};

$message = ['Hello World!', 'Hello Wisconsin!', 'Hello Nurse!'];
$result = array_map($uppercase, $message);

print_r($result);

echo '<br>';

(function(){
	echo 'Self-executing?!';
})();

// for php 5.x versions:
call_user_func(function ($name){
	echo "Hello $name!";
}, 'Dan');



?>
