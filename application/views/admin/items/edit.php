
<?php
    $this->load->view('admin/templates/header');
?>

    <div class="container">
    
    <div class="center">
      <form action="<?php echo base_url().'admin/updateitemdetails/'?>" method="POST" class="form-container mx-auto  shadow-container" id="myForm" style="width:80%" enctype="multipart/form-data">
          <h3 class="mb-3 text-center">Edit Item no. <?php echo $row->itemId; ?></h3>  
          <input type="hidden" name="userid" value="<?php echo $row->itemId; ?>">
          <?php { ?>
          <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="form-label">Supplier</label>
                  <select name="supplierId" id="supplierId"
                    class="form-control ">
                    <option>--Select Supplier--</option>
                    <?php 
                    if (!empty($supplier)) { 
                        foreach($supplier as $data) {
                            ?>
                    <option value="<?php echo $data['supplierId'];?>">
                        <?php echo set_select('supplierId');?>
                        <?php echo $data['Name'];?>
                    </option>
                    <?php }
                    }
                    ?>
                </select>
                </div>
                <div class="form-group">
                  <label for="" class="form-label">Item Name</label>
                  <input type="text" class="form-control" value="<?php echo $row->itemName;?>" name="itemName" >
                  
            </div>
            <div class="form-group">
              <label for="" class="form-label">Brand</label>
              <input type="text" class="form-control" value="<?php echo $row->itemBrand;?>" name="itemBrand" >
            </div> 
                </div>
            <div class="col-md-6">
                    
            <div class="form-group">
              <label for="" class="form-label">Type</label>
              <input type="text" class="form-control" value="<?php echo $row->itemType;?>"  name="itemType" >
            </div>
            
              <div class="form-group">
              <label for="" class="form-label">Price</label>
              <input type="price" class="form-control" name="price" value="<?php echo $row->price;?>"  >
            </div>
            <div class="form-group">
            <label>Item Image</label>
              <input type="file" class="form-control" name="files[]" />
              <label for="" class="form-label">Description</label>
              
            </div>
            </div>
            
              <div class="form-group">
              <input type="text" class="form-control" name="itemDesc" value="<?php echo $row->itemDesc;?>">
             </div>
             </div> 
              <br>
              
             <button type="submit" name="updateitems" value="update" class="btn btn-primary">Submit</button>
             
             <?php } ?>
        
      </form>
      
      </div>
    </div>
    