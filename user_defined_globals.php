<?php

$amount_of_log_calls = 0;

function log_message($message){
	// accessing global variable from function scope
	// requires this explicit statement
	global $amount_of_log_calls;

	// this change tot he global variable is permanent
	$amount_of_log_calls += 1;
	
	// you could also do this, and not have to use the global keyword
	// above. but declaring it here, makes it so that you can't 
	// accidentally re-declare another variable of the same name, so it
	// helps with clarity
	//$GLOBALS['amount_of_log_calls'] += 1;
	
	echo $message;
}

// when in the global scope (outside of a function) regular global
// variables can be used without explicitly stating 'global $variable';
echo $amount_of_log_calls;	//0
log_message("First log message!");
echo $amount_of_log_calls;	//1

log_message("Second log message!");
echo $amount_of_log_calls;	//2

?>
