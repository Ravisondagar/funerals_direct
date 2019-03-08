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
			<div class="login-form">
				<form>
					<div class="alert alert-success" role="alert">Email accepted. Check your email for reset instructions.</div>
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