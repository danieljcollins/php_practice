<?php

class MyClass{
	public function myCallBackMethod(){
		echo "You called the method";

	}
}

$obj = new MyClass();
call_user_func([$obj, 'myCallBackMethod']);

// callbacks can be denoted by callable type hint as of php 5.4
$callable = function(){
	return 'value';
};

function call_something(callable $fn){
	call_user_func($fn);
}

print_r(call_something($callable));

?>
