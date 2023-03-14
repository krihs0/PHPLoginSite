<?php
    include_once 'header.php';
?>

<div class="center signupWrapper">
<section class="signupForm">
    <h2 class="signupForm__h2">Sign up</h2>
    <form class="signupForm__form" action="includes/signup.inc.php" method="post">
        <input class="signupForm__form__input" type="text" name="name" placeholder="Full name...">
        <input class="signupForm__form__input" type="text" name="email" placeholder="Email...">
        <input class="signupForm__form__input" type="text" name="uid" placeholder="Username...">
        <input class="signupForm__form__input" type="password" name="pwd" placeholder="Password...">
        <input class="signupForm__form__input" type="password" name="pwdrepeat" placeholder="Repeat password...">
        <button class="signupForm__form__button" type="submit" name="submit">Sign up</button>
    </form>
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }
            else if($_GET["error"] == "invaliduid"){
                echo "<p>Choose a proper username!</p>";
            }
            else if($_GET["error"] == "invalidemail"){
                echo "<p>Choose a proper email!</p>";
            }
            else if($_GET["error"] == "passwordsdontmatch"){
                echo "<p>Passwords don't match!</p>";
            }
            else if($_GET["error"] == "stmtfailed"){
                echo "<p>Something went wrong, try again!</p>";
            }
            else if($_GET["error"] == "usernametaken"){
                echo "<p>Username already taken!</p>";
            }
            else if($_GET["error"] == "none"){
                echo "<p>You have signed up!</p>";
            }
        }
    ?>
</section>
</div>


<?php
include_once 'footer.php';
?>