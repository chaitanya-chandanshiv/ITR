<?php
// Write a PHP program to display all the numbers which are divisible by 13 but not by 3 between 1 and 500

for ($i = 1; $i <= 500; $i++) {
    if ($i % 13 == 0 && $i % 3 != 0) {
        echo "$i<br>";
    }
}
?>