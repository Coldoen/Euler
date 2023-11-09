<?php include './functions/crible.php';

function descriptionInput(){
    echo "Please choose a number to find the sum of all prime numbers bellow this number";
    return 0;
}

function sumPrime($input){
    $sum = 0;
    $primes = crible($input);
    for($i = 0 ; $i < count($primes) ;$i++){
        $sum += $primes[$i];
    } 
    return $sum;  
}

function descriptionOutput($input, $output){
    //Maybe have some more details of the computation ?
    echo("The sum of all prime numbers bellow $input is $output");
    return 0;
}


