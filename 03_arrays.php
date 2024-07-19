<?php
/* ----------- Arrrays ----------- */
// PHP provides you with two types of arrays: indexed and associative.

// Indexed arrays - Arrays with a numeric index
$numbers = [1,2,3,4];
$names = ["John", "Jane", "Doe"];

echo $numbers[0], "\n"; // 1
 var_dump($names); // Array

// Associative arrays - Arrays with named keys
// They are like hashmaps in c++, objects in JS
$person = [
    "name" => "John",
    "age" => 20,
    "height" => 5.9
];

echo $person["name"], "\n"; // John

// json_encode() - converts an array into a JSON string
echo json_encode($person), "\n"; 


// json_decode() - converts a JSON string into an array