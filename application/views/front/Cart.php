<?php
    $this->load->view('templates/header');
?>



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

 <!-- Footer Start here -->
 <footer class="page-footer pt-4 mt-auto">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Front-End/footer/style.css">
          <div class="container-fluid p-4">
            <div class="row">
              <div class="col-lg-6 col-xs-12 about-company pr-10">
                <h1 class="text-uppercase">PC Builder</h1>
                <p class="pr-5 text-white-50">Want a Custom PC without the Expensive Price Tag?</p>
                <p class="pr-5 text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id harum veritatis quasi tempore fugiat eaque quis asperiores iure excepturi consequuntur? Delectus provident explicabo praesentium assumenda possimus id earum error magni?</p>
                
              </div>
              <div class="col-lg-3 col-xs-12 links">
                <h3 class="mt-lg-0 mt-sm-3 text-uppercase fw-bold">Links</h3>
                  <ul class="m-0 p-0">
                    <li><a href="<?php echo base_url()."home"?>">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="<?php echo base_url()."login"?>">Login</a></li>
                    <li><a href="<?php echo base_url()."register"?>">Sign Up</a></li>
                  </ul>
              </div>
              <div class="col-lg-3 col-xs-12 location">
                <h3 class="mt-lg-0 mt-sm-4 text-uppercase fw-bold">Location</h3>
                <p>Blk.12 Lot 21, Sample Street, Bacoor, Cavite, Philippines 4102</p>
                <p class="mb-0">Phone: +63 921 250 1357</p>
                <p>Email: <a href="mailto:PCBuilder@gmail.com">PCBuilder@gmail.com</a></p>
                <p><a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col copyright">
                <p class=""><small class="text-white-50">© 2022. All Rights Reserved.</small></p>
              </div>
            </div>
          </div>
          </footer>
     <!-- Footer End here -->


<!-- HTML END -->

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
