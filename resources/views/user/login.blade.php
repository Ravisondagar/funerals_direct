@extends('user.layouts.register')
@section('content')
	<div class="login-wrap">
		<img src="{!! asset('images/login-bg-img.jpg') !!}" alt="">
		<div class="login-wrap-box">
			<div class="login-logo">
				<img src="{!! asset('images/logo.png') !!}" alt="">
			</div>
			<div class="alert alert-danger" role="alert">
				<i class="fa fa-times" aria-hidden="true"></i> Invalid Credentials
			</div>
			<div class="login-form">
				<h4>Funeral Directors Login</h4>
				<p>Not a Partner? <a href="#" class="blue-link">Join FuneralsDirect</a></p>
				<form action="{!! route('users.post_login') !!}" method="post">
					@csrf
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Email Address" name="email">
					</div>
					<div class="input-group">
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<div class="remember-forgot clearfix">
						<div class="remember-left">
							<div class="checkbox-btn">
								<input type="checkbox" value="value" id="remember" name="remember">
								<label for="remember">Remember me</label>
							</div>
						</div>
						<div class="forgot-right">
							<a href="forgot-password.php">Forgot your password?</a>
						</div>
					</div>
					<div class="input-group">
						<input type="submit" class="submit" value="Sign In">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection