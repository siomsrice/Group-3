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
  <form action="<?php echo base_url().'admin/updatedesuppliertails/'?>" method="POST" class="form-container mx-auto  shadow-container" id="myForm" style="width:80%" enctype="multipart/form-data">
      <h3 class="mb-3 text-center">Edit Supplier</h3>
      <input type="hidden" name="userid" value="<?php echo $row->SupplierId; ?>">
        
      <?php { ?>
      <div class="row">
      <div class="col-md-6">
      <div class="form-group">
          <label>Profile Picture</label>
          <input type="file" class="form-control" name="files[]" value="<?php echo $row->file_name;?>" />
         </div>
            <div class="form-group">
              <label for="" class="form-label">Supplier Name</label>
              <input type="text" class="form-control" name="Name" value="<?php echo $row->Name;?>" >
              
        </div>
        <div class="form-group">
          <label for="" class="form-label">Supplier Email</label>
          <input type="email" class="form-control" name="Email" value="<?php echo $row->Email;?>" >
        </div> 
            </div>
        <div class="col-md-6">
                
        <div class="form-group">
          <label for="" class="form-label">Website Url</label>
          <input type="text" class="form-control" name="Url" value="<?php echo $row->Url;?>" >
        </div>
        
          <div class="form-group">
          <label for="" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" name="Phone"value="<?php echo $row->Phone;?>"  >
        </div>
        <div class="form-group">
          
          <label for="" class="form-label">Address</label>
          <input type="tel" class="form-control" name="Address" value="<?php echo $row->Address;?>" >
        </div>
        </div>
        
      
         </div> 
         
         <?php } ?>
         <button type="submit" name="updatesupplier" value="Save Data" class="btn btn-primary">Submit</button>
         <?php echo !empty($statusMsg)?'<p class="status-msg">'.$statusMsg.'</p>':''; ?>
   
  </form>
 
  </div>
</div>
