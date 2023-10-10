<?php
$largestPalindrom = 0;

for($i = 100 ; $i < 1000 ; $i++){
    for($j = 100 ; $j < 1000 ; $j++){
        $temp = $j * $i;
        if($temp == strrev($temp) && $temp > $largestPalindrom){
            $largestPalindrom = $temp;
            $largestX = $i;
            $largestY = $j;
        }
    }
}

echo("The largest palindrom of the multiplication of two 3-digit number is $largestPalindrom obtained by $largestX * $largestY");
