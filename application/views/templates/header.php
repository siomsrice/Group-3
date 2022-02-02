<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Builder</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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
    <!-- Carousel -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script async src='/cdn-cgi/bm/cv/669835187/api.js'></script></head>

</head>
<body>
    <!-- Header Start -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="<?php echo base_url()?>" class="navbar-brand">PC BUILDER</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    if(isset($_SESSION["usersUid"])){ ?>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav ms-auto">
                            
                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-search"></i></button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                        <input class="form-control bg-dark" type="text" placeholder="Search" aria-label="Search">
                                        <li><a class="dropdown-item" href="#">Pre-Built PC</a></li>
                                        <li><a class="dropdown-item" href="#">Motherboard</a></li>
                                        <li><a class="dropdown-item" href="#">Processor</a></li>
                                        <li><a class="dropdown-item" href="#">Video Card</a></li>
                                        <li><a class="dropdown-item" href="#">HDD</a></li>
                                        <li><a class="dropdown-item" href="#">SSD</a></li>
                                        <li><a class="dropdown-item" href="#">Case</a></li>
                                        <li><a class="dropdown-item" href="#">Monitor</a></li>
                                        <li><a class="dropdown-item" href="#">Sound Card</a></li>
                                        <li><a class="dropdown-item" href="#">Speakers</a></li>
                                </ul>
                            </div>

                                <a href="<?php echo base_url()."index.php/home/index"?>" class="nav-item nav-link mx-4"><i class="bi bi-house"> Home</a></i>
                                <a href="<?php echo base_url()."index.php/home/about"?>" class="nav-item nav-link mx-3">About</a>
                                <a href="<?php echo base_url()."index.php/supplier/index"?>" class="nav-item nav-link mx-3">Suppliers</a>
                                <a href="<?php echo base_url()."index.php/users/viewUser"?>" class="nav-item nav-link mx-3">Profile</a>
                                <a href="<?php echo base_url()."index.php/users/logout"?>" class="nav-item nav-link mx-3">Sign Out</a>
                            </div>
                        </div>
                    <?php } else{ ?>
                                <a href="<?php echo base_url()."index.php/home/index"?>" class="nav-item nav-link mx-3">Home</a>
                                <a href="<?php echo base_url()."index.php/home/about"?>" class="nav-item nav-link mx-3">About</a>
                                <a href="<?php echo base_url()."index.php/supplier/index"?>" class="nav-item nav-link mx-3">Suppliers</a>
                                <a href="<?php echo base_url()."index.php/users/login"?>" class="nav-item nav-link mx-3">Sign In</a>
                                <a href="<?php echo base_url()."index.php/users/register"?>" class="nav-item nav-link mx-3">Sign Up</a> 
                    <?php } ?>
            </div>
        </nav>
    </header>

    <?php if($this->session->flashdata('msg') != ""):?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('msg');?>
    </div>
    <?php endif ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>