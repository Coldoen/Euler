<?php
$sum = 0;
$break = (int)readline('Please choose a number to find the sum of all multiple of 3 and 5 bellow this number : ');

for($i = 0 ; $i != $break ; $i++){
    if($i % 3 == 0 || $i % 5 == 0){
        $sum += $i;
    }
}

echo("The sum of all multiples of 3 and 5 bellow $break is $sum");

