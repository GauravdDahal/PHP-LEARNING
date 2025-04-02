<!-- PHP The global Keyword
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function): -->
    <!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
} 

myTest();  // run function
echo $y; // output the new value for variable $y
?>

</body>
</html>
