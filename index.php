<?php require './template/header.php'; 
require_once('./functions/randomProblem.php');
?>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h2>“Logic is the foundation of the certainty of all the knowledge we acquire.” </br>
                ― Leonhard Euler</h2>
                <div class="lead">
                    <h3>A webstie hosting some Euler project problems solved using PHP</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec velit nulla. Maecenas eu rhoncus nisl. Sed a dui posuere, vulputate neque quis, tempor justo. Donec porta vulputate lorem et condimentum. Nulla ligula est, efficitur in porta at, dapibus eget sapien. Phasellus pulvinar nec elit a vehicula. Fusce ultrices metus vel dolor condimentum, non venenatis augue auctor. Donec blandit, augue vitae bibendum elementum, libero erat semper odio, ac elementum eros ante et massa.</div>
            <div class="row align-item-end">
            <div class="col">
                    <a class="" aria-current="" href="https://projecteuler.net" target="_blank"><img src="">Learn more about Project Euler</a>
                </div>
                <div class="col">
                    <a class="" aria-current="" href="<?php echo generateRandomProblemLink();?>"><img src="">Today's problem featured</a>
                </div>
            </div>
        </div>
<?php require './template/footer.php'; ?>
