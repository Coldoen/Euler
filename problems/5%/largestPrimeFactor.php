<!-- Won't compute any largest prime factor if $break >= 1000000 -->

<?php include '../../functions/checkPrime.php';

$primeFactor = 0;
$break =  8675;
// $break = (int)readline('Please choose a number to find its largest prime factor : ');

for($i = 1 ; $i != $break ; $i++){
    if(checkPrime($i) == true){
        if($break % $i == 0){
            $primeFactor = $i;
        }
    }
}

echo("The largest prime factor of $break is $primeFactor");
