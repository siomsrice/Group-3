<?php
    $this->load->view('admin/templates/header2');
?>
<div class="container table-responsive m-t-20">
    <h2 class="py-3 text-center">View User's Order</h2>
    <table id="myTable" class="table table-bordered table-hover table-striped dataTable">
        <tbody>
            <tr>
                <td><strong>Ordered By:</strong></td>
                <td><?php echo $order['usersId'] ?></td>
            </tr>
            <tr>
                <td><strong>Food Item:</strong></td>
                <td><?php echo $order['itemName'] ?></td>
            </tr>
            <tr>
                <td><strong>Quantity:</strong></td>
                <td><?php echo $order['quantity'] ?></td>
            </tr>
            <tr>
                <td><strong>Price:</strong></td>
                <td><?php echo "₱".$order['price'] ?></td>
            </tr>
            <tr>
                <td><strong>Address:</strong></td>
                <td><?php echo $order['address'] ?></td>
            </tr>
            <tr>
                <td><strong>Order Date:</strong></td>
                <td><?php echo $order['orderDate'] ?></td>
            </tr>

            <form action="<?php echo base_url().'admin/updateorderdetails/'?>" method="POST" class="" id="myForm"  enctype="multipart/form-data">
                <tr>
                    <td><strong>Select Order Status:</strong></td>
                    <td>
                    <div class="mb-3">
          <label for="" class="form-label">status</label>
          <input type="text" class="form-control" value="<?php echo $order->status;?>" name="status" >
        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-primary btn-block" type="submit" name="updatestatus">Submit</button></td>
                </tr>
            </form>
        </tbody>
    </table>
</div>