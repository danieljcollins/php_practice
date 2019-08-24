<?php

// returns an object (the top level item in the JSON string is a JSON dictionary)
$json_string = '{"name": "Jeff", "age":20, "active": true, "colours": ["red", "blue"]}';
$object = json_decode($json_string);
printf('Hello %s, You are %s years old.', $object->name, $object->age);

// returns an array (the top level item in the JSON string is a JSON array in this example)
$json_string = '["Jeff", 20, true, ["red", "blue"]]';
$array = json_decode($json_string);
printf('Hello %s You are %s years old.', $array[0], $array[1]);

var_dump($object);

?>
