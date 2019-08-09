<?php
$bar = 'hi';

$foo = &$bar;
$arr = array(1, 2);
//references inside arrays are potentially dangerous though
$array = array(&$foo, &$arr[0]);

function incrementArray(&$arr){
	foreach($arr as &$val){
		$val++;
	}
}

function &getArray(){
	static $arr = [1, 2, 3];
	return $arr;
}

incrementArray(getArray());
var_dump(getArray());

// returning by reference is useful when you want to use a function to find to which variable a reference
// should be bound. do not use it to increase performance. the engine will do it automatically

function parent(&$var){
	echo $var;
	$var = "updated";
}

function &child(){
	static $a = "test";
	return $a;
}

parent(child());	// returns "test"
parent(child());	// returns "updated;

// return by reference is not only limited to function references. you also have the ability to 
// implicitly call the function:

function &myFunction(){
	static $a = 'foo';
	return $a;
}

$bar = &myFunction();
$bar = "updated";
echo myFunction();

// notes: you are required to specify a reference(&) in both places you intend on using it
// for example, your function definition (function &myFunction(){}) and in the calling reference
// function callFunction(&$variable){} or (&myFunction();)
// you can only return a variable by reference, not an expression
// use them sparingly

// passing by reference example
$arr = array(1, 2, 3, 4, 5);
foreach($arr as &$num){	//note the usage of the reference (&)
	$num++;		// note that this will increment each element of the $arr array
}
print_r($arr);
// at the end of the loop, $num still holds a reference to the last element of the array
// so by unsetting it, we are preventing from continually affecting that array element
// when interacting with the array
unset($num);	

// passing by reference is handy in functions:
$var = 5;
function add(&$value){
	$value++;
}
add($var);
print_r("var: " . $var);


?>
