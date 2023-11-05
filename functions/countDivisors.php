<?php
function countDivisors($n) {
    $divisors = 0;
    for ($i = 1; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            $divisors += 2; // Count both divisors ($i and $n / $i)
        }
    }
    if ($i * $i == $n) {
        $divisors--; // If $n is a perfect square, subtract one divisor
    }
    return $divisors;
}
?>