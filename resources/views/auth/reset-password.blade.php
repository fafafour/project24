<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset ('css/style.css') }}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Reset Password</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
                    <div class="img" src="{{asset ('\images\bg-1.jpg')}}"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      		</div>
			      	</div>
                      <form method="POST" action="{{ route('password.store') }}">
                              @csrf
                         <!-- Password Reset Token -->
                          <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="form-group mt-3">
			      			<input class="form-control" id="email"  type="email" name="email" :value="old('email')" required autocomplete="username">
			      			<label class="form-control-placeholder" for="email">Email</label>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

			      		</div>

		            <div class="form-group">
		              <input class="form-control" id="password"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
		              <label class="form-control-placeholder" for="password">Password</label>
                      <x-input-error :messages="$errors->get('password')" class="mt-2" />
		              <span toggle="#password-field" ></span>

		            </div>

                    <div class="form-group">
		              <input class="form-control" id="password_confirmation"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password">
		              <label class="form-control-placeholder" for="confirm password">Confirm Password</label>
                      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
		              <span toggle="#password-field" ></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Reset</button>
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

	<script src="{{asset ('js/jquery.min.js') }}"></script>
  <script src="{{asset ('js/popper.js')}}""></script>
  <script src="{{asset ('js/bootstrap.min.js') }}"></script>
  <script src="{{asset ('js/main.js') }}"></script>

	</body>
</html>

