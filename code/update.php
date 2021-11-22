<?php
    include_once 'includes/dbh.inc.php';
    include_once 'header.php';
    require 'includes/function.inc.php';

    if(!isset($_SESSION["useruid"])){
        header("Location: index.php");
    }

    if(isset($_POST["update"])){
        $updateUser = mysqli_real_escape_string($conn, $_POST["updateUser_name"]);
        $updateEmail = mysqli_real_escape_string($conn, $_POST["updateEmail"]);
        $updateName = mysqli_real_escape_string($conn, $_POST["updateFull_name"]);
        $updatePwd = mysqli_real_escape_string ($conn, md5($_POST["updatePassword"]));
        $updateRepeatPwd = mysqli_real_escape_string($conn, md5($_POST["RupdatePassword"]));

        if($updatePwd === $updateRepeatPwd){
            $sql = "UPDATE users SET usersName = '$updateName', usersEmail = '$updateEmail', usersUid = '$usersUid', usersPwd = '$updatePwd' WHERE usersName ='{$_SESSION["useruid"]}'";
            $result = mysqli_query($conn, $sql);

            if($result){
                echo "<script>alert('Profile Updated Successfully.');</script>";
            }

            else{
                echo "<script>alert('Profile can not be updated.');</script>";
                echo $conn->error;
            }
        } 
        else{
            echo "<script>alert('Password doesn't match.');</script>";
        }
    }
?>

    <section class="profile-page">
        <h2>Update Profile</h2>
            <div class="wrapper">
                <form action="" method="post" enctype="multipart/form-data">
                    <?php
                        $currentUser = $_SESSION["useruid"];
                        $sql = "SELECT * FROM users WHERE usersuid = '$currentUser'";

                        $result = mysqli_query($conn,$sql);
                        $resultcheck = mysqli_num_rows($result);

                        if ($resultcheck > 0) 
                            {
                                while($row = mysqli_fetch_assoc($result))
                                    {
                                    //echo "Name: ";          echo $row['usersName'] . "<br>";
                                    ?>

                                        <div class="form-group">
                                            Username: 
                                            <input type="text" name="updateUser_name" value="<?php echo $row['usersName']; ?>" placeholder="Enter new username. . ."><br><br>
                                        </div>

                                        <div class="form-group">
                                            Email: 
                                            <input type="email" name="updateEmail" value="<?php echo $row['usersEmail']; ?>"  placeholder="Enter new email. . ."><br><br>
                                        </div>

                                        <div class="form-group">
                                            Name:
                                            <input type="text" name="updateFull_name" value="<?php echo $row['usersUid']; ?>"  placeholder="Enter new full name. . ."><br><br>
                                        </div>

                                        <div class="form-group">
                                            Password:
                                            <input type="password" name="updatePassword" placeholder="Enter new password. . ."><br><br>
                                        </div>

                                        <div class="form-group">
                                            Repeat Password:
                                            <input type="password" name="RupdatePassword" placeholder="Repeat new password. . ."><br><br>
                                        </div>


                                        <div class="form-group">
                                            <input type="submit" name="update" value="Update">
                                        </div>
                                    <?php
                                } 
                            }
                    ?>
                </form>
            </div>
        </div>
    </section>

    

<?php
    include_once 'footer.php';
?>