<?php
    $this->load->view('templates/header');
?>
    
    <!-- Login Start -->
	<section class="Form my-4 mx-5 w-100 mx-auto text-white">
        <h1 class="text-center">PC BUILDER</h1>
        <h5 class="text-center">Want a Custom PC Without the Expensive Price tag?</h5>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto bg-dark bg-opacity-50 p-5 mt-5">
					<h3 class="pb-4 text-center">Login Your Account</h3>
                    <?=isset($message) ? $message: "";?>
					<form method="POST" class="">
						<div class="form-row">
							<div class="col-12">
								<input type="text" name="usersUid" placeholder="Email/Username" class="form-control my-3 p-3">
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
								<input type="reset" class="mt-3 mb-4 col-3">
                                <input type="submit" value ="login" class="mt-3 mb-4 col-3">
							</div>
						</div>
						<p class="text-center">Don't have an account? <a href="#"><span>Sign Up</span></a></p>
					</form>
				</div>
			</div>
		</div>
	</section>
    <!-- Login End -->

	<?php
    	$this->load->view('templates/footer');
	?>

    <!-- JavaScript Bundle with Popper -->
	<?php
    	$this->load->view('templates/footer');
	?>
