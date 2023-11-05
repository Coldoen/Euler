<?php 
function crible($num)
{
    $isPrime = array_fill(2, $num - 1, true);

    // Iterate through the numbers and mark non-prime numbers
    for ($p = 2; $p * $p <= $num; $p++) {
        if ($isPrime[$p]) {
            for ($i = $p * $p; $i <= $num; $i += $p) {
                $isPrime[$i] = false;
            }
        }
    }

    // Collect the prime numbers in an array
    $primes = array();
    for ($i = 2; $i <= $num; $i++) {
        if ($isPrime[$i]) {
            $primes[] = $i;
        }
    }

    return $primes;
}