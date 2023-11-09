<?php
$title = "Browse problems";
require './template/header.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the selected difficulty level
    $selectedDifficulty = $_POST['difficulty'];

    // Fetch problems based on the selected difficulty level from your data source
    $problems = [
        '5%' => [
            ["Even Fibonacci Numbers", "evenFibo"],
            ["Largest Palindrome Product","largestPalindromProduct"],
            ["Sum square difference", "sumSquareDiference"],
            ["Sum of multiples of 3 and 5 below a number", "mult3X5"],
            ["Summation of primes", "sumPrime"],
            ["Listing of primes", "tenThousandOnePrime"],
            ["Highly Divisible Triangular Number", "triangularNumberDivisor"],
            ["Power digit sum","powerDigitSum"],
            ["Pythagorean Triplet","pythagoreanTriplet"]
        ],
        '15%' => [
            "Another problem 1",
            "Another problem 2",
            // Add more problems here
        ],
        // Add more difficulty levels and problems here
    ];
}
?>

<!-- Page content-->
<div class="text-center mt-5">
    <h3>Difficulty</h3>
    <form method="post" action="">
        <select class="form-select" aria-label="Default select example" name="difficulty">
            <option selected>Choose a difficulty</option>
            <option value="5%">5%</option>
            <option value="15%">15%</option>
            <option value="30%">30%</option>
        </select>
        <input type="submit" value="Show Problems">
    </form>

    <?php if (isset($problems)) {
        require_once("./functions/displayProblem.php"); displayProblems($selectedDifficulty, $problems);
    } ?>
</div>

<?php require './template/footer.php'; ?>
