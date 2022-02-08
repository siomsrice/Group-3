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
                <td class=""><?php echo $order['itemName']; ?>
                    <div class="small"></div>
                </td>
            
                <td class="text-right"><p style= "position:relative; left:30px;color:black;"><?php echo $order['quantity']; ?></p></td>
                <td class="text-right"><?php echo '₱'.$order['price']; ?></td>

                <!-- STATUS HERE-->
                <?php $status = $order['status']; ?>
                <?php if ($status == "" or $status == "NULL"){ ?>
                    <td class="text-right">Processing</td>

                <?php } else if($status != "" or $status != "NULL") { ?>
            
                    <td class="text-right"><?php echo $order['status']; ?></td>
                <?php } ?>

                <td class="text-right"><p style= "position:relative; left:15px;color:black;"><?php echo $order['orderDate']; ?></p></td>
                <td class="text-right"><p style= "position:relative; left:35px;color:black;">₱49.99</p></td>

                <!-- DELETE ORDER HERE --> 
                <td class="text-right"><a href="<?php echo base_url().'orders/deleteOrder/'.$order['OrderId'];?>" class="btn btn-danger">
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    
  </div>




    <?php
    	$this->load->view('templates/footer');
	?>




 