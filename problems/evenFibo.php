<?php
$first = 1;
$second = 2;
$third = $first + $second;
$evenSum = 2;

while($third <= 4000000){
    if($third % 2 == 0){
        $evenSum += $third;
    };
    $first = $second;
    $second = $third;
    $third = $first + $second;
    }

echo("The sum of all even-valued in the Fibonacci sequence below 4 million is $evenSum");