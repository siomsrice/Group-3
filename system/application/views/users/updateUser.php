<?php
    $this->load->view('templates/header');
?>

<?=isset($message) ? $message: "";?>

<?php 
    #test to see values
    #print_r($user);
?>
<P>UPDATE ACCOUNT</P>
    <div class="signup-form">
        <form method="post">
            ID:         <input type="hidden" name="usersId" value="<?php echo $user['usersId'] ?>"><br>
            First Name: <input type="text" name="firstName" value="<?php echo $user['firstName'] ?>"><br>
            Last Name:  <input type="text" name="lastName" value="<?php echo $user['lastName'] ?>"><br>
            Email:      <input type="email" name="usersEmail" value="<?php echo $user['usersEmail'] ?>"><br>
            Username:   <input type="text" name="usersUid" value="<?php echo $user['usersUid'] ?>"><br>
            Phone:      <input type="text" name="phone" value="<?php echo $user['phone'] ?>"><br>
            Address:    <input type="text" name="address" value="<?php echo $user['address']?>"><br>
            Password:   <input type="password" name="usersPwd"><br>
            Repeat Password: <input type="password" name="pwdRepeat"><br>
            
            <button type="submit"> Update </button>
            
            <button type="button"><a href="<?php echo base_url()."index.php/users/userProfile"?>">Cancel</a></button>
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
