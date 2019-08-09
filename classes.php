<?php

class Definition_Class{
	public function say(){
		echo '__CLASS__ value: ' . __CLASS__ . "\n";
		echo 'get_called_class() value: ' . get_called_class() . "\n";
		echo 'get_class($this) value: ' . get_class($this) . "\n";
		echo 'get_class() value: ' . get_class() . "\n";
	}
}

class Actual_Class extends Definition_Class{}

$c = new Actual_Class();
$c->say();

// Output:
// Definition_Class
// Actual_Class
// Actual_Class
// Definition_Class
?>
