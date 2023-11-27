<?php
session_start();

$problem = "";
$problemFilePath = '';
$code;
$category;
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

if (isset($_GET['category'])) {
    $problemCategory = $_GET['category'];
    $category =  $problemCategory;
}

$problemFilePath = 'problems/'.$category. '/' . $code . '.php';
require($problemFilePath);

if (isset($_POST['break']) && !empty($code)) {
    $break = (int)$_POST['break'];
    
    // Store $break in the session
    $_SESSION['break'] = $break;
}

require './template/header.php'; 
?>
<!-- Page content-->
<link rel="stylesheet" href="./solution.css">
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
    <div class="mb-3" style="<?php echo (empty($_POST['break']) ? 'display: none;' : ''); ?>">
        <?php
        if (isset($_POST['break'])) {
            $result = $code($break);
            $resultCount = is_array($result) ? count($result) : 1;
        }
        ?>
        <div div class="<?php echo (($resultCount === 1 || ($resultCount === 2 && $result['result'] !== null)) || !empty($result['result'])) ? 'box solution-box' : 'box no-solution'; ?>">
            <h3>Solution</h3>
            <?php
                descriptionOutput($break, $result);      
            ?>
        </div>
    </div>
    <h3>Learn more about the problem</h3>
    <?php moreInfos();?>
</div>
<?php require './template/footer.php'; ?>
