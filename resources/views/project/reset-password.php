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
			<!-- <div class="forgot-title">
				<span>RESET PASSWORD</span>
			</div> -->
			<div class="login-logo">
				<img src="images/logo.png" alt="">
			</div>
			<div class="alert alert-danger" role="alert">
				<i class="fa fa-times" aria-hidden="true"></i> Passwords don’t match. Please try again.
			</div>
			<div class="login-form">
				<form>
					<div class="alert alert-warning" role="alert">Type in your new password below.</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Type new password">
					</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Confirm new password">
					</div>
					<div class="input-group">
						<input type="submit" class="submit" value="RESET PASSWORD">
					</div>
					<div class="goback-to-login">
						Go to <a href="login.php">LOGIN</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include('include/footer3.php') ?>
	<?php include('include/scripts.php') ?>

</body>
</html>