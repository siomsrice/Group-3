<?php
    $this->load->view('templates/header');
?>

<form  method="post">
<div class="d-flex justify-content-center align-items-center container">
    <div class="card py-5 px-3">       
    <h5 class="m-0">Email verification</h5><span class="mobile-text">Enter the code we just send on your email address</span>
        <input type="text" name="pin" placeholder="Enter 6 Digit Pin"required><br>
        <input type="submit" value="submit"></input>
</form>