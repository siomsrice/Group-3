<?php
    $this->load->view('admin/templates/header');
?>


<div class="container">
    <div class="summary">
        User/s: <?php echo $countUser ?> <br>
        Supplier/s: <?php echo $countUser ?> <br>
        Item/s: <?php echo $countUser ?> <br>
        Total Orders: <?php echo $countUser ?> <br>
        Categories: <?php echo $countUser ?> <br>
        Pending Orders: <?php echo $countUser ?> <br>
        Delivered Orders: <?php echo $countUser ?> <br>
        Rejected Orders: <?php echo $countUser ?> <br>
    </div>

    <div class="report">
        Supplier Report: <?php echo $countUser ?> <br>
        <tbody id="myTable">
                <?php if(!empty($supReport)) {?>
                <?php foreach($supReport as $report) { ?>
                    <tr>
                        <td><?php echo $report->supplierId; ?></td>
                        <td><?php echo $report->Name; ?></td>
                        <td><?php echo $report->price; ?></td>
                        </tr>
                        <?php } ?>
                        <?php } else {?>
                        <tr>
                        <td colspan="4">Records not found</td>
                    </tr>
            <?php }?>
    </div>
</div>


