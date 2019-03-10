@extends('user.layouts.register')
@section('content')
	<div class="login-wrap">
		<img src="{!! asset('project/images/login-bg-img.jpg') !!}" alt="">
		<div class="login-wrap-box">
			<!-- <h3>CREATE ACCOUNT</h3> -->
			<div class="login-logo">
				<img src="{!! asset('project/images/logo.png') !!}" alt="">
			</div>
			@if($errors->has('password.confirm'))
			<div class="alert alert-danger" role="alert">
				<i class="fa fa-times" aria-hidden="true"></i> Passwords don’t match, please try again.
			</div>
			@endif
			<div class="login-form">
				<form action="{!! route('users.post_register') !!}" method="post">
					@csrf
					<div class="input-group">
						<input type="text" class="form-control" placeholder="First Name" name="name">
					</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Last Name" name="lname">
					</div>
					<div class="input-group">
						<input type="email" name="email" class="form-control" placeholder="Email Address">
					</div>
					<div class="input-group">
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<div class="input-group">
						<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
					</div>
					<div class="input-group">
						<div class="captcha">
							<img src="{!! asset('project/images/captcha.jpg') !!}" alt="">
						</div>
					</div>
					<div class="goback-to-login">
						By creating an account you agree to our <a href="#">terms &amp; conditions</a>  and <a href="#">privacy policy.</a>
					</div>
					<div class="input-group">
						<input type="submit" class="submit" value="CREATE ACCOUNT">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection