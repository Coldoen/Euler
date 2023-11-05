<?php

for($c = 0 ; $c <= 1000 ; $c++){

    for($b = 0 ; $b < $c ; $b++){

        for($a = 0 ; $a < $c  ; $a++){

            if($a**2 + $b**2 == $c**2 && $a + $b +$c == 1000){
                $result = $a*$b*$c;
                echo("The only pythagorean triplet where the sum of the 3 numbers equals 1000 is for a = $a, b = $b and c = $c and the value of abc is $result\n");
                return 0;
            }
        }
    }

}