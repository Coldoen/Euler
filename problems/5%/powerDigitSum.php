<?php

function descriptionInput(){
    echo "Please choose a number to find the sum of the digits of 2 power this number";
    return 0;
}

function powerDigitSum($input){
    $sum = 0;

    $result = 2**$input;

    $accurate = bcpow('2', $input);
    $formatted_number = ltrim($accurate, '0'); 


    for ($i = 0; $i < strlen($formatted_number); $i++) {
        $sum = bcadd($sum, $formatted_number[$i]);
    }
    return $sum;
}

function descriptionOutput($input, $output){
    echo "The sum of the digits of 2". '<sup>'. $input . '</sup>' . "is $output";
    return 0;
}
?>