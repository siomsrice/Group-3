<?php
    $this->load->view('templates/header');
?>

<?php 
    //$userId = $_SESSION["usersId"];
    //print_r($user); 
?>

<h2 class="text-center">Recent Orders</h2>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Order Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php if(!empty($orders)) {?>
                    <?php foreach($orders as $order) { ?>
                    <?php $status=$order['status']; 
                            if($status=="" or $status=="NULL" or $status=="in process" or $status=="rejected") { ?>
                    <tr>
                        <td><?php echo $order['itemName']; ?></td>
                        <td><?php echo $order['quantity']; ?></td>

                        <td><?php echo '₱'.$order['price']; ?></td>
                        <?php if($status=="" or $status=="NULL") { ?>
                        <td> <button type="button"> Dispatch</button></td>

                        <?php } if($status=="in process") { ?>
                        <td> <button type="button"> On Your Way!</button></td>
                        <?php }?>
                        
                        <?php if($status=="rejected") { ?>
                        <td> <button type="button"> Cancelled</button>
                        </td>
                        <?php } ?>
                        <td><?php echo $order['orderDate']; ?></td>
                        <td>
                            <a href="javascript:void(0);" onclick="deleteOrder(<?php echo $order['OrderId']; ?>)" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Cancel</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                    <?php } else { ?>
                    <tr>
                        <td colspan="6">Records not found</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

<h2 class="text-center">All Orders</h2>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Invoice</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php if(!empty($orders)) {?>
                    <?php foreach($orders as $order) { ?>
                    <?php $status=$order['status']; 
                            if($status=="closed") { ?>
                    <tr>
                        <?php $cDate = strtotime($order['date']); ?>
                        <td><?php echo date('d-M-Y',$cDate); ?></td>
                        <td><?php echo $order['itemName']; ?></td>
                        <td><?php echo $order['quantity']; ?></td>
                        <td><?php echo '₱'.$order['price']; ?></td>
                        <td> <button type="button" class="btn btn-success"><i class="fas fa-check"></i> Delivered</button>
                        <td><a href="<?php echo base_url().'orders/invoice/'.$order['OrderId']; ?>" class="btn btn-info"><i class="fas fa-file-alt"></i> Invoice</a></td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                    <?php } else { ?>
                    <tr>
                        <td colspan="5">Records not found</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    <?php
    	$this->load->view('templates/footer');
	?>