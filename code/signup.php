<?php
    session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        //$email = $_POST['email'];

        if(!empty($user_name) && !empty($password)){

            //save to db
            $user_id = random_num(20);
            $query = "insert into users (user_id, user_name, password) value ('$user_id', '$user_name', '$password')";

            mysqli_query($con, $query);
            header("Location: login.php");
            die;
        }   
        
        else{
            echo "Please enter some valid information!";
        }
    }   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>
        <style tyoe="text/css"> /*temporary style*/

            /*for text boxes*/
            #text{
                height: 25px;
                border-radius: 5px;
                padding: 4px;
                border: solid thin #aaa;
                width: 100%; 
            } 

            #button{
                padding: 10px;
                width: 100px;
                color: white;
                background-color: lightgrey;
                border: none;
            }

            #box{
                background-color: lightblue;
                margin: auto;
                width: 300px;
                padding: 20px;
            }
        </style>

        <div id="box">

                <form method="post">
                    <div style="font-size: 20px; margin:10px; font-weight:500; color:black">Sign Up</div>
                    <input id="text" type="text" name="user_name"> <br><br>
                    <input id="text" type="password" name="password"> <br><br>
                

                    <input id="button" type="submit" value="Sign Up"> <br><br>
                    <a href="login.php">Click to Login</a>
                </form>

        </div>
</body>
</html>