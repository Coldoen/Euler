<?php
$start_time = microtime(true); 
include './functions/palindrom.php';

function descriptionInput(){
    echo "Please choose a number to find the sum of all numbers which are palindromic in base 10 and 2";
    return 0;
}

function doubleBasePalindrom($input){
    $result = palindrom($input, 'sum');
    return $result;
}

function descriptionOutput($input, $output){
    global $start_time;
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo"The sum of all numbers less than $input which are plaindromic in base 10 and 2 is $output";
    echo"<p>Execution time : $time s</p>"; 
    return 0;
}

function moreInfos(){
    echo '<a class="" aria-current="" href="https://projecteuler.net/problem=36" target="_blank">Page of the problem on Project Euler </a>';
}
?>