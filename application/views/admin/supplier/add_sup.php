<?php
    $this->load->view('admin/templates/header');
?>

<div class="conatiner">
    <form action="<?php echo base_url().'admin/createsupplier';?>" method="POST"
        class="form-container mx-auto  shadow-container" id="myForm" style="width:90%" enctype="multipart/form-data">
        <h3 class="mb-3 p-2 text-center mb-3">Add New Supplier Details</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">Supplier Name</label>
                    <input type="text" name="sup_name" id="rname" class="form-control
                    <?php echo (form_error('sup_name') != "") ? 'is-invalid' : '';?>" placeholder="Add Restaurant Name"
                    value="<?php echo set_value('sup_name');?>">

                    <?php echo form_error('sup_name'); ?>
                    <span></span>
                </div>

                <div class="form-group">
                    <label class="control-label">Bussiness E-mail</label>
                    <input type="text" name="email" id="email" class="form-control form-control-danger
                    <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" placeholder="example@gmail.com"
                        value="<?php echo set_value('email');?>">

                        <?php echo form_error('email'); ?>
                    <span></span>
                </div>

                <div class="form-group">
                    <label class="control-label">Contact</label>
                    <input type="number" name="phone" id="phone" class="form-control
                    <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" placeholder="1-(555)-555-5555"
                        value="<?php echo set_value('phone');?>">
                        <?php echo form_error('phone'); ?>
                    <span></span>
                </div>

                <div class="form-group">
                    <label class="control-label">Business URL</label>
                    <input type="text" name="url" id="url" class="form-control form-control-danger
                    <?php echo (form_error('url') != "") ? 'is-invalid' : '';?>"
                        placeholder=" http://example.com" value="<?php echo set_value('url');?>">
                        <?php echo form_error('url'); ?>
                    <span></span>
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control 
                    <?php echo(!empty($errorImageUpload))  ? 'is-invalid' : '';?>">
                    <?php echo (!empty($errorImageUpload)) ? $errorImageUpload : '';?>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Select Category</label>
            <select name="c_name" id="c_name" class="form-control <?php echo (form_error('c_name') != "") ? 'is-invalid' : '';?>">
                <option value="">--Select Category--</option>
                <?php 
                if (!empty($cats)) { 
                    foreach($cats as $cat) {
                        ?>
                <option value="<?php echo $cat['categoryId'];?>">
                    <?php echo $cat['categoryName'];?>
                    <?php echo set_select('categoryName');?>
                </option>
                <?php }
                }
                ?>
            </select>
            <?php echo form_error('categoryName');?>
            <span></span>
        </div>
        <h3 class="box-title m-t-40">Address</h3>
        <div class="form-group">
            <textarea name="address" id="address" type="text" style="height:70px;"
                class="form-control
            <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"><?php echo set_value('address');?></textarea>
            <?php echo form_error('address');?>
            <span></span>
        </div>
        <div class="form-actions">
            <input type="submit" id="btn" name="submit" class="btn btn-success" value="Save">
            <a href="<?php echo base_url().'admin/supplier'?>" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>


<script>
    const o_hr = document.getElementById("o_hr");
    const c_hr = document.getElementById("c_hr");
    const o_days = document.getElementById("o_days");
    const c_name = document.getElementById("c_name");

    o_hr.value = "<?php echo $_POST['o_hr']; ?>";
    c_hr.value = "<?php echo $_POST['c_hr']; ?>";
    o_days.value = "<?php echo $_POST['o_days']; ?>";
    c_name.value = "<?php echo $_POST['c_name']; ?>";
</script>

<!--HTML END-->