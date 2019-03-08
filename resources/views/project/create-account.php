<!doctype html>
<html>
<head>
	<?php include('include/styles.php') ?>
</head>

<body class="home">
	<img src="images/bg-img.jpg" alt="">
	<?php include('include/header3.php') ?>

	<div class="login-wrap">
		<img src="images/login-bg-img.jpg" alt="">
		<div class="login-wrap-box">
			<!-- <h3>CREATE ACCOUNT</h3> -->
			<div class="login-logo">
				<img src="images/logo.png" alt="">
			</div>
			<div class="alert alert-danger" role="alert">
				<i class="fa fa-times" aria-hidden="true"></i> Passwords don’t match, please try again.
			</div>
			<div class="login-form">
				<form>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Business Name">
					</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="First Name">
					</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Last Name">
					</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Email Address">
					</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Confirm Email Address">
					</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Password">
					</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Confirm Password">
					</div>
					<div class="input-group">
						<div class="captcha">
							<img src="images/captcha.jpg" alt="">
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

	<?php include('include/footer3.php') ?>
	<?php include('include/scripts.php') ?>

</body>
</html>