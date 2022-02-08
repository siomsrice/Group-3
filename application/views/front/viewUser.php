<?php
    $this->load->view('templates/profileheader');
?>

<?=isset($message) ? $message: "";?>
    <!-- PROFILE START -->
    <div class="container">
        <div class="row my-5 py-4">
            <div class="col-md-4 mt-1">
                <div class="card text-center sidebar bg-dark bg-opacity-75">
                    <div class="card-body">
                        <img src="<?php echo base_url().'public/uploads/anon.png';?>" alt="Temporary Picture" class="rounded-circle my-4" width="210">
                        <div class="mt-3 row leftbox">
                            <h3 class="col-12"><?php echo $user['firstName'] ?> <?php echo $user['lastName'] ?></h3>
                            <a href="<?php echo base_url()."users/viewUser"?>" class="col-12 p-2">My Account</a>
                            <a href="<?php echo base_url()."users/updateUser"?>" class="col-12 p-2">Edit Account</a>
                            <a href="<?php echo base_url()."users/deleteUser"?>" class="col-12 p-2">Delete Account</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-1">
                <div class="card mb-3 content bg-dark bg-opacity-75">
                    <h1 class="p-4">My Account</h1>
                    <p class="px-4">This information will be displayed publicly on your <a href="<?php echo base_url()."users/viewUser"?>" class="text-decoration-none">Profile</a> and in <a href="<?php echo base_url()."home"?>" class="text-decoration-none">PC Builder</a></p>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md 3">
                                <h5>First Name</h5>
                            </div>
                            <div class="col-md-9">
                                <p class="p-0 m-0"><?php echo $user['firstName'] ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md 3">
                                <h5>Last Name</h5>
                            </div>
                            <div class="col-md-9">
                                <p class="p-0 m-0"><?php echo $user['lastName'] ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md 3">
                                <h5>Email</h5>
                            </div>
                            <div class="col-md-9">
                                <p class="p-0 m-0"><?php echo $user['usersEmail'] ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md 3">
                                <h5>Phone Number</h5>
                            </div>
                            <div class="col-md-9">
                                <p class="p-0 m-0"><?php echo $user['phone'] ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md 3">
                                <h5>Address</h5>
                            </div>
                            <div class="col-md-9">
                                <p class="p-0 m-0"><?php echo $user['address'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



     

    <?php
    	$this->load->view('templates/footer');
	?>

