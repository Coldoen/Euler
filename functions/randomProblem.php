<?php
function generateRandomProblemLink() {
    // Liste des problèmes disponibles avec leurs titres et codes
    $problems = [
        'Prime' => [
            ["Summation of primes", "sumPrime"],
            ["List of primes", "tenThousandOnePrime"],
            ["Largest prime factor", "largestPrimeFactor"],
        ],
        'Fibonacci' => [
            ["Even Fibonacci numbers", "evenFibo"],
            ["Indexing Fibonacci numbers","nDigitIndexFibo"]
        ],
        'Palindrom' => [
            ["Largest palindrom product","largestPalindromProduct"],
            ["Double-base palindrom","doubleBasePalindrom"]
        ],
        'Factorial' => [
            ["Factorial digit sum","factorialDigitSum"]
        ],
        'Others' => [
            ["Sum square difference", "sumSquareDiference"],
            ["Sum of multiples of 3 and 5 below a number", "mult3X5"],
            ["Smallest multiple", "smallestMultiple"],
            ["Highly Divisible Triangular Number", "triangularNumberDivisor"],
            ["Power digit sum","powerDigitSum"],
            ["Pythagorean Triplet","pythagoreanTriplet"],
            ["Longest collatz sequence","longestCollatzSequence"],
            ["Amicable numbers","amicable"],
            ["Self powers", "SelfPower"]
        ],
    ];
    
    // Obtenir la date actuelle
    $currentDate = new DateTime();
    $currentDay = $currentDate->format('Ymd');

    // Utiliser le jour comme graine pour la génération aléatoire
    srand($currentDay);

    // Obtenir les catégories disponibles
    $categories = array_keys($problems);
    
    // Générer un numéro de catégorie aléatoire
    $maxCategoryNumber = count($categories) - 1;
    $randomCategoryIndex = rand(0, $maxCategoryNumber);
    $randomCategory = $categories[$randomCategoryIndex];

    // Récupérer les problèmes de la catégorie aléatoire
    $problemsInCategory = $problems[$randomCategory];
    
    // Obtenir un problème aléatoire dans la catégorie choisie
    $maxProblemNumber = count($problemsInCategory) - 1;
    $randomProblemIndex = rand(0, $maxProblemNumber);
    $randomProblem = $problemsInCategory[$randomProblemIndex];
    $randomProblemTitle = $randomProblem[0];
    $randomProblemCode = $randomProblem[1];

    // Construire le lien avec le numéro de problème aléatoire
    $problemLink = "http://localhost:8000/solution.php?title=" . urlencode($randomProblemTitle). "&category=" . urlencode($randomCategory). "&code=" . $randomProblemCode;

    return $problemLink;
}
?>