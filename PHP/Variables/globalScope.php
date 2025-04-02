<!-- A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

Example -->
<?php
$x = 5; // global scope

function myTest() {
  // using x inside this function will generate an error since variable is not assigned inside the function which is global scope.
 // echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";//prints the global global variable
?>