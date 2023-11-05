<?php
// Choose a number not bigger than 20 
$break = (int)readline('Please choose a number to find the smallest multiple off all natural numbers from one to your number : ');
$smallestMult = $break;

while(true){
    for($i = 1 ; $i != $break ; $i++){
        if($smallestMult % $i != 0){
            $smallestMult++;
            $i = 1;
        }
    }
    echo("The smallest multiple off all first $break natural numbers is $smallestMult\n");
    break;
}
