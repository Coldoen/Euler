<?php
$start_time = microtime(true); 

function descriptionInput(){
    echo "Please choose a number to find the biggest sum of the digits of 
    a". '<sup>'. "b" .'</sup>' ." <i>(where a and b are not greater than your number)</i>";
    return 0;
}

function powerfulDigitSum($input){
    //Merge this function with powerDigitSum 
    $sum = 0;
    for($a = 2; $a < $input; $a++){
        for($b = 1; $b < $input; $b++){
            $tempSum = 0;
            $accurate = bcpow($a, $b);
            $formatted_number = ltrim($accurate, '0'); 
            for ($i = 0; $i < strlen($formatted_number); $i++) {
                $tempSum = bcadd($tempSum, $formatted_number[$i]);
            }
            if($tempSum > $sum){
                $sum = $tempSum;
            }
        }
    }
    return $sum;
}

function descriptionOutput($input, $output){
    global $start_time;
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo("The maximaldigital sum of a". '<sup>'. "b" .'</sup>' ." is $output");
    echo"<p>Execution time : $time s</p>"; 
    return 0;
}

function moreInfos(){
    echo '<a class="" aria-current="" href="https://projecteuler.net/problem=56" target="_blank">Page of the problem on Project Euler </a>';
}
?> 
