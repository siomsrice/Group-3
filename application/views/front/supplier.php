<?php
    $this->load->view('templates/header');
?>

<div class="container-fluid padding">
    <div class="row welcome text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Suppliers</h1>
        </div>
        <hr>
    </div>
</div>
<div class="container text-center padding dish-card">
    <div class="row container">
        <?php if(!empty($stores)) { ?>
        <?php foreach($stores as $store) { ?>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="card mb-4 shadow-sm">
                <?php $image = $store['file_name'];?>
                <img class="card-img-top" src="<?php echo base_url().'public/uploads/'.$image; ?>">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $store['Name']; ?></h4>
                    <p class="card-text mb-0"><?php echo $store['Address']; ?></p>
                    <hr>
                    <a href="<?php echo base_url().'item/list/'.$store['supplierId']; ?>" class="btn btn-primary">View
                        Items</a>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } else { ?>
        <h1>No records found</h1>
        <?php } ?>
    </div>
</div>

<?php
    	$this->load->view('templates/footer');
	?>