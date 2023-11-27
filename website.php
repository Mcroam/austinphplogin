<?php
    include_once 'header.php';
?>

     <section class="index-intro">
     <?php
                        if(isset($_SESSION["userun"])){
                        echo "<p> Hello " .$_SESSION["userun"]. "</p>";
                    }
    ?>
        <h1>Introduction</h1>
        <p>explain</p>
    </section>
    <section>
        <section class="index-categories">
            <h2>Basic</h2>
            <div class="index-categories list">
                <div>
                    <h3>fun</h3>
                </div>
                <div>
                    <h3>serious</h3>
                </div>
                <div>
                    <h3>boring</h3>
                </div>
            </div>
        </section>
    </section>

<?php
    include_once 'footer.php';
?>