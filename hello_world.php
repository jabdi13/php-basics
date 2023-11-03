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

// Lists Arrays
$my_list = ["Text 1", "Text 2", "Text 3"];
echo $my_list[0] . "\n";

array_push($my_list, "New value");

print_r($my_list);

// Dictionary

$my_object = array("name" => "Abdiel", "last_name" => "Ortega", "age" => 27);
echo gettype($my_object) . "\n";
print_r($my_object);

// Remove repeated values
array_unique($my_list);

for($i = 0;$i <= 10; $i++) {
  echo $i . "\n";
}

for($i = 0;$i < sizeof($my_list); $i++) {
  echo $my_list[$i] . "\n";
}

foreach ($my_list as $item) {
  echo $item . "\n";
}

// Functions

function print_name() {
  echo "Abdiel" . "\n";
}

print_name();

function sum_number(int $num1, int $num2) {
  return $num1 + $num2;
}

echo sum_number(3, 4) . "\n";

// classes

class MyClass {
  public $name;
  public $age;
  function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
}

$my_class = new MyClass("Abdiel", 4);
print_r($my_class);