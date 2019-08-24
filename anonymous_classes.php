<?php

// anonymous class example
class Outer{
	private $prop = 1;
	protected $prop2 = 2;

	protected function func1(){
		return 3;
	}

	public function func2(){
		// passing through the private $this->prop property
		return new class($this->prop) extends Outer{
			private $prop3;

			public function __construct($prop){
				$this->prop3 = $prop;
			}

			public function func3(){
				// accessing protected property Outer::$prop2
				// accessing protected method Outer::func1()
				// accessing local prop self::$prop3 that 
				// was private from Outer::$prop
				return $this->prop2 + $this->func1() +
					$this->prop3;
			}
		};
	}
}

echo (new Outer)->func2()->func3();	// 6

?>
