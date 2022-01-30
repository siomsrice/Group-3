<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Builder - Login</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Front-End/login/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- Header Start -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">PC BUILDER</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="<?php echo base_url()."home"?>" class="nav-item nav-link mx-3">Home</a>
                        <a href="#" class="nav-item nav-link mx-3">About</a>
                        <a href="#" class="nav-item nav-link mx-3">Blog</a>
                        
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->

    <!-- Cedrick Header Start -->
    <!-- <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>
            <label class="logo">PC Builder</label>
            <ul>
                <li><a class="active" href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Sign In</a></li>
                <li><a href="#">Sign Up</a></li>
            </ul>
        </nav> -->
    <!-- Cedrick Header End -->
    
    <!-- Login Start -->
	<section class="Form my-4 mx-5 w-100 mx-auto text-white">
        <h1 class="text-center">PC BUILDER</h1>
        <h5 class="text-center">Want a Custom PC Without the Expensive Price tag?</h5>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto bg-dark bg-opacity-50 p-5 mt-5">
					<h3 class="pb-4 text-center">Login Your Account</h3>

                    <?=isset($message) ? $message: "";?>

					<form method="post" class="">
						<div class="form-row">
							<div class="col-12">
								<input type="email" name="usersUid" placeholder="Email/Username"  class="form-control my-3 p-3">
							</div>
						</div>
						<div class="form-row">
							<div class="col-12">
								<input type="password" name="usersPwd" placeholder="Password" class="form-control my-3 p-3">
							</div>
						</div>
                        <div class="form-check d-flex justify-content-between">
                            <div class="formcheck">
                                <input class="form-check-input" type="checkbox" id="flexCheckIndeterminate">
                                <label class="form-check-label" for="flexCheckIndeterminate"> Keep Me Signed In</label>
                            </div>
                            <a href="#">Forgot Password?</a>
                        </div>
						<div class="form-row">
							<div class="col-lg-12 d-flex justify-content-around">
								<button type="reset" class="mt-3 mb-4 col-3">Clear</button>
                                <button type="submit" value="Login" class="mt-3 mb-4 col-3">Login</button>
							</div>
						</div>
						<p class="text-center">Don't have an account? <a href="<?php echo base_url()."index.php/users/register"?>"><span>Sign Up</span></a></p>
					</form> 
				</div>
			</div>
		</div>
	</section>
    <!-- Login End -->

   
    <!-- Footer Start here -->
    <footer class="page-footer pt-4 mt-auto">
<<<<<<< Updated upstream
    <link rel="stylesheet" href="<?php echo base_url(); ?>Front-End/foot/style.css">
=======
    <link rel="stylesheet" href="<?php echo base_url(); ?>Front-End/footer/style.css">
>>>>>>> Stashed changes
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
                    <li><a href="#">Profile</a></li>
                    <li><a href="<?php echo base_url()."login"?>">Login</a></li>
                    <li><a href="<?php echo base_url()."register"?>">Sign Up</a></li>
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
     <!-- Footer End here -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>l



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>







<!--<?=isset($message) ? $message: "";?>
<form method="POST">
    Enter Username: <input type="text" name="usersUid"><br/>
    Enter Password: <input type="password" name="usersPwd"><br/>
    <input type="submit" value="login">
</form>
