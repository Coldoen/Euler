<?php include '../../functions/crible.php';

$sum = 0;
$break = (int)readline('Please choose a number to find the sum of all prime number bellow this number : ');

$primes = crible($break);
for($i = 0 ; $i <= count($primes) ;$i++){
    $sum += $primes[$i];
}

echo("The sum of all multiples of 3 and 5 bellow $break is $sum");


