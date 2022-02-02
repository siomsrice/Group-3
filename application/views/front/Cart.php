<?php
    $this->load->view('templates/header');
?>

<p>Shopping Cart</p>
<table>
    <thread>
        <tr>
            <th width="10%"></th>
            <th width="10%">Item</th>
            <th width="10%">Price</th>
            <th width="10%">Quantity</th>
            <th width="10%">Subtotal</th>
            <th width="10%">Action</th>
        </tr>
    </thread>
    <tbody id="myTable">
                <?php if($this->cart->total_items() > 0) { 
                    foreach($cartItems as $item) { ?>
                <tr>
                    <td>
                        <?php $image = $item['file_name'];?>
                        <img class="" width="70"
                            src="<?php echo base_url().'public/uploads/items/'.$image; ?>">
                    </td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo '₱'. $item['price']; ?></td>
                    <td><input type="number" class="form-control text-center" value="<?php echo $item['qty']; ?>"
                            onChange="updateCartItem(this, '<?php echo $item['rowid'] ?>')">
                    </td>
                    <td><?php echo '₱'.$item['subtotal']; ?></td>
                    <td>
                        <a href="<?php echo base_url().'cart/removeItem/'.$item['rowid'] ; ?>"
                            onclick="return confirm('Are you sure?')"
                            class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fas fa-trash-alt">Remove</i></a>
                    </td>
                </tr>
                <?php } ?>
                <?php } else { ?>
                <tr>
                    <td colspan="6"><p>No Items In Your Cart!</p></td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td><a href="<?php echo base_url().'home' ?>" class="btn btn-sm btn-warning"><i class="fas fa-angle-left"></i> Continue Ordering</a></td>
                    <td colspan="3"></td>
                    <?php  if($this->cart->total_items() > 0) { ?>
                    <td class="text-left">Grand Total: <b><?php echo '₱'.$this->cart->total();?></b></td>
                    <td><a href="<?php echo base_url().'checkout';?>" class="btn btn-sm btn-success btn-block">Checkout <i class="fas fa-angle-right"></i></a></td>
                    <?php } ?>
                </tr>
            </tfoot>
</table>
<!-- HTML END -->

<!-- testing -->
<p style="color:white">Shopping Cart</p>
<table>
    <thread>
        <tr>
            <th width="10%" style="color:white"></th>
            <th width="10%" style="color:white">Item</th>
            <th width="10%" style="color:white">Price</th>
            <th width="10%" style="color:white">Quantity</th>
            <th width="10%" style="color:white">Subtotal</th>
            <th width="10%" style="color:white">Action</th>
        </tr>
    </thread>
    <tbody id="myTable">
                <?php if($this->cart->total_items() > 0) { 
                    foreach($cartItems as $item) { ?>
                <tr>
                    <td>
                        <?php $image = $item['file_name'];?>
                        <img class="" width="70"
                            src="<?php echo base_url().'public/uploads/items/'.$image; ?>">
                    </td>
                    <td style="color:white"><?php echo $item['name']; ?></td>
                    <td style="color:white"><?php echo '₱'. $item['price']; ?></td>
                    <td ><input type="number" class="form-control text-center" value="<?php echo $item['qty']; ?>"
                            onChange="updateCartItem(this, '<?php echo $item['rowid'] ?>')">
                    </td>
                    <td style="color:white"><?php echo '₱'.$item['subtotal']; ?></td>
                    <td>
                        <a href="<?php echo base_url().'cart/removeItem/'.$item['rowid'] ; ?>"
                            onclick="return confirm('Are you sure?')"
                            class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fas fa-trash-alt">Remove</i></a>
                    </td>
                </tr>
                <?php } ?>
                <?php } else { ?>
                <tr>
                    <td colspan="6"><p>No Items In Your Cart!</p></td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td><a href="<?php echo base_url().'home' ?>" class="btn btn-sm btn-warning"><i class="fas fa-angle-left"></i> Continue Ordering</a></td>
                    <td colspan="3"></td>
                    <?php  if($this->cart->total_items() > 0) { ?>
                    <td class="text-left">Grand Total: <b><?php echo '₱'.$this->cart->total();?></b></td>
                    <td><a href="<?php echo base_url().'checkout';?>" class="btn btn-sm btn-success btn-block">Checkout <i class="fas fa-angle-right"></i></a></td>
                    <?php } ?>
                </tr>
            </tfoot>
</table>

<!-- TESTING -->
<h1>Shopping Cart</h1>

    <div class="shopping-cart">

    <div class="column-labels">
        <label class="product-image">Image</label>
        <label class="product-details">Product Name</label>
        <label class="product-price">Price</label>
        <label class="product-quantity">Quantity</label>
        <label class="product-removal">Remove</label>
        <label class="product-line-price">Subtotal</label>
    </div>
    <!-- ROW 2  -->
    <div class="product">
		<?php if($this->cart->total_items() > 0) { 
        foreach($cartItems as $item) { ?>
			<div class="items">
				<div class="product-image">
					<?php $image = $item['file_name'];?>
				<img src="<?php echo base_url().'public/uploads/items/'.$image; ?>">
				</div>
				<div class="product-details">
					<div class="product-title"><?php echo $item['name']; ?></div>
				</div>
				<div class="product-price"><?php echo '₱'. $item['price']; ?></div>
				<div class="product-quantity">
					<input type="number" value="<?php echo $item['qty']; ?>" min="1">
				</div>
				<div class="product-removal">
					<a href="<?php echo base_url().'cart/removeItem/'.$item['rowid'] ; ?>" class="btn btn-danger"
					onclick="return confirm('Are you sure?')" >
						Remove
					</a>
				</div>
			<div class="product-line-price"><?php echo '₱'.$item['subtotal']; ?></div>
		</div>
		<?php } ?>
        <?php } else { ?>
			<tr>
                    <td colspan="6"><p>No Items In Your Cart!</p></td>
                </tr>
			<?php } ?>
	</div>

	<div class="totals">
      <div class="totals-item totals-item-total">
        <label>Grand Total</label>
        <div class="totals-value" id="cart-total"><?php echo '₱'.$this->cart->total();?></div>
      </div>
      <div class="totals-item totals-item-total">
        <div class="totals-value" >
            <p style=" position:relative; left:12px; bottom:20px;">
                   
                <a href="<?php echo base_url().'checkout';?>" class="btn btn-success">
                   Checkout
                </a>
            </p>
        </div> 
      </div>
    </div>

	<p style=" position:relative; right:12px; bottom:20px;">
				   <a href="<?php echo base_url().'home' ?>" class="btn btn-warning">
					  <- Continue Ordering
				   </a>
			  </p>


<!-- TEST END -->



<?php
    	$this->load->view('templates/footer');
	?>

<script>
function updateCartItem(obj, rowid) {
    $.get("<?php echo base_url().'cart/updateCartItemQty/'; ?>", {
            rowid: rowid,
            qty: obj.value
        },
        function(resp) {
            if (resp == 'ok') {
                location.reload();
            } else {
                alert('Cart update failed, please try again.');
            }
        });
}
</script>
