<?php

class MyClass{
	private $a = 1;

	public function add(int $a){
		$this->a += $a;
		return $this;
	}

	public function get(){
		return $this->a;
	}
}

$object = new MyClass();
var_dump($object->add(4)->get());	//int(5)
?>
