<?php
    include_once 'header.php';
?>

    <div class="index-intro">
        <?php  if(isset($_SESSION["useruid"])){
            echo "<p>Hello, ". $_SESSION["useruid"]  ."</p>";
           
        }

        else{
            echo "<li><a href='signup.php'>Signup</a></li>";
            echo "<li><a href='login.php'>Login</a></li>";
        }
        ?>

        <h1>Main Body</h1>
    </div>

<?php
    include_once 'footer.php';
?>