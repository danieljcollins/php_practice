<?php
$integer = 0;
$octal = 012;
$hex = 0x2a;
$float = 1.10;
$binary = 0b101010;

for($i = 0x0; $i < 0x32; $i++){
	// dechex() displays a decimal value in hexadecimal format
	print_r(dechex($i) . "\n");
}

?>

