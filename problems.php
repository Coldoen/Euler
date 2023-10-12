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
            "Largest palindrom product",
            "Largest prime factor",
            "Sum square difference",
            "Sum of multiples of 3 and 5 below a number"
        ],
        '15%' => [
            "Another problem 1",
            "Another problem 2",
            // Add more problems here
        ],
        // Add more difficulty levels and problems here
    ];
}

// Define a function to display problems for the selected difficulty
function displayProblems($selectedDifficulty, $problems)
{
    if (isset($problems[$selectedDifficulty])) {
        echo '<div class="problem-list">';
        foreach ($problems[$selectedDifficulty] as $problemTitle) {
            echo '<div class="problem">';
            echo '<a href="problems.php?difficulty=' . urlencode($selectedDifficulty) . '&title=' . urlencode($problemTitle) . '">' . $problemTitle . '</a>';
            echo '</div>';
        }
        echo '</div>';
    }else{
        echo '<div class="alert alert-warning" role="alert">
  No problems have been found for this difficulty!
</div>';
    }
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
        displayProblems($selectedDifficulty, $problems);
    } ?>
</div>

<?php require './template/footer.php'; ?>
