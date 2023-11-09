<?php
function descriptionInput(){
    echo "Please choose a number to find the sum of the even valued term of the Fibonacci sequence bellow this number";
    return 0;
}

function evenFibo($input){
    $first = 1;
    $second = 2;
    $third = $first + $second;
    $evenSum = 2;

    while($third <= $input){
        if($third % 2 == 0){
            $evenSum += $third;
        };
        $first = $second;
        $second = $third;
        $third = $first + $second;
    }
    return $evenSum;
}

function descriptionOutput($input, $output){
    echo("The sum of all even-valued in the Fibonacci sequence below $input is $output");
        return 0;
    }
