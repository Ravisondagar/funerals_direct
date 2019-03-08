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
				<span>FORGOT PASSWORD</span>
			</div> -->
			<div class="login-logo">
				<img src="images/logo.png" alt="">
			</div>
			<div class="alert alert-danger" role="alert">
				<i class="fa fa-times" aria-hidden="true"></i> Invalid Credentials
			</div>
			<div class="login-form">
				<form>
					<div class="alert alert-warning" role="alert">Enter your email below to receive recovery instructions.</div>
					<div class="email-send">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Email Address">
							<input type="submit" class="submit" value="SEND">
						</div>
					</div>
					<div class="goback-to-login">
						Remembered Login? Go back to <a href="login.php">LOGIN</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include('include/footer3.php') ?>
	<?php include('include/scripts.php') ?>

</body>
</html>