<?php
class A{
	public $foo = 1;
}

$a = new A;
$b = $a;	// a and b are copies of the same identifier

$b->foo = 2;
echo $a->foo."\n";

$c = new A;
$d = &$c;	//$c and $d are references

$d->foo = 2;
echo $c->foo."\n";

$e = new A;

function foo($obj){
	$obj->foo = 2;
}

foo($e);
echo $e->foo."\n";

// expected output is:
// 2
// 2
// 2

?>
