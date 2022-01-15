
<?php
    $this->load->view('admin/templates/header');
?>

<div class="container mt-3">
    <div class="container shadow-container">
        <?php if($this->session->flashdata('dish_success') != ""):?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('dish_success');?>
        </div>
        <?php endif ?>
        <?php if($this->session->flashdata('error') != ""):?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error');?>
        </div>
        <?php endif ?>
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
                        <th>Supplier</th>
                        <th>Item Type</th>
                        <th>Item Name</th>
                        <th>Description</th>
                        <th>Stock</th> 
                        <th>₱rice</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php if(!empty($items)) { ?>
                    <?php foreach($items as $item) {?>
                        <tr>
                        <td><?php echo $item['supplierId']; ?></td>
                        <td><?php echo $item['itemType']; ?></td>
                        <td><?php echo $item['itemName']; ?></td>
                        <td><?php echo $item['itemDesc']; ?></td>
                        <td><?php echo $item['itemStock']; ?></td>
                        <td><?php echo "$".$item['price']; ?></td>
                        <td>
                            <a href="<?php echo base_url().'admin/menu/edit/'.$item['itemId']; ?>"
                                class="btn btn-info mb-1"><i
                                    class="fas fa-edit mr-1"></i>Edit</a>

                            <a href="javascript:void(0);" onclick="deleteMenu(<?php echo $item['itemId']; ?>)"
                                class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>

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
<script type="text/javascript">
function deleteMenu(id) {
    if (confirm("Are you sure you want to delete dish?")) {
        window.location.href = '<?php echo base_url().'admin/menu/delete/';?>' + id;
    }
}
$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>