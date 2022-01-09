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
  <form action="" method="POST" class="" id="myForm" style="width:50%" enctype="multipart/form-data">
   <div class="row-4">
    <div class="mb-3">
      <h3 class="mb-3 p-2 text-center mb-3">Add Supplier</h3>     
        <div class="mb-3">
          <label for="" class="form-label">Brand ID</label>
          <input type="text" class="form-control" name="categoryID" >
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Supplier Name</label>
          <input type="text" class="form-control" name="Name" >
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Supplier Email</label>
          <input type="email" class="form-control" name="Email" >
        </div> 
        <div class="mb-3">
          <label for="" class="form-label">Website Url</label>
          <input type="text" class="form-control" name="Url" >
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" name="Phone" >
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Address</label>
          <input type="tel" class="form-control" name="Address" >
        </div>
        <div class="upload form-group">
          <label>Profile Picture</label>
          <input type="file" class="form-control" name="files[]" />
         </div><br>
    <button type="submit" name="save" value="Save Data" class="btn btn-primary">Submit</button>
    </div> 
  </form>
  <?php echo !empty($statusMsg)?'<p class="status-msg">'.$statusMsg.'</p>':''; ?>
  </div>
</div>
