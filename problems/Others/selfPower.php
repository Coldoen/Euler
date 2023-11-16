<?php 
$start_time = microtime(true); 

function descriptionInput(){
    echo "Please choose a number to find the last ten digits of its self power serie";
    return 0;
}

function selfPower($input){
    $sum = 1;

    for($i = 2; $i <= $input; $i++){
        $value = bcpow($i, $i);
        $sum = bcadd($sum, $value);
    }

    strval($sum);
    $result = substr($sum, -10);

    return $result;
}

function descriptionOutput($input, $output){
    global $start_time;
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo("The last ten digits of the sum of the self power serie of $input is $output");
    echo"<p>Execution time : $time s</p>"; 
    return 0;
}
?> 