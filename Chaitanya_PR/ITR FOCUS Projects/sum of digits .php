<?php
// Write a PHP program to find sum of digits of given number 
$num = 2345;
$sumofdigit = 0;

while($num > 0)
{
    $digit = $num % 10;
    $sumofdigit += $digit;
    $num = (int)($num / 10); 
}

echo "Sum of digits: " . $sumofdigit . "<br>";
?>
