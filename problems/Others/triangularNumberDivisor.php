<?php
$start_time = microtime(true); 
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
    global $start_time;
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo "The first triangular number to have over $input divisors is $output";
    echo"<p>Execution time : $time s</p>"; 
    return 0;
}
