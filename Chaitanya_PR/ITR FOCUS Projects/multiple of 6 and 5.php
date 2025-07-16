<?php
// Write a PHP program to check if the given number is a multiple of both 6 and 5,
// or only 6, or only 5

$num = 13;

if ($num % 6 == 0 && $num % 5 == 0) {
    echo "$num is a multiple of both 6 and 5<br>";
} elseif ($num % 6 == 0) {
    echo "$num is a multiple of 6 only<br>";
} elseif ($num % 5 == 0) {
    echo "$num is a multiple of 5 only<br>";
} else {
    echo "$num is not a multiple of 6 or 5<br>";
}
?>
