<?php
    $this->load->view('templates/header');
?>

<body>
    <div class="container my-3" style="border: 2px outset green;">
        <header class="mt-1 text-right">
        </header>
        <div class="invoice mb-3">
            <div class="row mb-3 p-3">
                <div class="col-6">
                    <h3 style="color:purple"><b>Ordering System</b></h3>
                </div>
                <div class="col-6">
                    <p class="lead font-weight-bold mb-0"><?php echo $sup['name'] ?></p>
                    <p class="mb-0"><?php echo $sup['email'] ?></p>
                    <p><?php echo $sup['Address'] ?></p>
                </div>
                <div class="col-6">
                    <h3>INVOICE:</h3>
                    <p class="mb-0"><?php echo $order['firstName']." ".$order['lastName']?></p>
                    <p class="mb-0"><?php echo $order['address'] ?></p>
                    <p class="mb-0"><?php echo $order['usersEmail'] ?></p>
                    <p class="mb-0"><?php echo $order['phone'] ?></p>
                </div>
                <div class="col-6">
                    <br><br>
                    <p class="mb-0"><b>Order Number:</b> <?php echo "#".$order['orderId']; ?></p>
                    <?php $cDate = strtotime($order['sucessDate']); ?>
                    <p class="mb-0"><b>Order Date:</b> <?php echo date('d-M-Y',$cDate); ?></p>
                    <p class="mb-0"><b>Payment Mode:</b> Cash On Delivery</p>
                </div>
                
                <div class="col-12">
                <hr>
                    <table class="table responsive">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th>Supplier</th>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $res['supplierName']; ?></td>
                                <td><?php echo $order['itemName']; ?></td>
                                <td><?php echo $order['quantity']; ?></td>
                                <td><?php echo '₱'.$dish['price']; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td class="font-weight-bold">Total</td>
                                <td class="font-weight-bold"><?php echo '₱'.$order['price'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <hr class="my-4">
        <footer class="text-center">
            <p class="mb-0">Thank You For Your Orders and Choosing Us!</p>
            <p>We Hope To See You Again</p>
            <p>For terms & conditions Please visit www.website.com</p>
        </footer>
    </div>
    <div class="container text-center">
        <a href="<?php echo base_url().'orders' ?>" class="btn btn-sm btn-warning p-2"><i class="fas fa-angle-left"></i>
            Back to Orders</a>
    </div>

</body>
