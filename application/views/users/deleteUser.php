<?php
    $this->load->view('templates/header');
    $usersId = $_SESSION['usersId'];
?>

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
