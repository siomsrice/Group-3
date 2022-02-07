<?php
    $this->load->view('templates/header');
?>

    <div class = "container">
        <table class="table table-primary table-sortable" role="grid">
            <h1 class="heading-2">

         <!-- ROW 1  -->
        <h2 style="color:white; font-family: 'Courier New', monospace;"><b>ORDERSSS</b></h2>
        
      </h1>
      <thead>
        <tr>
          <th class="header" scope="col" role="columnheader"><span>ITEM</span></th>
          <th class="text-right header" scope="col" role="columnheader"><span>Quantity</span></th>
          <th class="text-right header" scope="col" role="columnheader"><span>Price</span></th>
          <th class="text-right header" scope="col" role="columnheader"><span>Status</span></th>
          <th class="text-right header" scope="col" role="columnheader"><span>Order Date</span></th>
          <th class="text-right header" scope="col" role="columnheader"><span>Shipping Fee</span></th>
         <th class="text-right header" scope="col" role="columnheader"><span>Action</span></th>
        </tr>
  
      </thead>
        <tbody>
            <?php if(!empty($orders)) {?>
            <?php foreach($orders as $order) { ?>
                <tr>
                <td class="">INTEL
                    <div class="small"><?php echo $order['itemName']; ?></div>
                </td>
            
                <td class="text-right"><p style= "position:relative; left:45px;"><?php echo $order['quantity']; ?></p></td>
                <td class="text-right"><?php echo '₱'.$order['price']; ?></td>

                <!-- STATUS HERE-->
                <td class="text-right"><?php echo '₱'.$order['status']; ?></td>

                <td class="text-right"><p style= "position:relative; left:15px;"><?php echo $order['orderDate']; ?></p></td>
                <td class="text-right"><p style= "position:relative; left:35px;">$1.99</p></td>

                <!-- DELETE ORDER HERE --> 

                <!--  <a href="<?php echo base_url().'admin/processOrder/'.$order['OrderId'];?>"
                                class="btn btn-info mb-1"><i class="fas fa-arrow-alt-circle-right"></i> Process</a> -->
                <td class="text-right"><a href="#" class="btn btn-danger">
                    Cancel
                    </a></td>
                </tr>
                    <?php } ?>
                    <?php } else { ?>
                    <tr>
                        <td colspan="6">Records not found</td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
  </div>




    <?php
    	$this->load->view('templates/footer');
	?>