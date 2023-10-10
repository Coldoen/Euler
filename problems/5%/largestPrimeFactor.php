<!-- Won't compute any largest prime factor if $break >= 1000000 -->

<?php
function check_prime($num)
{
   if ($num == 1)
   return false;
   for ($j = 2; $j <= $num/2; $j++)
   {
      if ($num % $j == 0)
      return false;
   }
   return true;
}

$primeFactor = 0;
$break =  600851475143;
// $break = (int)readline('Please choose a number to find its largest prime factor : ');

for($i = 1 ; $i != $break ; $i++){
    if(check_prime($i) == true){
        if($break % $i == 0){
            $primeFactor = $i;
        }
    }
}

echo("The largest prime factor of $break is $primeFactor");
