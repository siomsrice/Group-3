<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Builder</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="reset.css">
    <script src="https://kit.fontawesome.com/15ed808bde.js" crossorigin="anonymous"></script>
    <!--used for importing icons-->
</head>    

<body>
        <header id="mainHeader">
                <a href="index.php"><img class="logo" src="logo.png" alt="logo"></a>
                 <nav>
                      <ul class="navLinks">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>

                        <?php //code to check if user is logged in
                            if(isset($_SESSION["useruid"])){
                                echo "<li><a href='profile.php'>Profile</a></li>";
                                echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                            }

                            else{
                                echo "<li><a href='signup.php'>Signup</a></li>";
                                echo "<li><a href='login.php'>Login</a></li>";
                            }
                        ?>

                    </ul>
                </nav>
                <a class="cta" href="#"><button>Contact</button></a>
            </nav>
        </header>

        <div class="wrapper">