<?php

// start the session
session_start();

// storing the value in session
$_SESSION['id'] = 342;

// conditional usage of session values that may have been set in a 
// previous session
if(!isset($_SESSION["login"])){
	echo 'Please login first';
	exit;
}

// no you can use the login safely
$user = $_SESSION["login"];

// getting the value from the session date, or with default value,
// using the null coalescing operator in PHP 7
$name = $_SESSION['name'] ?? 'Anonymous';





?>
