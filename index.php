<?php
    include_once 'header.php';
?>

<section>
    <?php
        if(isset($_SESSION["useruid"])){
            echo"<p>Welcome " . $_SESSION["useruid"] . "</p>";
        }
        else{
            echo"<p>AAAAAAAAAA</p>";
        }
    ?>
</section>

<?php
include_once 'footer.php';
?>