<?php

class Foo{
	function __construct($args){
		echo "parent called. $args.";
		echo '<br>';
	}
}

class Bar extends Foo{
	function __construct($args){
		parent::__construct($args);
	}
}

$a = new Bar("child called");

?>
