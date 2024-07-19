<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// All of the above is similar to c++, js


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Foreach loop is used to iterate over arrays, like in c++ for (auto el : arr)
$users = [
     [
     "name" => "Hussein"
    ],
    [
      "name" => "Hany"
    ]
];

foreach ($users as $user) {
  echo $user["name"], "\n";
}

// indexed for each
$numbers = [1,2,3,4,5];
foreach ($numbers as $index => $number) {
  echo "Index: $index, Number: $number", "\n";
}

// associative for each
$person = [
    "name" => "John",
    "age" => 20,    
];

foreach ($person as $key => $value) {
  echo "Key: $key, Value: $value", "\n";
}
