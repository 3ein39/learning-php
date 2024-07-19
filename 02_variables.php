<?php
// ----- php has 8 data types -----
// 1. String     | A string is a sequence of characters, like "Hello world!".
// 2. Integer    | An integer data type is a non-decimal number between -2^31 and 2^31.
// 3. Float      | A float (floating point number) is a number with a decimal point or a number in exponential form.
// 4. Boolean    | A boolean represents two possible states: TRUE or FALSE.
// 5. Array      | An array stores multiple values in one single variable.
// 6. Object     | An object is a data type which stores data and information on how to process that data.
// 7. NULL       | NULL is a special data type that can have only one value: NULL.
// 8. Resource   | Resource is a special variable, holding a reference to an external resource. Resources are created and used by special functions.
//
// ----- Variables -----
// must start with a $ sign, followed by the name of the variable

$name = "someone's name";
$age = 20;
$height = 5.9;

echo $name . " and his height is " . $height, "\n"; // . is used for concatenation, like + in JS
echo "$name and his height is $age", "\n"; // double quotes can be used to directly print variables

// ----- Constants -----
// define(name, value), is uppercase by convention
define("DB_NAME", "my_db");
echo DB_NAME, "\n";


?>
