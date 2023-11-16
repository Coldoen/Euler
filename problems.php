<?php
$title = "Browse problems";
require './template/header.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the selected difficulty level
    $selectedDifficulty = $_POST['difficulty'];

    // Fetch problems based on the selected difficulty level from your data source
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
}
?>

<!-- Page content-->
<div class="text-center mt-5">
    <div style="display: flex; align-items: center; justify-content: space-between;">
        <p style="width: 70%;">The different problems are (for now) sorted according to their level of difficulty based on project Euler website's notation</p>
        <form method="post" action="" style="width: 25%;">
            <select class="form-select" aria-label="Default select example" name="difficulty">
                <option selected>Choose a difficulty</option>
                <option value="Prime">Prime</option>
                <option value="Fibonacci">Fibonacci</option>
                <option value="Palindrom">Palindrom</option>
                <option value="Factorial">Factorial</option>
                <option value="Others">Others</option>
            </select>
            <input type="submit" value="Show Problems">
        </form>
    </div>

    <?php if (isset($problems)) {
        require_once("./functions/displayProblem.php"); displayProblems($selectedDifficulty, $problems);
    } ?>
</div>

<?php require './template/footer.php'; ?>
