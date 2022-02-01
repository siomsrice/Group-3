<?php
    $this->load->view('templates/header');
?>

<?php 
    $userId = $_SESSION["usersId"];
    print_r($user); 

?>
<?=isset($message) ? $message: "";?>


<?php //print_r($user); ?>
   <!-- <div class="signup-form">
        <form method="post">
            <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>"><br>
            <input type="text" name="firstName" value="<?php echo $user['firstName'] ?>"><br>
            <input type="text" name="lastName" value="<?php echo $user['lastName'] ?>"><br>
            <input type="email" name="usersEmail" value="<?php echo $user['usersEmail'] ?>"><br>
            <input type="text" name="usersUid" value="<?php echo $user['usersUid'] ?>"><br>
            <input type="text" name="phone" value="<?php echo $user['phone'] ?>"><br>
            <input type="text" name="address" value="<?php echo $user['address'] ?>"><br>

            <?php echo '<input type="hidden" name="user_id" value='.$id.'>'; ?> 
        
        </form>
    </div>
    -->
    <div class="profile">
        <div class="row">
            <div class="col-md-2">
                <div class="container1">
                    <div class="row1">
                        <h1>My Account</h1>
                        <ul>
                            <li>
                                <a href="<?php echo base_url()."users/updateUser"?>">Edit Account Details</a>
                                <a href="#">Delete Account</a>
                            </li>
                        </ul>
                        <h1>My Cart</h1>
                        <ul>
                            <li>
                                <p>Incoming Orders</p>
                                <p>Received Orders</p>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="row2">
                        <h1>
                        </h1>
                    </div>
                </div>
            </div>

             <div class="col-md-8" "col-xs-8">
                <div class="container2">
                    <div class="credentials">
                        <h1>My Profile</h1>
                        <p>Username: <?php echo $user['usersUid'] ?></p> 
                        <p>Name: <?php echo $user['firstName'] ?> <?php echo $user['lastName'] ?></p>
                        <p>Email: <?php echo $user['usersEmail'] ?></p>
                        <p>Phone: <?php echo $user['phone'] ?></p>
                        <p><b>For Delivery Purposes</b></p>
                        <p>Home Address: <?php echo $user['address'] ?></p>
                        <p>Office Address: <?php echo $user['address'] ?></p>
                    </div>

                    <div class="user-image">
                    picture here
                    </div>
                </div>
            </div>

             <div class="col-md-2">
                 <div class="container3">
                    
                 </div>
            
            </div>

        </div>
     
     </div>
    

<?php
    $this->load->view('templates/footer');
?>

