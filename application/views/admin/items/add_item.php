<?php
    $this->load->view('admin/templates/header');
?>

<div class="conatiner">
    <form action="<?php echo base_url().'admin/createitem';?>" method="POST" id="myForm" name="myForm"
        class="form-container mx-auto  shadow-container" style="width:80%" enctype="multipart/form-data">
        <h3 class="mb-3 text-center">Add Items</h3>
        <div class="form-group">
            <label class="control-label">Select Supplier</label>
            <select name="sname" id="supname"
                class="form-control <?php echo (form_error('sname') != "") ? 'is-invalid' : '';?>">
                <option>--Select Supplier--</option>
                <?php 
                if (!empty($stores)) { 
                    foreach($stores as $supplier) {
                        ?>
                <option value="<?php echo $supplier['supplierId'];?>">
                    <?php echo set_select('supname');?>
                    <?php echo $supplier['Name'];?>
                </option>
                <?php }
                }
                ?>
            </select>
            <?php echo form_error('sname');?>
            <span></span>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="itemName">Item Name</label>
                    <input type="text" class="form-control my-2 
                    <?php echo (form_error('itemName') != "") ? 'is-invalid' : '';?>" name="itemName" id="itemName"
                        placeholder="Enter Item name" value="<?php echo set_value('itemName'); ?>">
                    <?php echo form_error('itemName'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control my-2
                    <?php echo (form_error('price') != "") ? 'is-invalid' : '';?>" id="price" name="price"
                        placeholder="Enter Price ₱" value="<?php echo set_value('price'); ?>">
                    <?php echo form_error('price'); ?>
                    <span></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="itemDesc">About</label>
                    <input type="text" class="form-control my-2
                    <?php echo (form_error('itemDesc') != "") ? 'is-invalid' : '';?>" id="itemDesc" name="itemDesc"
                        placeholder="About" value="<?php echo set_value('itemDesc'); ?>">
                    <?php echo form_error('itemDesc'); ?>
                    <span></span>
                </div>
                <div class="form-group">
                    <label for="itemImg">Item Image</label>
                    <input type="file" id="itemImg" name="itemImg" placeholder="Enter Image" class="form-control my-2
                    <?php echo(!empty($errorImageUpload))  ? 'is-invalid' : '';?>">
                    <?php echo (!empty($errorImageUpload)) ? $errorImageUpload : '';?>
                    <span></span>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary ml-2">Submit</button>
        <a href="<?php echo base_url().'admin/manageitem'?>" class="btn btn-secondary">Back</a>
    </form>
</div>

<!--HTML END-->


<!-- DITO FOOTER -->

<!-- SCRIPTS FOR ERROR HANDLING -->

<script>
    const form = document.getElementById('myForm');
    const supname = document.getElementById("supname");
    const itemName = document.getElementById("itemName");
    const price = document.getElementById("price");
    const itemDesc = document.getElementById("itemDesc");
    const itemImg = document.getElementById("itemImg");

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        validate();
    })

    const sendData = (sRate, count) => {
        if (sRate === count) {
            event.currentTarget.submit();
        }
    }

    const isImage = (itemImg) => {
        fType = itemImg.substring(itemImg.indexOf('.') + 1);
        if(fType === "gif" || fType === "jpg" || fType === "png" || fType ==="jpeg") {
            return "pass";   
        } else {
            return "fail";
        }
    }

    const successMsg = () => {
        let formCon = document.getElementsByClassName('form-control');
        var count = formCon.length - 1;
        for (var i = 0; i < formCon.length; i++) {
            if (formCon[i].className === "form-control my-2 success") {
                var sRate = 0 + i;
                sendData(sRate, count);
            } else {
                return false;
            }
        }
    }

    const validate = () => {
        const supnameVal = supname.value.trim();
        const itemNameVal = itemName.value.trim();
        const priceVal = price.value.trim();
        const itemDescVal = itemDesc.value.trim();
        const itemImgVal = itemImg.value.trim();

        if (supnameVal === "--Select Supplier--") {
            setErrorMsg(supname, 'select supplier name');
        } else {
            setSuccessMsg(supname);
        }
        if (itemNameVal === "") {
            setErrorMsg(itemName, 'item name cannot be blank');
        } else {
            setSuccessMsg(itemName);
        }
        if (priceVal === "") {
            setErrorMsg(price, 'price cannot be blank');
        } else {
            setSuccessMsg(price);
        }
        if (itemDescVal === "") {
            setErrorMsg(itemDesc, 'about name cannot be empty');
        } else {
            setSuccessMsg(itemDesc);
        }
        if (itemImgVal == "") {
            setErrorMsg(itemImg, 'select image');
        } else if(isImage(itemImgVal) === "fail"){
            setErrorMsg(itemImg, 'file format is not valid');
        } else {
            setSuccessMsg(itemImg);
        }

        successMsg();

    }

    function setErrorMsg(ele, errormsgs) {
        const formCon = ele.parentElement;
        const formInput = formCon.querySelector('.form-control');
        const span = formCon.querySelector('span');
        span.innerText = errormsgs;
        formInput.className = "form-control my-2 is-invalid";
        span.className = "invalid-feedback font-weight-bold";
    }

    function setSuccessMsg(ele) {
        const formGroup = ele.parentElement;
        const formInput = formGroup.querySelector('.form-control');
        formInput.className = "form-control my-2 success";
    }
</script>