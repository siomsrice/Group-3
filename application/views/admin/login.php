	<!-- Login Start -->
	<section class="Form my-4 mx-5 w-100 mx-auto text-white">
        <h1 class="text-center">Admin Panel</h1>
        <h5 class="text-center">Please Log in to Continue</h5>
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
						<div class="form-row">
							<div class="col-12">
								<input type="password" name="password" placeholder="Password" class="form-control my-3 p-3">
							</div>
						</div>
                   
						<div class="form-row">
							<div class="col-lg-12 d-flex justify-content-around">
                                <input type="submit" value ="login" class="mt-3 mb-4 col-3">
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</section>
    <!-- Login End -->



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>




<!--CODE TESTING

<body>
    <div class="conatiner">
        <h1 class="text-center mt-3">Admin Panel</h1>
        <p class="text-center mb-4">Please Login To Continue</p>
         #
        /*if (!empty($this->session->flashdata('msg'))) {
          echo "<div class='alert alert-danger mb-3 mx-auto' style='width:50%'>".$this->session->flashdata('msg')."</div>";
        }
      ?>
        <form action=" /* echo base_url().'admin/login/authenticate' ;?>" name="loginform" id="loginform"
            method="POST" class="form-container mx-auto">
            <div class="form-group">
                <label for="username">Enter Username</label>
                <input type="text" class="form-control my-2" name="username" id="username" placeholder="Username">
                <span></span>
            </div>
             echo form_error('username'); ?>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control my-2" name="password" id="password" placeholder="Password">
                <span></span>
            </div>
             echo form_error('password'); ?>
            <button type="submit" class="btn btn-info btn-block mb-2">Login</button>
        </form>
    </div>.

    <script>
        const form = document.getElementById("loginform");
        const username = document.getElementById("username");
        const password = document.getElementById("password");

        form.addEventListener('submit',(event) => {
            event.preventDefault();
            validate();
        })

        const sendData = (sRate, count) => {
            if(sRate === count) {
                event.currentTarget.submit();
            }
        }

        const successMsg = (usernameVal) => {
            let formCon = document.getElementsByClassName('form-control');
            var count = formCon.length - 1;
            for(var i = 0; i < formCon.length; i++) {
                if(formCon[i].className === "form-control my-2 success") {
                    var sRate = 0 + i;
                    sendData(sRate, count);
                } else {
                    return false;
                }
            }
        }

        const validate = () => {
            const usernameVal = username.value.trim();
            const passwordVal = password.value.trim();
            
            if(usernameVal === "") {
                setErrorMsg(username, 'username cannot be blank');
            } else {
                setSuccessMsg(username);
            }
            if(passwordVal === "") {
                setErrorMsg(password, 'password cannot be blank');
            } else {
                setSuccessMsg(password);
            }
            successMsg(usernameVal);
        }

        function setErrorMsg(ele, errormsgs) {
            const formGroup = ele.parentElement;
            const formInput = formGroup.querySelector('.form-control');
            const span = formGroup.querySelector('span');
            span.innerText = errormsgs;
            formInput.className = "form-control my-2 is-invalid";
            span.className = "invalid-feedback font-weight-bold";
        }

        function setSuccessMsg(ele) {
            const formGroup = ele.parentElement;
            const formInput = formGroup.querySelector('.form-control');
            formInput.className = "form-control my-2 success";
        }

    </script>
    <-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
    <!-- Login End -->

<!--<?=isset($message) ? $message: "";?>
<form method="POST">
    Enter Username: <input type="text" name="usersUid"><br/>
    Enter Password: <input type="password" name="usersPwd"><br/>
    <input type="submit" value="login">
</form>

TEST END	-->