<?php
    $this->load->view('templates/header');
?>

<?=isset($message) ? $message: "";?>

<?php 
    $userId = $_SESSION["usersId"];
    print_r($user); 

?>


<?=isset($message) ? $message: "";?>

<?php 

print_r($user);

?>
    <div class="signup-form">
        <form method="post">
            <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>"><br>
            <input type="text" name="firstName" value="<?php echo $user['firstName'] ?>"><br>
            <input type="text" name="lastName" value="<?php echo $user['lastName'] ?>"><br>
            <input type="email" name="usersEmail" value="<?php echo $user['usersEmail'] ?>"><br>
            <input type="text" name="usersUid" value="<?php echo $user['usersUid'] ?>"><br>
            <input type="text" name="phone" value="<?php echo $user['phone'] ?>"><br>
            <input type="text" name="address" value="<?php echo $user['address'] ?>"><br>

            <!-- <?php echo '<input type="hidden" name="user_id" value='.$id.'>'; ?> -->
        
        </form>
    </div>

<?php
    $this->load->view('templates/footer');
?>

