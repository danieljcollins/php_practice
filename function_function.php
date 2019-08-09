<?
class myClass{
	public function __construct(){
		$functionName = 'doSomething';
		$this->$functionName('Hello World');

		$functionName = 'varVar';
		$this->$functionName();
	}

	private function doSomething($string){
		echo $string;
	}

	private function varVar(){
		$variableName = 'foo';
		$foo = 'bar';

		// the following are all equivalent, and all outpur 'bar'
		echo $foo;
		echo ${$variableName};
		echo $$variableName;

		//similarly
		$variableName = 'foo';
		$$variableName = 'bar';

		// the following statements will also output 'bar'
		echo $foo;
		echo $$variableName;
		echo ${$variableName};
	}


?>
