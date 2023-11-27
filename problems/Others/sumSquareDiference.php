<?php
$start_time = microtime(true); 

function descriptionInput(){
    echo "Please choose a number to find the sum square difference of this number";
    return 0;
}

function sumSquareDiference($input) {
    $regularSum = 0;
    $squareSum = 0;

    for ($i = 0; $i <= $input; $i++) {
        $regularSum += $i ** 2;
        if ($i >= $input) {
            break;
        }
    }

    for ($j = 0; $j <= $input; $j++) {
        $squareSum += $j;
        if ($j >= $input) {
            break;
        }
    }

    $squareSum = pow($squareSum, 2);
    $difference = $squareSum - $regularSum;

    return $difference;
}

function descriptionOutput($input, $output){
    //Maybe have some more details of the computation ?
    global $start_time;
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo("The sum square difference of $input is $output");
    echo"<p>Execution time : $time s</p>"; 
    return 0;
}

function moreInfos(){
    echo '<a class="" aria-current="" href="https://projecteuler.net/problem=6" target="_blank">Page of the problem on Project Euler </a>';
}
?>