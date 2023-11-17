<?php 
$start_time = microtime(true);

function descriptionInput(){
    echo "Please choose a number to find the sum of all amicable numbers below this number";
    return 0;
}

function sumDivisors($num){
    $sum = 0;
    for($i = 1; $i < $num; $i++){
        if($num % $i === 0){
            $sum += $i;
        }
    }
    return $sum;
}

function amicable($input){
    $sum = 0;
    for($i = 1; $i < $input; $i++){
        $sumI = sumDivisors($i);
        $sumJ = sumDivisors($sumI);

        if($i != $sumI && $sumJ == $i){
            $sum += $i;
        }
    }
    return $sum;
}

function descriptionOutput($input, $output){
    global $start_time;
    $time = microtime(true) - $start_time;
    echo "The sum of amicable numbers within the range of $input is $output";
    echo "<p>Execution time: $time s</p>";
    return 0;
}

