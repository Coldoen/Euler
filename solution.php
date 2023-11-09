<?php
session_start();

$problem = "";
$problemFilePath = '';
$code;
$result = null;

if (isset($_GET['title'])) {
    $problemTitle = $_GET['title'];
    $title = "Solution of the $problemTitle problem";
    $problem = $problemTitle;
}

if (isset($_GET['code'])) {
    $problemCode = $_GET['code'];
    $code =  $problemCode;
}

$problemFilePath = 'problems/5%/' . $code . '.php';
require($problemFilePath);

if (isset($_POST['break']) && !empty($code)) {
    // Construct the path to the problem file based on $code
    $break = (int)$_POST['break'];

    
    // Store $break in the session
    $_SESSION['break'] = $break;
}

require './template/header.php'; 
?>
<!-- Page content-->
<div class="text-center mt-5">
    <h3><?php echo $problem?></h3>
    <!-- In form, concatenate the link of solution with the value of code and problem to keep this value in the file -->
    <form method="POST" action=""> 
        <div class="mb-3">
            <!-- In label, reformulate for some problem to be more understandable -->
            <label for="break" class="form-label"><?php descriptionInput()?> : </label>
            <input type="number" min="0" id="break" name="break" required>
            <input type="hidden" name="title" value="<?php echo htmlspecialchars($problemTitle) ?>">
            <input type="hidden" name="code" value="<?php echo htmlspecialchars($problemCode) ?>">
            <button type="submit" class="btn btn-primary">Compute</button>
        </div>
    </form>
    <!-- Hide the solution part before clicking on 'Compute' and if the run time is > instantanous, add a loading sign 
    Also need to reformulate some solution's label to be more understandable-->
    <div class="mb-3">
        <h3>Solution</h3>
        <?php
        // Check if the result is available in the session and display it
        if (isset($_POST['break'])) {
            $result = $code($break);
            descriptionOutput($break, $result);
        }        
        ?>
    </div>
    <h3>Learn more about the problem</h3>
</div>
<?php require './template/footer.php'; ?>
