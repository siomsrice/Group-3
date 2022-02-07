<?php
    $this->load->view('templates/header');
?>

<!-- testing -->
<h1 style="color:white">Shopping Cart</h1>
<table>
    <thread>
        <tr>
            <th width="10%" style="color:white"></th>
            <th width="10%" style="color:white">Item</th>
            <th width="10%" style="color:white">Price</th>
            <th width="10%" style="color:white">Quantity</th>
            <th width="10%" style="color:white">Total</th>
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
                    <td ><input type="number" style=width:70px; class="form-control text-center" value="<?php echo $item['qty']; ?>"
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
                    <td colspan="3"></td>
                    <?php  if($this->cart->total_items() > 0) { ?>
                    <td class="text-left" style= color:white;position:relative;right:-150px; >SubTotal: <b><?php echo '₱'.$this->cart->total();?></b></td>
                    <?php } ?>
                </tr>

                <tr>
                    <td colspan="3"></td>
                    <?php  if($this->cart->total_items() > 0) { ?>
                    <td class="text-left" style= color:white;position:relative;right:-119px; >Shipping Fee: ₱0<b></b></td>
                    <?php } ?>
                </tr>
                    
                <tr>
                    <td><a href="<?php echo base_url().'home' ?>" class="btn btn-sm btn-warning"><i class="fas fa-angle-left"></i> Continue Ordering</a></td>
                    <td colspan="3"></td>
                    <?php  if($this->cart->total_items() > 0) { ?>
                    <td class="text-left" style= color:white;position:relative;right:95px; >Grand Total: <b><?php echo '₱'.$this->cart->total();?></b></td>
                    <td><a href="<?php echo base_url().'checkout';?>" class="btn btn-sm btn-success btn-block">Checkout <i class="fas fa-angle-right"></i></a></td>
                    <?php } ?>
                </tr>
               
            </tfoot>
</table>


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
