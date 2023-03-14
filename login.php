<?php
    include_once 'header.php';
?>
<div class="center loginWrapper">
<section class="loginForm">
    <h2 class="loginForm__h2">Log in</h2>
    <form class="loginForm__form" action="includes/login.inc.php" method="post">
        <label for="uid">Username or Email</label>
        <input class="loginForm__form__input" type="text" name="uid" placeholder="Username/Email...">
        <label for="pwd">Password</label>
        <input class="loginForm__form__input" type="password" name="pwd" placeholder="Password...">
        <button class="loginForm__form__button" type="submit" name="submit">Log in</button>
    </form>
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }
            else if($_GET["error"] == "wronglogin"){
                echo "<p>Incorrect login information!</p>";
            }
        }
    ?>
</section>
</div>

<?php
include_once 'footer.php';
?>