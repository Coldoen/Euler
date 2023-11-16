<?php

function checkPalindrom($input){
    if($input == strrev($input)){
        return true;
    }
}

function palindrom($input, $returnType = 'both'){
    if($returnType == 'array'){
        //Part solving largest palindrom product
        $largestPalindrom = 0;
        $xYValues = array();
        for($i = 0 ; $i < $input ; $i++){
            for($j = 0 ; $j < $input ; $j++){
                $temp = $j * $i;
                if(checkPalindrom($temp) && $temp > $largestPalindrom){
                    $largestPalindrom = $temp;
                    $xYValues = array('x' => $i, 'y' => $j);
                }
            }
        }
        return array('result' => $largestPalindrom, 'xYValues' => $xYValues);
    }
    elseif($returnType == 'sum'){
        //Part solving double base palindrom
        $sum = 0;
        for($i = 1; $i < $input; $i++){
            if(checkPalindrom($i) && checkPalindrom(decbin($i))){
                $sum += $i;
            }
        }
        return $sum;
    }
    else{
        return 0;
    }
}