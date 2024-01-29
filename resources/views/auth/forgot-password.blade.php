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
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Forgot Password?</h3>
                             <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                                  {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                             </div>
			      		</div>
			      	</div>
                        <x-auth-session-status class="mb-4 text-success" :status="session('status')" />
                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group mt-3">
			      			<input class="form-control" id="email"  type="email" name="email" :value="old('email')" required autocomplete="username">
			      			<label class="form-control-placeholder" for="email">Email</label>
							<x-input-error :messages="$errors->get('email')" class=" text-danger" />
			      		</div>
                        
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Send Email</button>
		            </div>
                    <div class="form-group d-md-flex">
		            </div>
		          </form>
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

