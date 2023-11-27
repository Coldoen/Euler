<?php
$start_time = microtime(true); 

function descriptionInput(){
    echo "Please choose a number to find which number from 1 to your number produces the longest Collatz chain <i> (e.i the number of terms before 'landing' on 1) </i>";
    return 0;
}

function longestCollatzSequence($input){
    $biggestChain = 0;
    $numberChain = 0;

    for($i = $input ; $i >= 4 ; $i--){
        $Collatz = $i;
        $counter = 0;
    
        while($Collatz != 1){
            if($Collatz % 2 == 0){
                $Collatz = $Collatz / 2;
                $counter++;
            }else{
                $Collatz = 3 * $Collatz + 1;
                $counter++;
            }
        }

        if($counter > $biggestChain){
            $biggestChain = $counter;
            $numberChain = $i;
        }
    }
    return array(
        'result' => $numberChain,
        'length' => $biggestChain);
}

function descriptionOutput($input, $output){
    global $start_time;
    $result = $output['result'];
    $length = $output['length'];
    echo "The number bellow $input that produces the biggest Collatz chain is $result with a chain of $length\n";
    require_once './functions/computeTime.php'; $time = computeTime($start_time);
    echo"<p>Execution time : $time s</p>"; 
}

function moreInfos(){
    echo '<a class="" aria-current="" href="https://projecteuler.net/problem=14" target="_blank">Page of the problem on Project Euler </a>';
}
?>