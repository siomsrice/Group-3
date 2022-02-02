<?php
    $this->load->view('templates/profileheader.php');
?>

<?=isset($message) ? $message: "";?>
     <!-- Edit Profile Start -->
     <div class="container">
        <div class="row my-5 py-4">
            <div class="col-lg-4 mt-1">
                <div class="card text-center sidebar bg-dark bg-opacity-75">
                    <div class="card-body">
                        <img src="images/Temp Pic.jpg" alt="Temporary Picture" class="rounded-circle my-4" width="210">
                        <div class="mt-3 row leftbox">
                            <h3 class="col-lg-12"><?php echo $user['firstName'] ?> <?php echo $user['lastName'] ?></h3>
                            <a href="<?php echo base_url()."users/viewUser"?>" class="col-lg-12 p-2">My Account</a>
                            <a href="<?php echo base_url()."users/updateUser"?>" class="col-lg-12 p-2">Edit Account</a>
                            <a href="<?php echo base_url()."users/deleteUser"?>" class="col-lg-12 p-2">Delete Account</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-1">
                <div class="card mb-3 content bg-dark bg-opacity-75">
                    <h1 class="p-4">Edit Account</h1>
                    <p class="px-4">The changes in the information will be displayed publicly on your <a href="<?php echo base_url()."users/viewUser"?>" class="text-decoration-none">Profile</a> and in <a href="<?php echo base_url()."home"?>" class="text-decoration-none">PC Builder</a></p>
                    <form class="card-body row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h5>First Name</h5>
                                </div>
                                <div class="col-lg-7">
                                    <input type="text" name="firstName" class="p-0 m-0 col-lg-12" placeholder="Enter New First Name" value="<?php echo $user['firstName'] ?>"></input>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-5">
                                    <h5>Last Name</h5>
                                </div>
                                <div class="col-lg-7">
                                    <input type="text" name="lastName" class="p-0 m-0 col-lg-12" placeholder="Enter New Last Name" value="<?php echo $user['lastName'] ?>"></input>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-5">
                                    <h5>Email</h5>
                                </div>
                                <div class="col-lg-7">
                                    <input type="email" name="usersEmail" class="p-0 m-0 col-lg-12" placeholder="Enter New Email" value="<?php echo $user['usersEmail'] ?>"></input>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-5">
                                    <h5>Username</h5>
                                </div>
                                <div class="col-lg-7">
                                    <input type="text" name="usersUid" class="p-0 m-0 col-lg-12" placeholder="Enter New Address" value="<?php echo $user['usersUid']?>"></input>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-5">
                                    <h5>Address</h5>
                                </div>
                                <div class="col-lg-7">
                                    <input type="text" name="address" class="p-0 m-0 col-lg-12" placeholder="Enter New Address" value="<?php echo $user['address'] ?>"></input>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-lg-5">
                                    <h5>Phone Number</h5>
                                </div>
                                <div class="col-lg-7">
                                    <input type="tel" name="phone" class="p-0 m-0 col-lg-12" placeholder="Enter New Phone Number" value="<?php echo $user['phone'] ?>"></input>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-5">
                                    <h5>New Password</h5>
                                </div>
                                <div class="col-lg-7">
                                    <input type="password" name="usersPwd" class="p-0 m-0 col-lg-12" placeholder="Enter New Password"></input>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-5">
                                    <h5>Confirm New Password</h6>
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <input type="password" name="usersPwd" class="p-0 m-0 col-lg-12" placeholder="Confirm New Password"></input>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-2">
                            <button type="submit" class="btn btn-secondary col-lg-2 m-2">Save Changes</button>
                            <button type="reset" class="btn btn-secondary col-lg-2 m-2"><a href="<?php echo base_url()."users/viewUser"?>">Cancel</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
        
    <!-- Edit Profile End -->


    <?php
    	$this->load->view('templates/footer');
	?>

<!--<form method="POST" action="/users/updateUser">
    Enter Username: <input type="text" name="usersUid"><br/>
    Enter Password: <input type="password" name="usersPwd"><br/>
    <input type="submit" value="update">
</form>-->
