<?php

// This is one line comment

/*
  This is a block comment
  in multiple lines

*/


echo "Hello world \n";

// This is the way to concat strings
echo "Concat " . "text" . "\n";

// Variables

$new_string = "String text stored in a variable";
echo $new_string . "\n";
echo gettype($new_string) . "\n";

$new_boolean = true;
echo gettype($new_boolean) . "\n";
echo $new_boolean . "\n";

// Interpolation
echo "El valor de mi new string es $new_string\n";

// Constants
const MY_CONSTANT = "Constant value";
echo MY_CONSTANT . "\n";