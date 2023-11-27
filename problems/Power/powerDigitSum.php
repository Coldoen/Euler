<?php
$start_time = microtime(true); 

function descriptionInput(){
    echo "Please choose a number to find the sum of the digits of 2 power this number";
    return 0;
}

function powerDigitSum($input){
    //Merge this function with powerfulDigitSum
    $sum = 0;

    $accurate = bcpow('2', $input);
    $formatted_number = ltrim($accurate, '0'); 


    for ($i = 0; $i < strlen($formatted_number); $i++) {
        $sum = bcadd($sum, $formatted_number[$i]);
    }
    return $sum;
}

function descriptionOutput($input, $output){
    global $start_time;
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo "The sum of the digits of 2". '<sup>'. $input . '</sup> ' . " is $output";
    echo"<p>Execution time : $time s</p>"; 
    return 0;
}

function moreInfos(){
    echo '<a class="" aria-current="" href="https://projecteuler.net/problem=16" target="_blank">Page of the problem on Project Euler </a>';
}
?>