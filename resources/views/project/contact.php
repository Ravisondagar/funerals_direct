<!doctype html>
<html>
<head>
	<?php include('include/styles.php') ?>
</head>

<body class="home">
	<img src="images/bg-img.jpg" alt="">
	<?php include('include/header.php') ?>

	<div class="login-wrap">
		<div class="login-wrap-box">
			<h3>Contact Us</h3>
			<div class="login-form">
				<form>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Name">
					</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Phone No">
					</div>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Email Address">
					</div>
					<div class="input-group">
						<textarea class="form-control" placeholder="Your Message"></textarea>
					</div>
					<div class="input-group">
						<input type="submit" class="submit" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include('include/footer.php') ?>
	<?php include('include/scripts.php') ?>

</body>
</html>