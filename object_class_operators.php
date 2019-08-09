<?php

class MyClass
{
	public $a = 1;
	public static $b = 2;
	const C = 3;
	public function d(){ return 4; }
	public static function e() { return 5; }
}

$object = new MyClass();
var_dump($object->a);	// int(1)
var_dump($object::b);	// int(2)
var_dump($object::C);	// int(3)
var_dump(MyClass::$b);	// int(2)
var_dump(MyClass::C);	// int(3)
var_dump($object->d());	// int(4)
var_dump($object::d());	// int(4)
var_dump(MyClass::e));	// int(5)

$classname = "MyClass";
var_dump($classname::e());	// also works! int(5)




?>
