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
</div>


