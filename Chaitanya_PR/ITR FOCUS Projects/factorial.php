<?php
// Write a PHP program to find the factorial of a given number

$num = 5; 
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "The factorial of $num is $factorial<br>";
?>
