<?php
    $this->load->view('templates/header');
?>

<div class="container p-4">
    <div class="row welcome text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Products of <?php echo $sup['Name']; ?></h1>
        </div>
    </div>
    <div class="container res-card">
        <div class="card">
            <?php $img = $sup['file_name'];?>
            <img src="<?php echo base_url().'public/uploads/'.$img; ?>" class="card-img-top" />
            <div class="card-body">
                <h4 class="card-title font-weight-bold text-primary"><?php echo $sup['Name']; ?></h4>
                <p class="card-text lead">Address: <?php echo $sup['Address']; ?></p>
                <p class="card-text lead">Website URL: <?php echo $sup['Url']; ?></p>
                <p class="card-text lead">Email: <?php echo $sup['Email']; ?></p>
                <p class="card-text lead">Contact No: +<?php echo $sup['Phone']; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="container p-4 dish-card">
    <div class="row">
        <?php if(!empty($items)) { ?>
        <?php foreach($items as $item) { ?>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="card mb-4 shadow-sm">
                <?php $image = $item['file_name'];?>
                <img class="card-img-top" src="<?php echo base_url().'public/uploads/items/'.$image; ?>">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><?php echo $item['itemName']; ?></h4>
                        <h4 class="text-muted"><b>$<?php echo $item['price']; ?></b></h4>
                    </div>
                    <p class="card-text"><?php echo $item['itemDesc']; ?></p>
                    <a href="<?php echo base_url().'item/addToCart/'.$item['itemId']; ?>" class="btn btn-primary"><i
                            class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } else { ?>
        <div class="jumbotron">
            <h1>No records found</h1>
        </div>
        <?php } ?>
    </div>
    <hr class="my-4">
</div>

<?php
    	$this->load->view('templates/footer');
	?>