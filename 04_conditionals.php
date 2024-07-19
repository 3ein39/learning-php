<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 21;
if ($age >= 21) {
  echo "You are old enough to vote.", "\n";
} else {
    echo "You are not old enough to vote.", "\n";
}

// empty() - checks if a variable is empty
$empty = "";
if (empty($empty)) {
  echo "The variable is empty.", "\n";
}


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/
 // like in c++, js

/* -------- Switch Statements ------- */