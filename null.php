<?php

// === is the identical operator
// keep in mind that is_null(); also exists

$var = null;
$var_is_null = $var === null;	//true
$var_is_true = $var === true;	//false
$var_is_false = $var === false;	//false

// !== is the not identical operator
$var_is_null = $var !== null;	//false
$var_is_true = $var !== true;	//true
$var_is_false = $var !== false;	//true

?>
