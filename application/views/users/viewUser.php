<?php
    $this->load->view('templates/header');
?>

<?=isset($message) ? $message: "";?>

<?php 
    #test to see values
    #print_r($user);
?>
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
           
        </form>
    </div>

    <?php
    	$this->load->view('templates/footer');
	?>
<!--<form method="POST" action="/users/updateUser">
    Enter Username: <input type="text" name="usersUid"><br/>
    Enter Password: <input type="password" name="usersPwd"><br/>
    <input type="submit" value="update">
</form>-->
