<?php
$sum = 0;
$break = (int)readline('Please choose a number to find the sum of the digits of the 2 to the power of this number : ');
$result = 2**$break;

$accurate = bcpow('2', $break);
$formatted_number = ltrim($accurate, '0'); 


for ($i = 0; $i < strlen($formatted_number); $i++) {
    $sum = bcadd($sum, $formatted_number[$i]);
}

echo "the sum of the digits of  2^$break is $sum\n";