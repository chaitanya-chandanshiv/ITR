<?php
// Write a PHP program to print reverse of given number 
$num = 2345;   
$reverse = 0;

while($num > 0)
{
    $digit = $num % 10;
    $reverse = $reverse * 10 + $digit;
    $num = (int)($num / 10); 
}

echo "Reverse of number: " . $reverse . "<br>";
?>
