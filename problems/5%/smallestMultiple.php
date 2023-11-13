<?php
$break = (int)readline('Please choose a number to find the smallest multiple of all natural numbers from 1 to your number: ');

function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}

$smallestMult = 1;

for ($i = 2; $i <= $break; $i++) {
    $smallestMult = lcm($smallestMult, $i);
}

echo "The smallest multiple of all natural numbers from 1 to $break is $smallestMult\n";
?>