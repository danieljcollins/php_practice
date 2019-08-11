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

array_key_exists('bar', $map);	//true
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
	echo "apple value found at $pos" . '<br>';
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

$key = array_search(40489, array_column($userdb, 'uid'));

$people = ['Tim', 'Tony', 'Turanga'];
$foods = ['chicken', 'beef', 'slurm'];

// sometimes two arrays of the same length need to be iterated together
$results_array = array_map(function($person, $food){
	return "$person likes $food" . '<br>';
}, $people, $foods);

print_r($results_array);

assert(count($people) === count($foods));
for($i = 0; $i < count($people); $i++){
	echo "$people[$i] likes $foods[$i]" . '<br>';
}

// or just use array_combine:
$combined_array = array_combine($people, $foods);

// then loop through this similarly as before:
foreach($combined_array as $person => $meal){
	echo "$person likes $meal" . '<br>';
}

// using an incremental index
$colours = ['red', 'yellow', 'blue', 'green'];
for($i = 0; $i < count($colours); $i++){
	echo 'I am the colour ' . $colours[$i] . '<br>';
}

// you can do the same in reverse, which is faster than array_reverse on large arrays
for($i = count($colours) - 1; $i >= 0; $i--){
	echo 'I am the colour ' . $colours[$i] . '<br>';
}

// for arrays that don't have incremental indices, including those with indices with reverse order,
// array_values or array_keys can be used instead:
$array = ["a" => "alpha", "b" => "beta", "c" => "charlie", "d" => "delta"];
$keys = array_keys($array);
for($i = 0; $i < count($array); $i++){
	$key = $keys[$i];
	$value = $array[$key];
	echo "$value is $key" . '<br>';
}

// using each() and next() internal array pointers:

while(list($key, $value) = each($array)){
	echo "$value begins with $key <br>" ;
}

 

$array = ['cars', 'bikes', 'motorcycles', 'rv', 'spaceships'];
// if you do this as a do while, it won't print the first value (just an empty value), 
// if you do this as a regular while, it won't print the first value either. so next() isn't ideal
// for this situation. each() is better
do{
	echo "$value" . '<br>';
}
while(($value = next($array)) !== false);

// here's where next() is cool. you can iterate through an array without a loop
class ColourPicker{
	private $colours = ["FF0064", "#0064FF", "64FF00", "#FF6400", "00FF64", "#6400FF"];

	public function nextColour() : string{
		$result = next($this->colours);
		//if end of array reached
		if($result === null){
			reset($colours);
			$result = next($colours);
		}
		return $result;
	}
}

$colourObject = new ColourPicker();
$colourChoice = $colourObject->nextColour();
print_r($colourChoice);
echo '<br>';

$array = ['1' => 'apple', '2' => 'banana', '3' => 'cherry'];
$arrayObject = new ArrayObject($array);

$iterator = $arrayObject->getIterator();

for($iterator; $iterator->valid(); $iterator->next()){
	echo $iterator->key() . ' => ' . $iterator->current() . "</br>";
}

$array = array(1,2,3,4,5);
// each array item is iterated over and gets stored in the function parameter
// this example uses an anonymous function
$newArray = array_map(function($item){
	return $item + 1;
}, $array);

// you could also use a named function if you wanted:
function addOne($item){
	return $item + 1;
}

$array = array(1,2,3,4,5);
$newArray = array_map('addOne', $array);

// if the named function is a class method the call of the function has to include
// a reference to a class object the method belongs to:
// $newArray = array_map(array($this, 'addOne'), $array);

$array = array(1,2,3,4,5);
array_walk($array, function($value, $key){
	echo $value . ' ';
});
echo '<br>';
//prints 1 2 3 4 5

// pass the value by reference if you want to change the value in the original array:
$array = array(1,2,3,4,5);
array_walk($array, function(&$value, $key){
	$value++;
});

$array = array(1, array(2,3, array(4,5), 6));
array_walk_recursive($array, function($value, $key){
	echo $value . ' ';
});
// prints 1 2 3 4 5 6
echo '<br>';

// split an array into chunks
$input_array = array('a', 'b', 'c', 'd', 'e');
$output_array = array_chunk($input_array, 2);	// each element will be an array, with two of the elements each

// implode() combines all the array values but looses all the key info:
$arr = ['a' => 'AA', 'b' => 'BB', 'c' => 'CC'];
echo implode(" ", $arr);	// AA BB CC
echo '<br>';

// you could implode keys with values using an anonymous function:
echo implode(" ", array_map(function($key, $val){
	return "$key:$val";
}, array_keys($arr), $arr));
// the above outputs: a:AA b:BB c:CC
echo '<br>';

// array_reduce reduces the array to a single value. you can use functions to do various things with this

// sum of array values
$result = array_reduce([1,2,3,4,5], function($carry, $item){
	return $carry + $item;
});
// result is that all values are added up, which in this case equals 15
// $carry is the result from the last round of iteration
// $item is the value of the current position in the array

// largest number in array
$result = array_reduce([10, 23, 211, 34, 25], function($carry, $item){
	return $item > $carry ? $item : $carry;
});
// result: 211

// are all array values higher than 100?
$result = array_reduce([101, 230, 210, 341, 251], function($carry, $item){
	return $carry && $item > 100;
}, true);	//default value must be set true
//result true
var_dump($result);

// are any array value less than 100
$result = array_reduce([101, 230, 210, 341, 251], function($carry, $item){
	return $carry && $item < 100;
}, false);	//default value must be set false

