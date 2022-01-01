<?php

$item_name = "";
$item_price = "";


$db = mysqli_connect('localhost', 'root', '', 'items');

if (mysqli_connect_errno()){
    echo "Failed to connect to database :( " . mysqli_connect_error();
}



if (isset($_POST['add'])){

    echo "connect";

    $id_name = mysqli_real_escape_string($db, $_POST['itemName']);
    $id_price = mysqli_real_escape_string($db, $_POST['itemPrice']);
    $qty = mysqli_real_escape_string($db, $_POST['qty']);

        $query = "INSERT INTO item (itemName, itemPrice, quantity)
            VALUES(`$id_name`, `$item_price`, `$qty`)";

            if(mysqli_query($db, $query))
            {
                echo "<script>alert('Successfully STORED :D');</script>";
            }
            else{
                echo "<script>alert('Something went wrong :(');</script>";
            }
}



