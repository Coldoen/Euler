<?php 
$title = "Solution of the problem";
$code;
if (isset($_GET['title'])) {
    $problemTitle = $_GET['title'];
    $title = "Solution of the $problemTitle problem";
}

if (isset($_GET['code'])) {
    $problemCode = $_GET['code'];
    $code =  $problemCode;
}

require './template/header.php'; 
?>
        <!-- Page content-->
        <div class="text-center mt-5">
            <h3><?php echo $problemTitle?></h3>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Please choose a number to find its <?php echo strtolower($problemTitle)?> : </label>
                    <input type="number" min="0" class="" id="userInput" aria-describedby="emailHelp">
                    <button type="submit" class="btn btn-primary">Compute</button>
                </div>
                <div class="mb-3" hidden>
                    <h3> Solution</h3>
                    <p>The <?php echo strtolower($problemTitle)?> of userInput is : </p>
                </div>
            </form>
            <h3>Learn more about the problem</h3>
        </div>
<?php require './template/footer.php'; ?>
