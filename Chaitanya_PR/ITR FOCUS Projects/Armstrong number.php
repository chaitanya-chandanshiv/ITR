<?php
// Write a PHP program to check Armstrong number

$sum = 0;
$num = 153;
$num1 = $num;

while ($num > 0) {
    $rem = $num % 10;
    $sum = $sum + ($rem * $rem * $rem);
    $num = (int)($num / 10); // Use type casting to remove decimal
}

if ($num1 == $sum) {
    echo "Number is an Armstrong number";
} else {
    echo "Number is not an Armstrong number";
}
?>
