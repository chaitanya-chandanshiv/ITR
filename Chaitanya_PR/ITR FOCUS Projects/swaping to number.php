<?php
//Write a php program swap to numbers using bitwise operator.
$a=20;
$b=40;
$a=$a^$b;
$b=$a^$b;
$a=$a^$b;

echo"After swaping to number"."A is $a"."<br>"."B is $b";

?>