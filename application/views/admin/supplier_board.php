<?php
    $this->load->view('admin/templates/header');
?>
<style>
    <?php
    include 'public/style.css';
    ?>
</style>


 



    <div class="container">
    
<div class="center">
<form action="" method="POST"
        class="" id="myForm" style="width:50%" enctype="multipart/form-data">
        <div class="mb-3">
        <h3 class="mb-3 p-2 text-center mb-3">Add Supplier</h3>
    <label for="" class="form-label">Supplier Name</label>
    <input type="text" class="form-control" name="sup_name" >
    <div class="mb-3">
  <label for="" class="form-label">Supplier Email</label>
    <input type="email" class="form-control" name="sup_email" >
  </div> 
  <div class="mb-3">
  <label for="" class="form-label">Supplier Url</label>
    <input type="text" class="form-control" name="sup_url" >
  </div>
  
   <div class="mb-3">
  <label for="" class="form-label">Category</label>
    <input type="#" class="form-control" name="category" >
  </div>

  <div class="upload form-group">
        <label>Profile Picture</label>
        <input type="file" class="form-control" name="files[]" />
        
    </div><br>
  <button type="submit" name="save" value="Save Data" class="btn btn-primary">Submit</button>

	</form>
  <?php echo !empty($statusMsg)?'<p class="status-msg">'.$statusMsg.'</p>':''; ?>
    </div>
</div>
