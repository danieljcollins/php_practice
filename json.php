<?php
header("Content-Type: application/json");

// Create a PHP data array
//$data = ["response" => "Hello World"];
$data = array('a' => 1, 'b' => 2);

// json_encode will convert it to a valid JSON string
echo json_encode($data);
?>
