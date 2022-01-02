<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css"
            href="<?php echo base_url('assets/css/header_style.css'); ?>">
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
                <a href="<?php echo base_url().'admin/dashboard';?>" class="navbar-brand">ADMIN PANEL</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav ms-auto">

                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-search"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                        <a href="<?php echo base_url()."index.php/admin/manageuser"?>" class="nav-item nav-link mx-3">Manage User</a> 

                                        <!--
                                            *removed php tags*
                                        <li><a href=" /* echo base_url(); 'index.php/admin/register'*/?>" class="dropdown-item" >Create User</a></li>
                                        <li><a class="dropdown-item" href="/* echo base_url(); 'index.php/admin/register';*/?>">testing</a></li>
                                        -->
                                        
                                        <a href="<?php echo base_url()."index.php/admin/register"?> "class="nav-item nav-link mx-3">Create User</a> 
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-search"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                    <a href="<?php echo base_url()."index.php/admin/supplier"?> "class="nav-item nav-link mx-3">Manage Supplier</a> 
                                    <a href="<?php echo base_url()."index.php/admin/createsupplier"?> "class="nav-item nav-link mx-3">Create Supplier</a> 
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-search"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                        <a href="<?php echo base_url()."index.php/admin/category"?> "class="nav-item nav-link mx-3">Manage Category</a> 
                                        <a href="<?php echo base_url()."index.php/admin/createcategory"?> "class="nav-item nav-link mx-3">Create Category</a>          
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-search"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                        <a href="<?php echo base_url()."index.php/admin/manageitems"?> "class="nav-item nav-link mx-3">Manage Item/s</a> 
                                        <a href="<?php echo base_url()."index.php/admin/createitem"?> "class="nav-item nav-link mx-3">Create Item/s</a> 
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-search"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                        <li><a class="dropdown-item" href="#">All Orders</a></li> 
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-search"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                        <li><a class="dropdown-item" href="#">Logout </a></li> 
                                        <a href="<?php echo base_url()."index.php/admin/logout"?>" class="nav-item nav-link mx-3">Logout</a> 
                                </ul>
                            </div>       
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>