<?php
include './functions/countDivisors.php';

function descriptionInput(){
    echo "Please choose a number";
    return 0;
}

function triangularNumberDivisor($input){

    $num = 1;
    $triangle = 0;

    while (true) {
        $triangle += $num;
        $num++;

        $divisors = countDivisors($triangle);

        if ($divisors > $input) {
            break;
        }
    }
    return $triangle;
}

function descriptionOutput($input, $output){
    echo "The first triangular number to have over $input divisors is $output";
    return 0;
}