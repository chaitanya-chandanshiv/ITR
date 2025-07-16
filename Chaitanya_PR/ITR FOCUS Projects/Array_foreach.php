<?php
// Write a PHP program to create an array for third year diploma subjects
// Update an array (elective subject), access an array element, and traverse using foreach loop

$subject = ["OSY", "SEN", "ACN"];
$subject[2] = "CGR";


echo "All subjects:<br>";
foreach ($subject as $sub)
{
    echo "$sub<br>";
}
?>
