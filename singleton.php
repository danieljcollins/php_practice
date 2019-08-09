<?php
class Singleton{
	public static function getInstance(){
		//static variable $instance is not deleted when function ends
		static $instance;

		// second call to this function will not get into the if
		// statement, because an instance of Singleton is now stored
		// in the $instance variable and is persisted through 
		// multiple calls
		if(!$instance){
			// first call to this function will reach this line,
			// because the $instance has only been declared,
			// not initialized
			$instance = new Singleton();
		}

		return $instance;
	}
}

$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();

// comparing objects with the '===' operator checks whether they are the same
// instance. will print 'true' because static $instance variable in the 
// getInstance() method is persisted through multiple calls
var_dump($instance === $instance);

?>
