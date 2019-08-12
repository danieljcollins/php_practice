<?php

function variadic_func($nonVariadic, ...$variadic){
	echo json_encode($variadic);
}

variadic_func(1,2,3,4);	// prints [2,3,4];
echo '<br>';

// variadic parameters can be sent to functions
// $iterator = new InfiniteIterator(new ArrayIterator([0,1,2,3,4]));
// var_dump(...$iterator);

?>
