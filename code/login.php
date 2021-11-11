<?php

session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    //$email = $_POST['email'];

    if(!empty($user_name) && !empty($password)){

        //read from db
        $query = "select * from users where user_name = '$user_name' limit 1";
       
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0) #check if the result is postive
            { 
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] === $password)
                {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        } 
        echo "Wrong username or password!";
    }   
    
    else
    {
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
    <title>Login</title>
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
                    <div style="font-size: 20px; margin:10px; font-weight:500; color:black">Login</div>
                    <input id="text" type="text" name="user_name"> <br><br>
                    <input id="text" type="password" name="password"> <br><br>
                

                    <input id="button" type="submit" value="Login"> <br><br>
                    <a href="signup.php">Click to Sign Up</a>
                </form>

        </div>
</body>
</html>