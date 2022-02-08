<?php
    $this->load->view('admin/templates/header');
?>
    <main>
    <!-- Dashboard Start -->
        <div class="cards row m-5">
            <div class="col-lg-3 col-md-6 my-2">
                <div class="card-single bg-dark bg-opacity-50 px-4 py-2">
                    <div>
                        <h1><?php echo $countUser; ?></h1>
                        <span>User/s</span>
                    </div>
                    <div>
                        <i class="bi bi-person"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 my-2">
                <div class="card-single bg-dark bg-opacity-50 px-4 py-2">
                    <div>
                        <h1><?php echo $countSupplier; ?></h1>
                        <span>Supplier/s</span>
                    </div>
                    <div>
                        <i class="bi bi-people"></i>
                    </div>
                </div>
            </div>  
            <div class="col-lg-3 col-md-6 my-2">
                <div class="card-single bg-dark bg-opacity-50 px-4 py-2">
                    <div>
                        <h1><?php echo $countItem; ?></h1>
                        <span>Items</span>
                    </div>
                    <div>
                        <i class="bi bi-bag-plus"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 my-2">
                <div class="card-single bg-dark bg-opacity-50 px-4 py-2">
                    <div>
                        <h1><?php echo $countUser; ?></h1>
                        <span>Total Order/s</span>
                    </div>
                    <div>
                        <i class="bi bi-cart-check"></i>
                    </div>
                </div>
            </div>    
            <div class="col-lg-3 col-md-6 my-2">
                <div class="card-single bg-dark bg-opacity-50 px-4 py-2">
                    <div>
                        <h1><?php echo $countCategory; ?></h1>
                        <span>Categories</span>
                    </div>
                    <div>
                        <i class="bi bi-collection"></i>
                    </div>
                </div>
            </div>    
            <div class="col-lg-3 col-md-6 my-2">
                <div class="card-single bg-dark bg-opacity-50 px-4 py-2">
                    <div>
                        <h1><?php echo $countPendingOrders; ?></h1>
                        <span>Pending Order</span>
                    </div>
                    <div>
                        <i class="bi bi-ui-checks-grid"></i>
                    </div>
                </div>
            </div>    
            <div class="col-lg-3 col-md-6 my-2">
                <div class="card-single bg-dark bg-opacity-50 px-4 py-2">
                    <div>
                        <h1><?php echo $countDeliveredOrders; ?></h1>
                        <span>Delivered Order/s</span>
                    </div>
                    <div>
                        <i class="bi bi-truck"></i>
                    </div>
                </div>
            </div>    
            <div class="col-lg-3 col-md-6 my-2">
                <div class="card-single bg-dark bg-opacity-50 px-4 py-2">
                    <div>
                        <h1><?php echo $countRejectedOrders; ?></h1>
                        <span>Rejected Orders</span>
                    </div>
                    <div>
                        <i class="bi bi-bag-x"></i>
                    </div>
                </div>
            </div>     
        </div>
    <!-- Dashboard End -->

    <!-- TABLE 1 START -->
    <div class="row m-5">
            <div class="col-lg-6">
                <div>
                    <h3 class="text-center">Supplier Report</h3>
                    <table class="table text-center bg-dark bg-opacity-50">
                        <thead>
                            <th>ID Number</th>
                            <th>Supplier Name</th>
                            <th>Total Sales</th>    
                        </thead>
                        <tbody>
                            <?php if(!empty($supReport)) {?>
                            <?php foreach($supReport as $report) { ?>
                            <tr>
                                <td><?php echo $report->supplierId; ?></td>
                                <td><?php echo $report->Name; ?></td>
                                <td><?php echo $report->price; ?></td>
                            </tr>
                          <?php } ?>
                          <?php } else { ?>
                            </tbody>
                            <tr>
                                <td>No Records Found</td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>

    <!-- TABLE 1 END -->

</main>



                            