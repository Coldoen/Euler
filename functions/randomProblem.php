<?php
function generateRandomProblemLink() {
    // Liste des problèmes disponibles avec leurs titres et codes
    $problems = [
        ["Even Fibonacci Numbers", "evenFibo"],
        ["Largest Palindrome Product", "largestPalindromProduct"],
        ["Sum square difference", "sumSquareDiference"],
        ["Sum of multiples of 3 and 5 below a number", "mult3X5"],
        ["Summation of primes", "sumPrime"],
        ["Listing of primes", "tenThousandOnePrime"],
        ["Highly Divisible Triangular Number", "triangularNumberDivisor"],
        ["Power digit sum", "powerDigitSum"],
        ["Pythagorean Triplet", "pythagoreanTriplet"]
    ];

    // Obtenir la date actuelle
    $currentDate = new DateTime();

    // Générer un numéro de problème aléatoire basé sur la date actuelle
    $maxProblemNumber = count($problems) - 1;
    $seed = $currentDate->format('Ymd');
    srand($seed);
    $randomProblemIndex = rand(0, $maxProblemNumber);

    // Récupérer le titre et le code du problème aléatoire
    $randomProblem = $problems[$randomProblemIndex];
    $randomProblemTitle = $randomProblem[0];
    $randomProblemCode = $randomProblem[1];


    // Construire le lien avec le numéro de problème aléatoire
    $problemLink = "http://localhost:8000/solution.php?title=" . urlencode($randomProblemTitle). "&code=" . $randomProblemCode;

    return $problemLink;
}
?>