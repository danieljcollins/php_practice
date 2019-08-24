<?php

class Words{
	protected $words = [];

	// Type-hinting is when we imply a type in a parameter list
	public function addWords(String $word){
		$this->words[] = $word;
	}
}


?>
