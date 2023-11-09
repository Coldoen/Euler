<?php include './functions/checkPrime.php';

function descriptionInput(){
    echo "Please choose a number";
    return 0;
}

function tenThousandOnePrime($input){
    $nbPrime = 0;
    $number = 1;

    while($nbPrime != $input){
        $number++;
        if(checkPrime($number) == true){
            $nbPrime++;
        }
    }
    return $number;
}

function descriptionOutput($input, $output){
    echo("The $input-th prime number is $output");
    return 0;
}