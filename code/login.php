<?php
    include_once 'header.php';
?>

    <section class="signup-form">
        <h2>Log in</h2>
        <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="username/email...">
                <input type="password" name="pwd" placeholder="password...">
                <button type="submit" name="submit">Log in</button>
        </form>

        <?php
        if(isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Please fill up the fields</p>";
            }

            else if($_GET["error"] == "invalidlogin"){
                echo "<p>incorrect information</p>";
            }
        }

    ?>
    </section>

     

<?php
    include_once 'footer.php';
?>