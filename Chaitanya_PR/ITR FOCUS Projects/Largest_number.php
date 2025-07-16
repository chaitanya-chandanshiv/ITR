<?php
// Write PHP program to find the largest of 4 numbers using ternary operators with conditional operator 

$a = 10;
$b = 20;
$c = 30;
$d = 40;

$largest = ($a > $b && $a > $c && $a > $d) ? $a :
           (($b > $c && $b > $d) ? $b :
           (($c > $d) ? $c : $d));

echo "Largest number is " . $largest;
?>

