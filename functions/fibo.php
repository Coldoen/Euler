<?php
function fibo($input, $returnType = 'both'){
    $first = 1;
    $second = 1;
    $third = $first + $second;
    $index = 3;
    $evenSum = 0;

    while(strlen($third) != $input){
        $index ++;
        $first = $second;
        $second = $third;
        $third = bcadd($first, $second);
    }

    $first = 1;
    $second = 2;
    $third = $first + $second;

    while($third < $input){
        if($third % 2 == 0){
            $evenSum += $third;
        }
        $first = $second;
        $second = $third;
        $third = $first + $second;
    }

    if ($returnType === 'evenSum') {
        return $evenSum;
    } elseif ($returnType === 'index') {
        return $index;
    } else {
        return [
            "evenSum" => $evenSum,
            "index" => $index
        ];
    }
}
