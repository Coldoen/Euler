<?php
$start_time = microtime(true); 

function descriptionInput(){
    echo "Please choose a number to find the sum of the digits in the factorial of this number";
    return 0;
}

function factorialDigitSum($input){
    $factorial = '1';

    for ($i = $input; $i >= 2; $i--) {
        $factorial = bcmul($factorial, $i);
    }
    
    $sum = '0';

    for ($j = 0; $j < strlen($factorial); $j++) {
        $sum = bcadd($sum, $factorial[$j]);
    }
    return $sum;
}

function descriptionOutput($input, $output){
    global $start_time;
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo "The sum of the digits of $input! is $output";
    echo"<p>Execution time : $time s</p>"; 
    return 0;
}

function moreInfos(){
    echo '<a class="" aria-current="" href="https://projecteuler.net/problem=20" target="_blank">Page of the problem on Project Euler </a>';
}
?>