<!-- Won't compute any largest prime factor if $break >= 1000000
Need to be optimized or removed -->

<?php include './functions/checkPrime.php';
function largestPrimeFactor($input){

    $primeFactor = 0;

    for($i = 1 ; $i != $input ; $i++){
        if(checkPrime($i) == true){
            if($input % $i == 0){
                $primeFactor = $i;
            }
        }
    }
    return $primeFactor;
}

