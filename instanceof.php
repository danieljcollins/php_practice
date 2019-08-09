<?php

interface MyInterface{
}

class MySuperClass implements MyInterface{
}

class MySubClass extends MySuperClass{
}

$o = new MySubClass();

// in the cases below, $a gets boolean value true
$a = $o instanceof MySubClass;
$b = $o instanceof MySuperClass;
$c = $o instanceof MyInterface;
$d = !$o instanceof MyInterface;

//print_r($a . $b . $c . $d);
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

// you can use a string when using instanceof because if the class isn't
// defined, it will try to define it in a registered autoloader, which
// will likely fail or cause other problems
$name = 'MySubClass';
$e = $o instanceof $name;
var_dump($e);

?>
