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
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>