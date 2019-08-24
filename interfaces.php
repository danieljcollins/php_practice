<?php

interface Foo{
	public function doSomething($param1, $param2);
}

interface Bar{
	public function doAnotherThing($param1);
}

class Baz implements Foo, Bar{
	public function doSomething($param1, $param2){
		
	}

	public function doAnotherThing($param1){

	}
}


?>
