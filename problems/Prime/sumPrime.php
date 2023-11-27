<?php 
$start_time = microtime(true); 
include './functions/crible.php';

function descriptionInput(){
    echo "Please choose a number to find the sum of all prime numbers bellow this number";
    return 0;
}

function sumPrime($input){
    $sum = 0;
    $primes = crible($input);
    for($i = 0 ; $i < count($primes) ;$i++){
        $sum += $primes[$i];
    } 
    return $sum;  
}

function descriptionOutput($input, $output){
    //Maybe have some more details of the computation ?
    global $start_time;
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo("The sum of all prime numbers bellow $input is $output");
    echo"<p>Execution time : $time s</p>"; 
    return 0;
}

function moreInfos(){
    echo '<a class="" aria-current="" href="https://projecteuler.net/problem=10" target="_blank">Page of the problem on Project Euler </a>';
}
?>