<?=isset($message) ? $message: "";?>
<form method="POST">

    First Name: <?php echo $user['firstName']?> <br>
    Last Name: <?php echo $user['lasttName']?> <br>
    Username: <?php echo $user['usersUid']?> <br>
    Email: <?php echo $user['usersEmail']?> <br>
    Address: <?php echo $user['address']?> <br>
    Phone: <?php echo $user['phone']?> <br>









    Enter First Name: <input type="text" name="firstName"><br/>
    Enter Last Name: <input type="text" name="lastName"><br/>
    Enter Username: <input type="text" name="usersUid"><br/>
    Enter Email: <input type="email" name="usersEmail"><br/>
    Enter Address: <input type="text" name="address"><br/>
    Enter Phone: <input type="text" name="phone"><br/>
    Enter Password: <input type="password" name="usersPwd"><br/>
    <input type="submit" value="submit">
</form>

<a href="/users">Back to Home</a>