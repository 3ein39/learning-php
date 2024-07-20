<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

// arrow functions are available in php 7.4 and above
$add = fn($a, $b) => $a + $b;

echo $add(2, 3), "\n"; // 5


// we can pass by value and by reference like in c++


// can have default arguments like in c++

function greet($name = "John") {
  echo "Hello, $name", "\n";
}

greet(); // Hello, John


