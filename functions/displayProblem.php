<?php
function displayProblems($selectedDifficulty, $problems)
{
    if (isset($problems[$selectedDifficulty])) {
        echo '<div class="problem-list">';
        foreach ($problems[$selectedDifficulty] as [$problemTitle, $problemCode]) {
            echo '<div class="problem">';
            echo '<a href="solution.php?title=' . urlencode($problemTitle) . '&code=' . $problemCode .'">' . $problemTitle . '</a>';
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