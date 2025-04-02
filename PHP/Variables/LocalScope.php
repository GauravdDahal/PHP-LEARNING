<!-- A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function: -->
<!DOCTYPE html>
<html>
<body>

<?php
function myTest() {
  $a = 77; // local scope declaration
  echo "<p>Variable x inside function is: $a</p>";
} 
myTest();
// using x outside the function will generate an error
echo "<p>Variable x outside function is: $a</p>";
?>

</body>
</html>
