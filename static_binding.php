<?php

class Horse{
	public static function whatToSay(){
		echo 'Neigh!';
	}

	public static function speak(){
		// You might be tempted to write:
		// self::whatToSay();
		// BUT, for any class that extends Horse, it will call
		// this class's version of whatToSay(), not any over-loaded
		// versions. So instead you write:

		static::whatToSay();	// late static binding
		echo '<br>';
	}
}

class MrEd extends Horse{
	public static function whatToSay(){
		echo 'Hello Wilbur!';
		echo '<br>';
	}
}

Horse::speak();	// Neigh!
MrEd::speak();	// Hello Wilbur!


?>
