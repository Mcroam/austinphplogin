<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP project 1</title>
    </head>
    <body>
        <nav>
            <div class="wrapper">
                <a href="index.php"></a>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="discover.php">ABOUT US</a></li>
                    <li><a href="blog.php">FIND BLOGS</a></li>
                    <?php
                    if(isset($_SESSION["userun"])){
                        echo "<li><a href='profile.php'>Profile page</a></li>";
                        echo "<li><a href='logout.php'>Log out</a></li>";
                    }
                    else {
                        echo "<li><a href='signup.php'>Sign up</a></li>";
                        echo "<li><a href='login.php'>Log in</a></li>";
                    }
                    ?>
                    <li><a href="signup.php">SIGN UP</a></li>
                    <li><a href="login.php">LOG IN</a></li>
                </ul>
            </div>
        </nav>
<div class="wrapper">