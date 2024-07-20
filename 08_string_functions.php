<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$greeting = "Hello, World!";
// strlen
echo strlen($greeting), "\n"; // 13

// str_word_count
echo str_word_count($greeting), "\n"; // 2

// strrev
echo strrev($greeting), "\n"; // !dlroW ,olleH

// strpos
echo strpos($greeting, "World"), "\n"; // 7

// str_replace
echo str_replace("World", "PHP", $greeting), "\n"; // Hello, PHP!

// str_repeat
echo str_repeat($greeting, 2), "\n"; // Hello, World!Hello, World!

// strtolower
echo strtolower($greeting), "\n"; // hello, world!

// substr
echo substr($greeting, 7), "\n"; // World!

// str_starts_with
echo str_starts_with($greeting, "Hello"), "\n"; // 1

// str_ends_with
echo str_ends_with($greeting, "World!"), "\n"; // 1

