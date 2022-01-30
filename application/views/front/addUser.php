<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Builder - Sign Up</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Front-End/sign-in/style.css">
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
                        <a href="#" class="nav-item nav-link mx-3">Profile</a>
                        <a href="#" class="nav-item nav-link mx-3">Login</a>
                        <a href="#" class="nav-item nav-link mx-3">Sign Up</a>
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

    <!-- Sign Up Start -->
	<section class="Form my-4 mx-5 w-100 mx-auto text-white">
		<div class="container">
			<div class="row">
                <div class="col-lg-6 p-4 mt-4">
                    <h1 class="text-center">PC BUILDER</h1>
                    <h5 class="text-center">Want a Custom PC Without the Expensive Price tag?</h5>
                    <img src="<?php echo base_url('public/PCB_SamplePic.png'); ?>" alt="" class="col-12 pt-5 mx-auto d-block">
                </div>
				<div class="col-lg-5 bg-dark bg-opacity-50 p-3 mt-5 mx-auto">
					<h3 class="pb-4 text-center">Create an Account</h3>
					<form>
                        <div class="form-row">
							<div class="col-9 mx-auto">
								<input type="text" placeholder="FirstName"  class="form-control my-3 p-2">
							</div>
						</div>
                        <div class="form-row">
							<div class="col-9 mx-auto">
								<input type="text" placeholder="Surname"  class="form-control my-3 p-2">
							</div>
						</div>
                        <div class="form-row">
							<div class="col-9 mx-auto">
								<input type="tel" placeholder="Phone Number (09XX-XXX-XXXX)"  class="form-control my-3 p-2" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}">
							</div>
						</div>
						<div class="form-row">
							<div class="col-9 mx-auto">
								<input type="email" placeholder="Email"  class="form-control my-3 p-2">
							</div>
						</div>
						<div class="form-row">
							<div class="col-9 mx-auto">
								<input type="password" placeholder="Password" class="form-control my-3 p-2">
							</div>
						</div>
                        <div class="form-row">
							<div class="col-9 mx-auto">
								<input type="password" placeholder="Confirm Password" class="form-control my-3 p-2">
							</div>
						</div>
                        <div class="formcheck text-center">
                            <input class="form-check-input" type="checkbox" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate"> I Agree to PC Builder's Terms <br> and Service & Privacy Policy</label>
                        </div>
						<div class="form-row">
							<div class="col-lg-12 text-center">
                                <button type="submit" class="mt-3 mb-4 col-7">Sign Up</button>
							</div>
						</div>
						<p class="text-center">Have an Accout? <a href="#"><span>Login</span></a></p>
					</form>
				</div>
			</div>
		</div>
	</section>
    <!-- Sign Up End -->


	<!-- Footer Start here -->
<footer class="page-footer pt-4 mt-auto">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Front-End/footer/style.css">
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
                    <li><a href="<?php echo base_url()."users/viewUser"?>">Profile</a></li>
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





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>