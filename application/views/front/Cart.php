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
</table>