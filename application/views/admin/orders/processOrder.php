<?php
    $this->load->view('admin/templates/header2');
?>
<div class="container table-responsive m-t-20">
    <h2 class="py-3 text-center">View User's Order</h2>
    <table id="myTable" class="table table-bordered table-hover table-striped dataTable">
        <tbody>
            <tr>
                <td><strong>Ordered By:</strong></td>
                <td><?php echo $order->usersId; ?></td>
            </tr>
            <tr>
                <td><strong>Food Item:</strong></td>
                <td><?php echo $order->itemName; ?></td>
            </tr>
            <tr>
                <td><strong>Quantity:</strong></td>
                <td><?php echo $order->quantity; ?></td>
            </tr>
            <tr>
                <td><strong>Price:</strong></td>
                <td><?php echo "₱".$order->price; ?></td>
            </tr>
           
            <tr>
                <td><strong>Order Date:</strong></td>
                <td><?php echo $order->successDate; ?></td>
            </tr>

            <form action="<?php echo base_url().'admin/updateorderdetails/'?>" method="POST" class="form-container mx-auto  shadow-container" id="myForm" style="width:80%" enctype="multipart/form-data">

      <input type="hidden" name="userid" value="<?php echo $order->OrderId; ?>">
        
      <?php { ?>
    
      
    <tr>
    <td><strong>Status</strong></td>
         <td> <select name="status" id="status"
                    class="form-control ">
                    <option>--Select Supplier--</option>
                    <?php 
                    if (!empty($status)) { 
                        foreach($status as $data) {
                            ?>
                    <option value="<?php echo $data['status'];?>">
                        <?php echo set_select('status');?>
                        <?php echo $data['status'];?>
                    </option>
                    <?php }
                    }
                    ?>
                </select>
         </td>
         
      </tr> 
      <tr>
         <button type="submit" name="updatestatus" value="Save Data" class="btn btn-primary">Submit</button>
         </tr>
      </div> 
         <?php } ?>
        
         
        
  </form>
   
        </tbody>
    </table>
   </div>