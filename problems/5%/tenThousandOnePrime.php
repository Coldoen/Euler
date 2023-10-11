<?php include '../../functions/checkPrime.php';
$nbPrime = 0;
$number = 1;

$break = (int)readline('Please choose a number : ');
while($nbPrime != $break){
    $number++;
    if(checkPrime($number) == true){
        $nbPrime++;
    }
}

echo("The $nbPrime-th prime number is $number");