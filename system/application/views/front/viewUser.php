<?php
    $this->load->view('templates/profileheader');
?>

<?=isset($message) ? $message: "";?>

<?php 
    #test to see values
    #print_r($user);
?>
<!--
<p>ACCOUNT</p>
    <div class="signup-form">
        <form method="post">
            <?php echo $user['usersId'] ?><br>
            <?php echo $user['firstName'] ?><br>
            <?php echo $user['lastName'] ?><br>
            <?php echo $user['usersEmail'] ?><br>
            <?php echo $user['usersUid'] ?><br>
            <?php echo $user['phone'] ?><br>
            <?php echo $user['address']?><br>
            
            <a href='<?php echo base_url()."index.php/users/updateUser"?>'>Update</a><br>
            <a href='<?php echo base_url()."index.php/users/deleteUser"?>'>Delete</a><br>
            <a href='<?php echo base_url()."index.php/cart/"?>'>Cart</a><br>
            <a href='<?php echo base_url()."index.php/orders/"?>'>Orders</a><br>
           
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
                                <a href="<?php echo base_url()."users/deleteUser"?>">Delete Account</a>
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

        </div>
     
     </div>


    <?php
    	$this->load->view('templates/footer');
	?>

<!--<form method="POST" action="/users/updateUser">
    Enter Username: <input type="text" name="usersUid"><br/>
    Enter Password: <input type="password" name="usersPwd"><br/>
    <input type="submit" value="update">
</form>-->
