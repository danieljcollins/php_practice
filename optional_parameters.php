<?php
function hello($name, $style = 'Formal'){
	switch($style){
	case 'Formal':
		print "Good day, $name.";
		break;
	case 'Informal':
		print "Hi $name!";
		break;
	default:
		print "Hello $name.";
		break;
	}
	echo '<br>';
}

hello('Dan');
hello('Dan', 'Informal');
hello('Dan', 'badinputsdlfjhsd');

?>
