<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Builder</title>
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css"
            href="<?php echo base_url(); ?>styles/header_style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                                <a href="#" class="nav-item nav-link mx-3">Home</a>
                                <a href="#" class="nav-item nav-link mx-3">About</a>
                                <a href="#" class="nav-item nav-link mx-3">Blog</a>
                                <a href="<?php echo base_url()."index.php/users/viewUser"?>" class="nav-item nav-link mx-3">Profile</a>
                                <a href="<?php echo base_url()."index.php/users/logout"?>" class="nav-item nav-link mx-3">Sign Out</a>
                            </div>
                        </div>
                    <?php } else{ ?>
                                <a href="#" class="nav-item nav-link mx-3">Home</a>
                                <a href="#" class="nav-item nav-link mx-3">About</a>
                                <a href="#" class="nav-item nav-link mx-3">Blog</a>
                                <a href="<?php echo base_url()."index.php/users/login"?>" class="nav-item nav-link mx-3">Sign In</a>
                                <a href="<?php echo base_url()."index.php/users/register"?>" class="nav-item nav-link mx-3">Sign Up</a> 
                    <?php } ?>
            </div>
        </nav>
    </header>