<?php
    include_once 'header.php';
?>

     <section class="signup-form">
        <div class="sign-form-form"></div>
        <h2>Sign  Up</h2>
        <form action="signupinclude.php" method="post">
            <input type="text" name="name" placeholder="Your Full Names..">
            <input type="text" name="Email" placeholder="Your Email..">
            <input type="text" name="un" placeholder="Username..">
            <input type="password" name="PW" placeholder="Password..">
            <input type="password" name="PWC" placeholder="Confirm Password..">
            <button type="submit" name="submit">Sign Up</button>
        </form>
        </div>
    </section>
   

<?php
    include_once 'footer.php';
?>