<?php
$start_time = microtime(true); 
include './functions/fibo.php';

function descriptionInput(){
    echo "Please choose a number to find the sum of the even valued term of the Fibonacci sequence bellow this number <i>(Assuming the sequence starts by 1, 2 ...)</i>";
    return 0;
}

function evenFibo($input){
    $evenSum = fibo($input, 'evenSum');
    return $evenSum;
}

function descriptionOutput($input, $output){
    global $start_time;
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo"The sum of all even-valued in the Fibonacci sequence below $input is $output";
    echo"<p>Execution time : $time s</p>"; 
    return 0;
}

function moreInfos(){
    echo '<a class="" aria-current="" href="https://projecteuler.net/problem=2" target="_blank">Page of the problem on Project Euler </a>';
}