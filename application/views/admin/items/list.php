
<?php
    $this->load->view('admin/templates/header');
?>

<div class="container mt-3">
    <div class="container shadow-container">
        
        
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <h2>All Item Details</h2>
            </div>
            <input class="form-control mb-3" id="myInput" type="text" placeholder="Search .." style="width:50%;">
        </div>
        <div class="table-responsive-sm">
            <table class="table table-bordered table-hover table-striped table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Item Name</th>
                        <th>Item Brand</th>
                        <th>Item Type</th>
                        <th>About</th>
                        <th>₱rice</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php if(!empty($items)) { ?>
                    <?php foreach($items as $item) {?>
                    <tr>
                        <td><?php echo $item['itemId']; ?></td>
                        <td><?php echo $item['itemName']; ?></td>
                        
                        <td><?php echo $item['itemBrand']; ?></td>
                        
                        <td><?php echo $item['itemType']; ?></td>
                        <td><?php echo $item['itemDesc']; ?></td>
                        <td><?php echo "$".$item['price']; ?></td>
                        <td>
                        <a class="btn btn-info" href="<?php echo base_url('admin/edititem/'. $item['itemId'].''); ?>">Edit</a>
                        <a class="btn btn-danger" href="<?php echo base_url('admin/deleteitem/'. $item['itemId'].''); ?>">Delete</a>
                        

                        </td>
                    </tr>
                    <?php } ?>
                    <?php } else { ?>
                    <tr>
                        <td colspan="4">Records not founds</td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>

