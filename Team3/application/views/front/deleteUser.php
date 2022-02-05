<?php
    $this->load->view('templates/profileheader.php');
    $usersId = $_SESSION['usersId'];
?>
<?=isset($message) ? $message: "";?>
<!--
<div class="delete-confirm">
    <form method="post">
        <P>Please enter your password</P>
        <input type="password" name="pwdRepeat">
        <?php echo '<input type="hidden" name="usersId" value='.$usersId.'>';?>
        <div class="buttons">
            <button type="submit">Confirm</button>
            <button type="button"><a href="<?php echo base_url()."index.php/users/userProfile"?>">Cancel</a></button>
        </div>
    </form>
</div>
-->
<div class="container">
        <div class="row my-5 py-4">
            <div class="col-lg-12 mt-1">
                <div class="card mb-3 content bg-dark bg-opacity-75">
                    <h1 class="p-4">Delete Account</h1>
                    <p class="px-4">Deleting your account is permanent. When you delete your account, you won't be able to retrieve the content or information you've shared on <a href="<?php echo base_url()."home"?>" class="text-decoration-none">PC Builder</a>.</p>
                    <form class="mb-5 pb-5">
                        <h5 class="text-center mt-5 mb-4">Do you want to delete your account?</h5>
                        <input type="password" name="pwdRepeat" class="pb-4 m-0 col-lg-12 text-center" placeholder="Enter Password to Delete"></input>
                        <div class="d-grid gap-2 d-md-block text-center">
                            <button class="btn btn-secondary col-lg-2 m-2" type="submit">Delete Account</button>
                            <button class="btn btn-secondary col-lg-2 m-2" type="button"><a href="<?php echo base_url()."users/viewUser"?>">Cancel</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
    	$this->load->view('templates/footer');
	?>
