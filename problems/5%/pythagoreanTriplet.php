<?php

function descriptionInput(){
    echo "Please choose a number to find if a pythagorean triplet equals this number";
    return 0;
}

function pythagoreanTriplet($input){
    $result = 0;
    $abcValues = array();

    for($c = 0 ; $c <= $input ; $c++){

        for($b = 0 ; $b < $c ; $b++){

            for($a = 0 ; $a < $b ; $a++){

                if($a**2 + $b**2 == $c**2 && $a + $b +$c == $input){
                    $result = $a*$b*$c;
                    $abcValues = array('a' => $a, 'b' => $b, 'c' => $c);
                    break 3; // Break out of all three loops once the triplet is found
                }else{
                    $result = null;
                }
            }
        }
    }
    return array('result' => $result, 'abcValues' => $abcValues);
}

function descriptionOutput($input, $output){
    $result = $output['result'];
    $abcValues = $output['abcValues'];
    if($result != null){
        extract($abcValues);
        echo("The only pythagorean triplet where the sum of the 3 numbers equals $input is for a = $a, b = $b and c = $c and the value of abc is $result\n");
    }else{
        echo("There are no pythagorean triplet such that the sum of the 3 numbers equals $input");
    }
    return 0;
}