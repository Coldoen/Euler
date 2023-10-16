<?php 
$title = "Solution of the problem";
if (isset($_GET['title'])) {
    $problemTitle = $_GET['title'];
    $title = "Solution of the $problemTitle problem";
}

require './template/header.php'; 
?>
        <!-- Page content-->
        <div class="text-center mt-5">
            <p> Hello <?php echo $problemTitle?> </p>
        </div>
<?php require './template/footer.php'; ?>
