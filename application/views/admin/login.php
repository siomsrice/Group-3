<?php
    $this->load->view('templates/header');
?>
    
    <!-- Login Start -->
	<section class="Form my-4 mx-5 w-100 mx-auto text-white">
        <h1 class="text-center">Admin Panel</h1>
        <h5 class="text-center">Please Log in to continue</h5>
		<?php
			if(!empty($this->session->flash_data('msg'))){
				echo "<div class='alert alert-danger mb-3 mx-auto' style='width:50%'>".$this->session->flashdata('msg')."</div>";
			}
		?>
		<div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto bg-dark bg-opacity-50 p-5 mt-5">
					<h3 class="pb-4 text-center">Login Your Account</h3>
                    <?=isset($message) ? $message: "";?>
					<form method="POST" class="">
						<div class="form-row">
							<div class="col-12">
								<input type="text" name="username" placeholder="Email/Username" class="form-control my-3 p-3">
							</div>
						</div>
						<?php echo form_error('username');?>
						<div class="form-row">
							<div class="col-12">
								<input type="password" name="password" placeholder="Password" class="form-control my-3 p-3">
							</div>
						</div>
						<?php echo form_error('password'); ?>

						<div class="form-row">
							<div class="col-lg-12 d-flex justify-content-around">
                                <button type="submit" class="mt-3 mb-4 col-3">Login</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
    <!-- Login End -->
	<script>
		const form = document.getElementById("loginform");
		const username = document.getElementById("username");
		const password = document.getElementById("password");

		form.addEventListener('submit',(event) => {
            event.preventDefault();
            validate();
        })

		const sendData = (sRate, count) => {
			if(sRate === count){
				event.currentTarget.submit();
			}
		}

		const successMsg = (usernameVal) => {
			let formCon = document.getElementsByClassName('form-control');
			var count = formCon.length - 1;
			for(var i=0; i < formCon.length; i++){
				if(formCon[i].className === "form-control my-2 success"){
					var sRate = 0 + 1;
					sendData(sRate, count);
				} else{
					return false;
				}
			}
		}
		
			
		
	</script>
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
