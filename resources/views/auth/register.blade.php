<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Register</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form method="POST" action="{{ route('register') }}" class="signup-form">
                            @csrf
			      		<div class="form-group mt-3">
			      			<input class="form-control" id="username" type="text" name="username" :value="old('username')" required autofocus autocomplete="username">
			      			<label class="form-control-placeholder" for="name">Username</label>
			      		</div>

						  <div class="form-group mt-3">
			      			<input class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
			      			<label class="form-control-placeholder" for="name">Name</label>
			      		</div>

						  <div class="form-group mt-3">
			      			<input class="form-control" id="phone" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone">
			      			<label class="form-control-placeholder" for="name">Phone</label>
			      		</div>

                        <div class="form-group mt-3">
			      			<input class="form-control" id="email"  type="email" name="email" :value="old('email')" required autocomplete="username">
			      			<label class="form-control-placeholder" for="email">Email</label>
			      		</div>

		            <div class="form-group">
		              <input class="form-control" id="password"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" ></span>
		            </div>

                    <div class="form-group">
		              <input class="form-control" id="password_confirmation"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password">
		              <label class="form-control-placeholder" for="confirm password">Confirm Password</label>
		              <span toggle="#password-field" ></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign up</button>
		            </div>
                    <div class="form-group d-md-flex">
		            </div>
		          </form>
		          <p class="text-center">Already Member? <a href="{{ route('login') }}">Go to login</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

