<?php

interface Foo{
	public function doSomething($param1, $param2);
}

interface Bar{
	public function doAnotherThing($param1);
}

abstract class AbstractBaz implements Foo, Bar{
	// partial implementation of the required interfaces
	public function doSomething($param1, $param2){
		
	}
}

class Baz extends AbstractBaz{
	// and the concrete class that extends AbstractBaz must implement
	// any methods that weren't already implemented
	public function doAnotherThing($param1){

	}
}



?>
