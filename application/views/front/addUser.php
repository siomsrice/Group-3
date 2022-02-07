<?php
    $this->load->view('templates/header');
?>

<!--DISABLED TELEPHONE PATTERN LATER FOR EASIER TESTING-->

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
                <?=isset($message) ? $message: "";?>
					<form method="POST" onsubmit="return checkForm(this);">
                        <!-- First Name -->
                        <div class="form-row">
							<div class="col-9 mx-auto">
								<input type="text" required name="firstName" placeholder="First Name"  class="form-control my-3 p-2">
							</div>
						</div>
						
                        <!-- Last Name -->
                        <div class="form-row">
							<div class="col-9 mx-auto">
								<input type="text" required name="lastName" placeholder="Surname"  class="form-control my-3 p-2" >
							</div>
						</div>

                        <!-- UserName -->
                        <div class="form-row">
							<div class="col-9 mx-auto">
								<input type="text" required name="usersUid" placeholder="Username"  class="form-control my-3 p-2" >
							</div>
						</div>

                        <!-- Telephone -->
                        <div class="form-row">
							<div class="col-9 mx-auto">
								<input type="tel" required name="phone" placeholder="Phone Number (09XX-XXX-XXXX)"  class="form-control my-3 p-2" <?php /*pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}"*/?>>
							</div>
						</div>

                        <!-- Email -->
						<div class="form-row">
							<div class="col-9 mx-auto">
								<input type="email" required name="usersEmail" placeholder="Email"  class="form-control my-3 p-2">
							</div>
						</div>

                        <!-- Address -->
                        <div class="form-row">
							<div class="col-9 mx-auto">
								<input type="text" required name="address" placeholder="Address"  class="form-control my-3 p-2">
							</div>
						</div>

                        <!-- Password -->
						<div class="form-row">
							<div class="col-9 mx-auto">
								<input type="password" required name="usersPwd" placeholder="Password" class="form-control my-3 p-2" >
							</div>
						</div>

                        <!-- Password Repeat -->
                        <div class="form-row">
							<div class="col-9 mx-auto">
								<input type="password" required name="pwdRepeat" placeholder="Confirm Password" class="form-control my-3 p-2" >
							</div>
						</div>

                        <!-- Terms & Services Checkbox -->
                        <div class="formcheck text-center">
                            <input class="form-check-input" required name="terms" type="checkbox" id="flexCheckIndeterminate">
                            <label class="form-check-label" for="flexCheckIndeterminate"> I Agree to <a href="#">PC Builder's Terms</a> <br> and <a href="#">Service & Privacy Policy</a></label>
                        </div> 
                       
                        <!-- Submit -->
						<div class="form-row">
							<div class="col-lg-12 text-center">
                                <input type="submit" class="mt-3 mb-4 col-7 bg-primary" value="Submit"></input>
							</div>
						</div>
						<p class="text-center">Have an Account? <a href="<?php echo base_url(); ?>users/login"><span>Login</span></a></p>
					</form>
				</div>
			</div>
		</div>
	</section>
    <!-- Sign Up End -->

	<?php
    	$this->load->view('templates/footer');
	?>


    <!-- Script for Checkbox -->
    <script>
    function checkForm(form){
        if(!form.terms.checked) {
        alert("Please indicate that you accept the Terms and Conditions");
        form.terms.focus();
        return false;
        }
        return true;
    }