<?php
$regularSum = 0;
$squareSum = 0;
$diference = 0;

$break = (int)readline('Please choose a number to find the sum square difference of this number : ');

for($i = 0 ; $i <= $break ; $i++){
    $regularSum += $i**2; 
}
echo("The sum of the square of the first $break natural number is $regularSum\n");

for($j = 0 ; $j <= $break ; $j++){
    $squareSum += $j;
}
$squareSum = pow($squareSum, 2);
$diference = $squareSum - $regularSum;

echo("The square of the sum of of the first $break natural number is $squareSum\n");
echo("Thus, the sum square difference of the sum of the squares and the square of the sum is : $squareSum - $regularSum = $diference\n");
