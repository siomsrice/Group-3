<?=isset($message) ? $message: "";?>

<?php 
    #test to see values
    #print_r($user);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Builder</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>Front-End/prof/style.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Front-End/prof/style.css">
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
                <a href="#" class="navbar-brand">PC BUILDER - Profile</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <div class="dropdown">
                            <button class="btn btn-dark dropdown-toggle mx-3" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-search"></i></button>
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
                        <a href="<?php echo base_url()."home"?>" class="nav-item nav-link mx-4"><i class="bi bi-house"></i></a>
                        <a href="<?php echo base_url()."cart"?>" class="nav-item nav-link mx-4"><i class="bi bi-cart-plus"></i></a>
                        <a href="#" class="nav-item nav-link mx-4"><i class="bi bi-bell"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->

    <!-- Profile Start -->
     <div class="profile">
        <div class="row">
            <div class="col-md-2">
                <div class="container1">
                    <div class="row1">
                        <h1>My Account</h1>
                        <ul>
                            <li>
                                <a href="<?php echo base_url()."users/updateUser"?>">Edit Account Details</a>
                                <a href="#">Delete Account</a>
                            </li>
                        </ul>
                        <h1>My Cart</h1>
                        <ul>
                            <li>
                                <p>Incoming Orders</p>
                                <p>Received Orders</p>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="row2">
                        <h1>
                        </h1>
                    </div>
                </div>
            </div>

             <div class="col-md-8" "col-xs-8">
                <div class="container2">
                    <div class="credentials">
                        <h1>My Profile</h1>
                        <p>Username: <?php echo $user['usersUid'] ?></p> 
                        <p>Name: <?php echo $user['firstName'] ?> <?php echo $user['lastName'] ?></p>
                        <p>Email: <?php echo $user['usersEmail'] ?></p>
                        <p>Phone: <?php echo $user['phone'] ?></p>
                        <p>Gender: <?php echo $user['usersUid'] ?></p>
                        <p>Birthday: <?php echo $user['usersUid'] ?></p>
                        <p><b>For Delivery Purposes</b></p>
                        <p>Home Address: <?php echo $user['address'] ?></p>
                        <p>Office Address: <?php echo $user['address'] ?></p>
                    </div>

                    <div class="user-image">
                    picture here
                    </div>
                </div>
            </div>

             <div class="col-md-2">
                 <div class="container3">
                    
                 </div>
            
            </div>

        </div>
     
     </div>
    <!-- Profile End -->



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<!--<form method="POST" action="/users/updateUser">
    Enter Username: <input type="text" name="usersUid"><br/>
    Enter Password: <input type="password" name="usersPwd"><br/>
    <input type="submit" value="update">
</form>-->


<!---- FOOTER ----->

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PC Builder</title>
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>Front-End/footer/style.css">
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
        <body class="d-flex flex-column min-vh-100">
            
        </body>
    
        <!-- Footer Start here -->
        <footer class="page-footer pt-4 mt-auto">
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
                    <li><a href=<?php echo base_url()."users/viewUser"?>">Profile</a></li>
                    <li><a href="<?php echo base_url()."users/login"?>">Login</a></li>
                    <li><a href="<?php echo base_url()."users/register"?>">Sign Up</a></li>
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
        <!-- Footer End Here -->
    
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    </html>
