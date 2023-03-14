<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:wght@200;400;500&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginSite</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/basics.css">
</head>
<body>
    <header class="header">
        <a href="index.php">
            <span class="material-symbols-outlined header__logo">cookie</span>
        </a>
        <nav class="header__nav">
            <ul>
                <?php
                    if(isset($_SESSION["useruid"])){
                        echo"<li><a href='profile.php'>Profile</a></li>";
                        echo"<li><a href='includes/logout.inc.php'>Log out</a></li>";
                    }
                    else{
                        echo"<li><a href='signup.php'>Sign up</a></li>";
                        echo"<li><a href='login.php'>Log in</a></li>";
                    }
                ?>
            </ul>
        </nav>
    </header>