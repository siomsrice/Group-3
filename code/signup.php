<?php
    include_once 'header.php';
?>

    <section class="signup-form">
        <h2>Sign Up</h2>
            <div class="signup-form-form">
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="name" placeholder="full name...">
                    <input type="text" name="email" placeholder="email...">
                    <input type="text" name="uid" placeholder="username...">
                    <input type="password" name="pwd" placeholder="password...">
                    <input type="password" name="pwdrepeat" placeholder="repeat password...">
                    <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>

        <?php
        if(isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Please fill up the fields</p>";
                
            }

            else if($_GET["error"] == "invaliduid"){
                echo "<p>enter a proper username</p>";
            }

            else if($_GET["error"] == "usernametaken"){
                echo "<p>username already exist, please try a new one</p>";
            }

            else if($_GET["error"] == "invalidemail"){
                echo "<p>enter a proper email</p>";
            }

            else if($_GET["error"] == "passwordsdontmatch"){
                echo "<p>password doesnt match</p>";
            }

            else if($_GET["error"] == "stmtfailed"){ 
                echo "<p>something went wrong, please try again</p>";
            }

            else if($_GET["error"] == "none"){ 
                echo "<p>you have signed up</p>";
            }
        }

    ?>
    </section>

    

<?php
    include_once 'footer.php';
?>