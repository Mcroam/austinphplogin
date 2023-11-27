<?php
    include_once 'header.php';
?>

     <section class="signup-form">
        <h2>Log  In</h2>
        <div class="sign-form-form"></div>
        <form action="includes/logininclude.php" method="post">
            <input type="text" name="name" placeholder="Your Email/Username..">
            <input type="password" name="PW" placeholder="Password..">
            <button type="submit" name="submit">Log In</button>
        </form>
        </div>
        <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</P>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose valid email!</P>";
        }
        else if ($_GET["error"] == "passwordmismatch") {
            echo "<p>Password mismatch!</P>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</P>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>Usename already in use!</P>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>Successfully signed up!</P>";
        }
    }
    ?>
    </section>
   

<?php
    include_once 'footer.php';
?>