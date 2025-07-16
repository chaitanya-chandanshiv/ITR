<?php
// Write a PHP program to reverse and check if a number is palindrome or not

$rev = 0;
$num = 121;
$num1 = $num;

while($num > 0)
{
    $rem = $num % 10;
    $rev = $rev * 10 + $rem;
    $num = (int)($num / 10); // Use integer division
}

if($num1 == $rev)
{
    echo "Number is a palindrome";
}
else
{
    echo "Number is not a palindrome";
}
?>
