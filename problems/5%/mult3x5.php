<?php
function descriptionInput(){
    echo "Please choose a number to find the sum of all its multiple of 3 and 5 bellow this number";
    return 0;
}

function mult3x5($input){
    $sum = 0;

    for($i = 0 ; $i != $input ; $i++){
        if($i % 3 == 0 || $i % 5 == 0){
            $sum += $i;
        }
    }
    return $sum;
}
function descriptionOutput($input, $output){
    echo("The sum of all multiples of 3 and 5 bellow $input is $output");
    return 0;
}
