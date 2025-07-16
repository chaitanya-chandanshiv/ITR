<?php
// Write a PHP program to given no 1 to 50 addition
$sum =0; 
for ($i = 1; $i <=50; $i++)
{
    if($i%2==0)
    {
        echo"$i"."<br>";
        $sum+=$i;
    }
}
echo"the sum of even number from 1 to 50 is $sum";
?>
