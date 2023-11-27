<?php
$start_time = microtime(true); 
include './functions/palindrom.php';

function descriptionInput(){
    echo "Please choose a number to find the largest palindrome made from the product of this number";
    return 0;
}

function largestPalindromProduct($input){
    $result = palindrom($input, 'array');
    return $result;
}

function descriptionOutput($input, $output){
    $result = $output['result'];
    $xYValues = $output['xYValues'];

    $x = isset($xYValues['x']) ? $xYValues['x'] : 0;
    $y = isset($xYValues['y']) ? $xYValues['y'] : 0;

    global $start_time;
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo("The largest palindrom of the multiplication of $input is $result obtained by $x * $y");
    echo"<p>Execution time : $time s</p>s"; 
    return 0;
}

function moreInfos(){
    echo '<a class="" aria-current="" href="https://projecteuler.net/problem=4" target="_blank">Page of the problem on Project Euler </a>';
}
