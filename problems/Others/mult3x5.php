<?php
$start_time = microtime(true); 

function descriptionInput(){
    echo "Please choose a number to find the sum of all its multiple of 3 and 5 bellow this number";
    return 0;
}

function mult3x5($input){
    $sum = 0;

    for($i = 0 ; $i != $input ; $i++){
        if($i % 3 == 0 || $i % 5 == 0){
            $sum += $i;
        }
    }
    return $sum;
}
function descriptionOutput($input, $output){
    global $start_time;
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo"The sum of all multiples of 3 and 5 bellow $input is $output";
    echo"<p>Execution time : $time s</p>"; 
    return 0;
}

function moreInfos(){
    echo '<a class="" aria-current="" href="https://projecteuler.net/problem=1" target="_blank">Page of the problem on Project Euler </a>';
}