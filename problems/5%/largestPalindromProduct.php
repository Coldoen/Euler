<?php

function descriptionInput(){
    echo "Please choose a number to find the largest palindrome made from the product of this number";
    return 0;
}

function largestPalindromProduct($input){
    $largestPalindrom = 0;
    $xYValues = array();
    for($i = 0 ; $i < $input ; $i++){
        for($j = 0 ; $j < $input ; $j++){
            $temp = $j * $i;
            if($temp == strrev($temp) && $temp > $largestPalindrom){
                $largestPalindrom = $temp;
                $xYValues = array('x' => $i, 'y' => $j);
            }
        }
    }
    return array('result' => $largestPalindrom, 'xYValues' => $xYValues);
}

function descriptionOutput($input, $output){
    $result = $output['result'];
    $xYValues = $output['xYValues'];

    $x = isset($xYValues['x']) ? $xYValues['x'] : 0;
    $y = isset($xYValues['y']) ? $xYValues['y'] : 0;

    echo("The largest palindrom of the multiplication of $input is $result obtained by $x * $y");
        return 0;
    }

