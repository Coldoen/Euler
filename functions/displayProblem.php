<?php
function displayProblems($selectedDifficulty, $problems)
{
    if (isset($problems[$selectedDifficulty])) {
        echo '<div class="problem-list">';
        $counter = 0;

        foreach ($problems[$selectedDifficulty] as [$problemTitle, $problemCode]) {
            if ($counter % 3 === 0) {
                // Start a new row
                echo '<div class="row">';
            }

            echo '<div class="col-md-4 problem">';
            echo '<a href="solution.php?title=' . urlencode($problemTitle). '&category=' . $selectedDifficulty. '&code=' . $problemCode .'">' . $problemTitle . '</a>';
            echo '</div>';

            $counter++;

            if ($counter % 3 === 0) {
                // Close the row after every 3 problems
                echo '</div>';
            }
        }

        // Close the row if it's not closed yet
        if ($counter % 3 !== 0) {
            echo '</div>';
        }

        echo '</div>';
    } else {
        echo '<div class="alert alert-warning" role="alert">
  No problems have been found for this difficulty!
</div>';
    }
}
?>
