<?=isset($message) ? $message: "";?>

<?php 

    print_r($user);

?>


<form method="POST">

    <input type="hidden" name="usersId" value="<?php echo $user['usersId']?>">
    Enter First Name:   <input type="text" name="firstName" value="<?php echo $user['firstName']?>"><br/>
    Enter Last Name:    <input type="text" name="lastName" value="<?php echo $user['lastName']?>"><br/>
    Enter Username:     <input type="text" name="usersUid" value="<?php echo $user['usersUid']?>"><br/>
    Enter Email:        <input type="email" name="usersEmail" value="<?php echo $user['usersEmail']?>"><br/>
    Enter Address:      <input type="text" name="address" value="<?php echo $user['address']?>"><br/>
    Enter Phone:        <input type="text" name="phone" value="<?php echo $user['phone']?>"><br/>
    Enter Password:     <input type="password" name="usersPwd" value="<?php echo $user['usersPwd']?>"><br/>

    <input type="submit" value="update">
</form>
