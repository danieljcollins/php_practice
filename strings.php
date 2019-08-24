<?php

$foo = 'Hello world';

$foo[6];	// returns 'w', since character at 6th index is w here
$foo{6};	// returns 'w'

// sets the start of the substring at index 6, for 1 character
substr($foo, 6,1);

substr_replace($foo, 'W', 6,1);	
substr_replace($foo, 'Whi', 6,2);	// results in 'Hello Whirld
// the replacement string doesn't need to be the same length as the substring
// replaced.

// a string containing several parts of text that are separated by a common
// character can be split into parts using the explode() function.
$fruits = "apple,pear,grapefruit,cherry";

//this results in ['apple', 'pear', 'grapefruit', 'cherry']
print_r(explode(",", $fruits));

// there's a third parameter, the limit parameter, which can change what's 
// returned. providing a -1 for example does not return the last 
// separated string in the newly separated string
 
// explode can be combined with list to parse a string into variables
$email = "user@example.com";
list($name, $domain) = explode("@", $email);

// strstr($string, "substring"); strips away anything after the first
// occurrance of the given substring

// substr("Boo", 1); returns string(2) "oo"
// for multi-byte character strings, it's safer to use mb_substr()
//
// substr_replace(), takes a substring and replaces it, either using indexes
// or using an internal call to substr() in the call to substr_replace()

// strpos($string, "thing you want to find pos of");
//
//



?>
