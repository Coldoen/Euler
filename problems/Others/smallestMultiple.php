<?php
$start_time = microtime(true); 

function descriptionInput(){
    echo "Please choose a number to find the smallest multiple of all natural numbers from 1 to your number";
    return 0;
}

function smallestMultiple($input){

    function gcd($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    function lcm($a, $b) {
        return ($a * $b) / gcd($a, $b);
    }

    $smallestMult = 1;

    for ($i = 2; $i <= $input; $i++) {
        $smallestMult = lcm($smallestMult, $i);
    }
    return $smallestMult;
}

function descriptionOutput($input, $output){
    global $start_time;
    echo "The smallest multiple of all natural numbers from 1 to $input is $output\n";
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo"<p>Execution time : $time s</p>"; 
}

function moreInfos(){
    echo '<a class="" aria-current="" href="https://projecteuler.net/problem=5" target="_blank">Page of the problem on Project Euler </a>';
}
?>