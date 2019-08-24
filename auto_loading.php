<?php

// auto-loading php files is a good way to avoid having a developer have to
// remember to include and require php files every-time that they are needed
// there is the __autoload function, but it seems that
// sp_autoload_register is the better practices
//
// OR if you don't mind third-party libraries, you can use Composer to
// perform dependancy management

// a few examples below

spl_autoload_register(function ($className){
	// here you can tailor your path name creation to suit your project
	// needs via string manipulation
	$path = sprintf('%s.php', $className);

	if(file_exists($path)){
		include $path;
	}
	else{
		// file not found code placed here
	}
});




?>
