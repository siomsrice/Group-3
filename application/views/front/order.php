<?php
    $this->load->view('templates/header');
?>

<?php 
    $userId = $_SESSION["usersId"];
    print_r($user); 
?>

<P>Recent Orders</P>
<table>
    <tr>
        <th>Item</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Status</th>
        <th>Order Date</th>
        <th>Action</th>
    </tr>
</table>

