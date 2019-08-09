<?php
$cookie_name = "data";
$cookie_value = "Foo Bar";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");	// 1 day

if(!isset($_COOKIE[$cookie_name])){
	echo "Cookie named '" . $cookie_name . "' is not set!";
}
else{
	echo "Cookie '" . $cookie_name . "' is set!<br>";
	echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
