<!doctype html>
<html>
<head>
	<?php include('include/styles.php') ?>
</head>

<body>
	<?php include('include/header.php') ?>
	<div class="inner-banner">
		<img src="images/inner-banner.jpg" alt="">
		<div class="container"><h1>Contact Us</h1></div>
	</div>
	<div class="contact-us-wrap">
		<div class="container">
			<div class="row clearfix">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="contact-info">
						<h3>For all enquiries please contact us on one of the available options.</h3>
						<div class="contact-info-list">
							<ul>
								<li>
									<div class="icon"><i class="fa fa-phone"></i></div>
									+64 9 363 3712
								</li>
								<li>
									<div class="icon"><i class="fa fa-phone"></i></div>
									0800 777 303
								</li>
								<li>
									<div class="icon"><i class="fa fa-envelope"></i></div>
									<a href="mailto:support@funeralsdirect.nz">support@funeralsdirect.nz</a>
								</li>
								<li>
									<div class="icon"><i class="fa fa-map-marker"></i></div>
									Level 27<br>
									PWC Tower<br>
									188 Quay Street<br>
									Auckland 1010<br>
									New Zealand
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="login-form">
						<form>
							<div class="input-group">
								<label>Name <em>*</em></label>
								<input type="text" class="form-control" placeholder="Type your name">
							</div>
							<div class="input-group">
								<label>Phone</label>
								<input type="text" class="form-control" placeholder="Type your phone number">
							</div>
							<div class="input-group">
								<label>Email Address <em>*</em></label>
								<input type="text" class="form-control" placeholder="Type your email address">
							</div>
							<div class="input-group">
								<label>Message <em>*</em></label>
								<textarea class="form-control" placeholder="Type your message"></textarea>
							</div>
							<div class="input-group">
								<input type="submit" class="submit" value="Submit">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="google-map-api">
    	<div id="map-canvas" class="gmap"></div>
	</div>
	<?php include('include/footer2.php') ?>
	<?php include('include/scripts.php') ?>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9d3jaUX6Qdr0Uzvq6fQXVmZ1PBuHEVAQ&sensor=false"></script>
	<script>
		google_api_map_init_2088765916();
		function google_api_map_init_2088765916(){
			var map;
			var coordData = new google.maps.LatLng(parseFloat(51.419062), parseFloat(0.005938));
			var marker;

			function initialize() {
				var mapOptions = {
					center: coordData,
					scrollwheel: false,
					zoom: 18
				}
				var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
				marker = new google.maps.Marker({
					map: map,
					draggable: true,
					position: coordData,
					icon: ""
				});
			}
			google.maps.event.addDomListener(window, "load", initialize);
		}
	</script>
</body>
</html>