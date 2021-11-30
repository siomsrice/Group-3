<?=isset($message) ? $message: "";?>

<?php 

print_r($user);

?>


    First Name: <?php echo $user['firstName']?> <br>
    Last Name: <?php echo $user['lastName']?> <br>
    Username: <?php echo $user['usersUid']?> <br>
    Email: <?php echo $user['usersEmail']?> <br>
    Address: <?php echo $user['address']?> <br>
    Phone: <?php echo $user['phone']?> <br>


<form method="POST" action="/users/updateUser">
    Enter Username: <input type="text" name="usersUid"><br/>
    Enter Password: <input type="password" name="usersPwd"><br/>
    <input type="submit" value="update">
</form>
