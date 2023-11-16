<?php
$start_time = microtime(true); 
include './functions/fibo.php';

function descriptionInput(){
    echo "Please choose a number to find the index of the first term in the Fibonacci sequence to contain that many digits";
    return 0;
}

function nDigitIndexFibo($input){
    $index = fibo($input, 'index');
    return $index;
}

function descriptionOutput($input, $output){
    global $start_time;
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo"The index of the first Fibonacci number containing $input digits is $output";
    echo"<p>Execution time : $time s</p>"; 
    return 0;
}
