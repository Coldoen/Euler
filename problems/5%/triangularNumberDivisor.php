<?php
include '../../functions/countDivisors.php';

$divisorCount = (int)readline('Please choose a number: ');

$num = 1;
$triangle = 0;

while (true) {
    $triangle += $num;
    $num++;

    $divisors = countDivisors($triangle);

    if ($divisors > $divisorCount) {
        break;
    }
}

echo "The first triangular number to have over $divisorCount divisors is $triangle\n";
