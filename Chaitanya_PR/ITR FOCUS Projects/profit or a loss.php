<?php
// Write a PHP program to check whether the shopkeeper made a profit or a loss

$cost = =200;
$sell = 300;

if ($sell > $cost) {
    $profit = $sell - $cost;
    echo "Profit of ₹$profit";
} elseif ($sell < $cost) {
    $loss = $cost - $sell;
    echo "Loss of ₹$loss";
} else {
    echo "No profit, no loss";
}
?>
