<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css"
            href="<?php echo base_url('assets/css/adminstyle.css'); ?>">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- Boostrap Icons -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <!-- Header Start -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="<?php echo base_url().'admin/dashboard';?>" class="navbar-brand">PC BUILDER - Admin Panel</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle mx-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">User</button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="<?php echo base_url()."index.php/admin/manageuser"?>">Manage User</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url()."index.php/admin/register"?>">Create User</a></li>
                                
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle mx-3" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">Supplier</button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="<?php echo base_url()."index.php/admin/supplier"?>">Manage Supplier</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url()."index.php/admin/createsupplier"?>">Create Supplier</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle mx-3" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">Category</button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton3">
                                <li><a class="dropdown-item" href="<?php echo base_url()."index.php/admin/category"?>">Manage Category</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url()."index.php/admin/createcategory"?>">Create Category</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle mx-3" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">Items</button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton4">
                                <li><a class="dropdown-item" href="<?php echo base_url()."index.php/admin/manageitems"?>">Manage Items</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url()."index.php/admin/createitem"?>">Create Items</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle mx-3" type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-expanded="false">Orders</button>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton5">
                                <li><a class="dropdown-item" href="<?php echo base_url()."index.php/admin/orders"?>">All Order</a></li>
                            </ul>
                        </div>
                        <a href="<?php echo base_url()."index.php/admin/logout"?>" class="nav-item nav-link mx-4">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header Start -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>