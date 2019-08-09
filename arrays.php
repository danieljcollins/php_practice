<?php

$foo = array();

// short-hand for above empty array
$foo = [];

$fruit = array('apples', 'pears', 'oranges');

// short-hand since php 5.4
$fruit = ['apples', 'pears', 'oranges'];

// a simple associative array
$fruit = array(
	'first' => 'apples',
	'second' => 'pears',
	'third' => 'oranges'
);

// a simple associative array
$fruit = array(
	'first' => 'apples',
	'second' => 'pears',
	'third' => 'oranges'
);

// a simple associative array
$fruit = array(
	'first' => 'apples',
	'second' => 'pears',
	'third' => 'oranges'
);

// key and value can also be set as follows
$fruit['first'] = 'apples';

// short-hand since php 5.4
$fruit = [
	'first' => 'apples',
	'second' => 'pears',
	'third' => 'oranges'
];

// if the array hasn't been created, php will created it automatically, but this style is not recommended:
$foo[] = 1; 	//array([0] => 1);
$bar[][] = 2;	//array([0] => array([0] => 2))

// php will auto-increment indexes from where you left off usually
$foo = [2 => 'apple', 'melon'];	//array([2] => apple, [3] => melon)
$foo = ['2' => 'apple', 'melon'];	//array([2] => apple, [3] => melon)

// the last entry will over-write the second, when it sees the 3
$foo = [2 => 'apple', 'this is index 3 temporarily', '3' => 'melon'];
var_dump($foo);	// array{[2] => "apple", [3] => "melon"}

// SplFixedArray allows you to make fixed-size arrays that are faster than standard arrays
// so there's pros and cons to each
// another drawback is that it can only have integer keys

$array = new SplFixedArray(3);

$array[0] = 1;
$array[1] = 2;
$array[2] = 3;
//$array[3] = 4;	// runtime exception (because fixed array was made to have only 3 elements)

// increase the size of the array to 10
$array->setSize(10);

// use the range function to make an array automatically place the elements for you

$array = [];
$array_with_range = range(1,4);

for($i = 1; $i <= 4; $i++){
	$array[] = $i;
}

print_r($array);
print_r($array_with_range);

// check if key exists using
// array_key_exists() or isset() or !empty()

$map = [
	'foo' => 1,
	'bar' => null,
	'foobar' => '',
];

array_key_exists('foo', $map);	//true
isset($map['foo']);	// true
!empty($map['foo']);	// true

array_key_exists('bar' $map);	//true
isset($map['bar']);	// false, value at bar is null so isset treats that as false
!empty($map['bar']);	// false, !empty treats value at bar (null) as NOT empty interestingly

// !empty() use is frowned upon because of the above example, and others like the string '0'
// being treated as false, which can lead to annoying issues

$array = [1337, 42];

is_array($array);	// true
gettype($array) === 'array';	//true

// type-hint an array type in a function like this
// function foo (array $array) {}

$username = 'Hadibut';
$email = 'hadibut@example.org';

$variables = compact('username', 'email');
// $variables is now ['username' => 'Hadibut', 'email' => 'hadibut@example.org']

// how to check if an item exists in an array
$fruits = ['banana', 'apple'];
$foo = in_array('banana', $fruits);	// foo value is true

$pos = array_search('apple', $fruits);
if($pos !== false){
	echo "apple value found at $pos";
}

$userdb = [
	[
		"uid" => '100',
		"name" => 'Sandra Shush',
		"url" => 'urlof100',
	],
	[
		"uid" => '5465',
		"name" => 'Stefanie Mcmohn',
		"pic_square" => 'urlof100',
	],
	[
		"uid" => '40489',
		"name" => 'Michael',
		"pic_square" => 'urlof40489',
	]
];

$key = array_search(40489, array_column($userdb, 'uid));





?>
