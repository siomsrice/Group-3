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

                        <div class="form-row">
							<div class="col-lg-12 text-center">
                                <input type="submit" class="mt-3 mb-4 col-7" value="Submit"></input>
							</div>
						</div>

<script>
    function checkForm(form){
        if(!form.terms.checked) {
        alert("Please indicate that you accept the Terms and Conditions");
        form.terms.focus();
        return false;
        }
        return true;
    }