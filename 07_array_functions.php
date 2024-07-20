<?php
$fruits = ['apple', 'banana', 'orange', 'grapes'];

// count() - returns the number of elements in an array
echo count($fruits), "\n"; // 4

// in_array(needle, haystack) - searches for a specific value in an array
echo var_dump(in_array('apple', $fruits)), "\n"; // true


// adding to an array
$fruits[] = 'mango';
echo json_encode($fruits), "\n"; 

// push and unshift like in js
array_push($fruits, 'watermelon');
array_unshift($fruits, 'kiwi');

echo json_encode($fruits), "\n";


// pop and shift like in js
array_pop($fruits);
array_shift($fruits);

echo json_encode($fruits), "\n";

print_r($fruits);

// unset() - removes an element from an array, like delete in c++
unset($fruits[1]);

print_r($fruits);


// chunk() - splits an array into chunks
$chunks = array_chunk($fruits, 2);

print_r($chunks);


// merging arrays
$veggies = ['carrot', 'cabbage', 'spinach'];
$food = array_merge($fruits, $veggies);

print_r($food);

// we have spread operator like in js
$all = [...$fruits, ...$veggies];
print_r($all);

// combine - combines two arrays into an associative array, the first array is the keys and the second is the values
$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];
$combined = array_combine($arr1, $arr2);    
print_r($combined);

// array keys
$keys = array_keys($combined);
print_r($keys);


// generating range of numbers
$numbers = range(1, 10);
print_r($numbers);


// map and filter like in js
$double = array_map(fn($n) => $n * 2, $numbers);
print_r($double);

$evens = array_filter($numbers, fn($n) => $n % 2 === 0);
print_r($evens);