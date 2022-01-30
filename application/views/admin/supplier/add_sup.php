<?php
    $this->load->view('admin/templates/header2');
?>

    <div class="container">
    
<div class="center">
  <form action="" method="POST" class="form-container mx-auto  shadow-container" id="myForm" style="width:80%" enctype="multipart/form-data">
      <h3 class="mb-3 text-center">Add Supplier</h3>  
      <div class="row">
            <div class="col-md-6">
            <div class="form-group">
          <label>Profile Picture</label>
          <input type="file" class="form-control" name="files[]" />
         </div>
            <div class="form-group">
              <label for="" class="form-label">Supplier Name</label>
              <input type="text" class="form-control" name="Name" >
              
        </div>
        <div class="form-group">
          <label for="" class="form-label">Supplier Email</label>
          <input type="email" class="form-control" name="Email" >
        </div> 
            </div>
        <div class="col-md-6">
                
        <div class="form-group">
          <label for="" class="form-label">Website Url</label>
          <input type="text" class="form-control" name="Url" >
        </div>
        
          <div class="form-group">
          <label for="" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" name="Phone" >
        </div>
        <div class="form-group">
          
          <label for="" class="form-label">Address</label>
          <input type="tel" class="form-control" name="Address" >
        </div>
        </div>
        
      
         </div> 
         
         <button type="submit" name="save" value="Save Data" class="btn btn-primary">Submit</button>
         <?php echo !empty($statusMsg)?'<p class="status-msg">'.$statusMsg.'</p>':''; ?>
   
  </form>
 
  </div>
</div>
