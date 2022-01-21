<?php
    $this->load->view('admin/templates/header');
?>
<style>
    <?php
    include 'assets/css/adminstyle.css';
    ?>
</style>
    <div class="container">
    
<div class="center">
  <form action="" method="POST" class="form-container mx-auto  shadow-container" id="myForm" style="width:80%" enctype="multipart/form-data">
      <h3 class="mb-3 text-center">Add Items</h3>  
      <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <label for="" class="form-label">Supplier</label>
              <select name="supplierId" id="supplierId"
                class="form-control ">
                <option>--Select Supplier--</option>
                <?php 
                if (!empty($supplier)) { 
                    foreach($supplier as $row) {
                        ?>
                <option value="<?php echo $row['supplierId'];?>">
                    <?php echo set_select('supplierId');?>
                    <?php echo $row['Name'];?>
                </option>
                <?php }
                }
                ?>
            </select>
            </div>
            <div class="form-group">
              <label for="" class="form-label">Item Name</label>
              <input type="text" class="form-control" name="itemName" >
              
        </div>
        <div class="form-group">
          <label for="" class="form-label">Brand</label>
          <input type="text" class="form-control" name="itemBrand" >
        </div> 
            </div>
        <div class="col-md-6">
                
        <div class="form-group">
          <label for="" class="form-label">Type</label>
          <input type="text" class="form-control" name="itemType" >
        </div>
        
          <div class="form-group">
          <label for="" class="form-label">Price</label>
          <input type="price" class="form-control" name="price"  placeholder="Enter Price ₱" >
        </div>
        <div class="form-group">
        <label>Item Image</label>
          <input type="file" class="form-control" name="files[]" />
          <label for="" class="form-label">Description</label>
          
        </div>
        </div>
        
          <div class="form-group">
          <input type="text" class="form-control" name="itemDesc" >
         </div>
         </div> 
          <br>
         <button type="submit" name="save" value="Save Data" class="btn btn-primary">Submit</button>
         <?php echo !empty($statusMsg)?'<p class="status-msg">'.$statusMsg.'</p>':''; ?>
         
    
  </form>
  
  </div>
</div>
