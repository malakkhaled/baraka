<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Log In</title>

		<!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/login.css">
	
        <link rel="stylesheet" type="text/css" href="css/all.min.css">
    </head>
    <body>
      	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/img-01.png" alt="IMG">
				</div>

				<form method="POST" action="{{ route('login') }}">
                        @csrf

					<span class="login100-form-title">
				 تسجيل دخول لموظفي شركة البركة 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email"   placeholder="البريد الإلكتروني" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
					<input id="password"  placeholder="الرقم السري" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

@error('password')
	<span class="invalid-feedback" role="alert">
		<strong>{{ $message }}</strong>
	</span>
@enderror

						
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
						بدأ
						</button>
					</div>

					<div class="text-center p-t-12">
						
					@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
									<span class="txt1">
							هل نسيت
						</span>
						<a class="txt2" href="#">
						  الرقم السري؟
						</a>
                                    </a>
                                @endif
					
					</div>

				
				</form>
			</div>
		</div>
	</div>
	
	<script src="js/main.js"></script>	
    <script src="js/all.min.js"></script>	
    <script src="js/jquery-3.2.1.min.js"></script>	
    <script src="js/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
    </body>
</html>