$array = [1,2,3];
$newArraySize = array_push($array, 4,5); 
// 4,5 will be added as new elements

$array[] = 6;	// short-form array_push

// filtering arrays

// remove all empty values
$my_array = [1,0,2,null,3,'',4,[],5,6,7,8];
$non_empties = array_filter($my_array);	//will contain [1,2,3,4,5,6,7,8]

// we can define our own filtering rule, such as we want even numbers only

$even_numbers = array_filter($non_empties, function($number){
	return $number % 2 === 0;
});

// you can tweak which values are passed to the call back
// ARRAY_FILTER_USE_KEY = sends the keys to the call back function
// ARRAY_FILTER_USE_BOTH = sends key and value to the call back

$even_numbers = array_filter($non_empties, function($number){
	return $number % 2 === 0;
}, ARRAY_FILTER_USE_KEY);

// array_filter preserves the original array keys, common mistake is
// to not populate a new array with the filtered results
$my_array = [1,0,2,null,3,'',4,[],5,6,7,8];
$filtered = array_filter($my_array);
error_reporting(E_ALL);	// show all errors and notices

// standard for loop will cause issues because of the removals of 
// array_filter, so I won't write a for loop here for brevity.
// but use array_values to make a new array with correct values
$iterable = array_values($filtered);
for($i = 0; $i < count($iterable); $i++){
	print $iterable[$i];
}

$fruit = array('bananas', 'apples', 'peaches');
// removes apples from list but does not change indexes, so now
// contains indexes 0 and 2
unset($fruit[1]);

$array = ['one' => 'birds', 'two' => 'dinosaurs'];
unset($array['two']);

//unset($array); // removes the whole array

array_shift($fruit);	// shift an element off of the beginning of array
array_pop($fruit);	// pop element off the end of array

$animals_array = ['zebra', 'lion', 'anteater', 'tiger', 'bear'];
sort($animals_array);	// sort by ascending order by value
rsort($animals_array);	// sort by descending order by value
asort($animals_array);	// sort ascending order, but preserve indices
arsort($animals_array);	// sort desc order but preserve indices

$fruits = ['d'=>'lemon', 'a'=>'orange', 'b'=>'banana', 'c'=>'apple'];
ksort($fruits); 	// sorts asc order by key
krsort($fruits);	// sorts desc order by key

$files =
	['File8.stack',
	'file77.stack',
	'file7.stack',
	'file13.stack',
	'File2.stack'
	];
natsort($files);	// sorts in "human way" (natural order);
natcasesort($files);	// natural order, but case intensive
shuffle($files);	// sorts randomly

// usort() sorts an array with user defined comparison function
function compare($a, $b)
{
	if($a == $b){
		return 0;
	}
	return ($a < $b) ? -1 : 1;
}
$array = [3,2,5,6,1];
usort($array, 'compare');
print_r($array);

// uasort() uses a custom function but preserves the keys
// uksort() uses custom function to sort an array by keys

// to white list only some array keys, there's two common ways
// array_intersect_key and array_filter
$parameters = ['foo'=>'bar','bar'=>'baz','boo'=>'bam'];
$allowedKeys = ['foo', 'bar'];
$filteredParameters = array_intersect_key($parameters, 
	array_flip($allowedKeys));

// use array_filter if you want to use regex and other benefits
$parameters = ['foo'=>'bar','bar'=>'baz','boo'=>'bam'];
$allowedKeys = ['foo', 'bar'];
$filteredParameters = array_filter(
	$parameters,
	function ($key) use ($allowedKeys){
		return in_array($key, $allowedKeys);
	},
	ARRAY_FILTER_USE_KEY
);

// array_unshift($myArray, 4) adds passed elements to the front of 
// array, but all numerical keys will be modified to start counting 
// from zero while literal keys won't be touched. it's slow to do this

// so as an alternative create a new array and append the value
// to the new array
$myArray = array('apples', 'bananas', 'pears');
$myElement = array('oranges');
$joinedArray = $myElement;

foreach($myArray as $i){
	$joinedArray[] = $i;	// array_push short-form version
}

// array_flip($array); will exchange all keys with its elements
// array_merge($array1, $array2);	// merge two arrays into one array
// if two string literal keys are the same, the one in the second 
// array will over-write the element and key of the first instance 
// of that key

// array_intersect($array1, $array2, $array3); will return array of values
// that exist in all arrays that were passed to this function
// array_intersect_assoc() will do the same but will return intersection
// of arrays with keys (both keys and values must match, not one or other)

// array_intersect_key() only checks the intersection of keys
// array_merge() will concatenate/merge arrays. will change numeric
// indexes but will over-write elements in the first array with any
// in the second that has the same keys

// $array1 + $array2 merges arrays but discards values in second array
// if they have an index that matches an index in first array
// so the opposite of array_merge()

// change a multi-dimensional array to associative array:
$array = [
	['foo', 'bar'],
	['fizz', 'buzz'],
];

$associativeArrayKeys = array_column($multidimensionalArray, 0);
$associativeArrayValues = array_column($multidimensionalArray, 1);
$associativeArray = array_combine($associativeArrayKeys, 
	$associativeArrayValues);

// or you could do it like this:
$associativeArray = array_combine(array_column($multidimensionalArray, 0),
	array_column($multidimensionalArray, 1));

// array_combine($array1, $array2); creates an array using one array
// for keys and another for its values









?>
