<?php 
$start_time = microtime(true); 
include './functions/checkPrime.php';

function descriptionInput(){
    echo "Please choose a number";
    return 0;
}

function tenThousandOnePrime($input){
    $nbPrime = 0;
    $number = 1;

    while($nbPrime != $input){
        $number++;
        if(checkPrime($number) == true){
            $nbPrime++;
        }
    }
    return $number;
}

function descriptionOutput($input, $output){
    global $start_time;
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo("The $input-th prime number is $output");
    echo"<p>Execution time : $time s</p>"; 
    return 0;
}

function moreInfos(){
    echo '<a class="" aria-current="" href="https://projecteuler.net/problem=7" target="_blank">Page of the problem on Project Euler </a>';
}
?>