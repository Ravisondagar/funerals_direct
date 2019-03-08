<!doctype html>
<html>
<head>
	<?php include('include/styles.php') ?>
</head>

<body>
	<header>
		<div class="header-wrap">
			<div class="container-fluid clearfix">
				<div class="header-wrap-left clearfix">
					<div class="logo">
						<a href="#"><img src="images/logo.png" alt=""></a>
					</div>
					<button data-target="#nav-header" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="header-wrap-right">
					<div class="nav-warp">
						<div id="nav-header" class="nav collapse">
							<ul>
								<li class="active">
									<a href="index.php">Go to Website</a>
								</li>
								<li>
									<a href="#">Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="admin-dashboard clearfix">
		<div class="leftmenu">
			<div class="wrap">
				<div class="left-title">
					Welcome<br> Simplicity Funerals Hamilton
				</div>
				<h4>MY ACCOUNT</h4>
				<ul>
					<li><a href="#">Statistics</a></li>
					<li><a href="#">Account settings</a></li>
					<li><a href="#">About my business</a></li>
					<li><a href="#">Location settings</a></li>
				</ul>
				<h4>BURIAL</h4>
				<ul>
					<li><a href="#">Package, 0 - 3k</a></li>
					<li><a href="#">Package, 3k - 6k</a></li>
					<li><a href="#">Package, 6k - 9k</a></li>
					<li><a href="#">Package, 9k - 12k</a></li>
					<li><a href="#">Package, 12k - 15k</a></li>
					<li class="active"><a href="#">Build-a-Funeral</a></li>
				</ul>
				<h4>CREMATION</h4>
				<ul>
					<li><a href="#">Cremation, 0 - 3k</a></li>
					<li><a href="#">Cremation, 3k - 6k</a></li>
					<li><a href="#">Cremation, 6k - 9k</a></li>
					<li><a href="#">Cremation, 9k - 12k</a></li>
					<li><a href="#">Cremation, 12k - 15k</a></li>
					<li><a href="#">Build-a-Funeral</a></li>
				</ul>
				<h4>ADDITIONAL SERVICES</h4>
				<ul>
					<li><a href="#">Casket Sprays</a></li>
					<li><a href="#">Catering</a></li>
					<li><a href="#">Programme design &amp; print</a></li>
				</ul>
			</div>
		</div>
		<div class="dashboard-content">
			<div class="dashboard-title"><div class="menu-icon"></div>Account Settings</div>
			<div class="dashboard-desc">
				<div class="note">Description and any instructions.</div>
				<div class="casket-sprays-page">
					<form>
						<ul>
							<li>
								<div class="row clearfix">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="build-services-box">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="col-sm-3 control-label">Business Name *</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="Simplicity Bereavement Services">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Business Logo</label>
													<div class="col-sm-9">
														<input type="button" class="form-control" value="Upload Logo">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Phone Number *</label>
													<div class="col-sm-4">
														<div class="region-select">
															<select class="form-control selectpicker">
																<option>01</option>
																<option>02</option>
																<option>03</option>
																<option>04</option>
																<option>05</option>
															</select>
														</div>
													</div>
													<div class="col-sm-5">
														<input type="text" class="form-control" value="847-6851">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Mobile</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="027 123 1234">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Website</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="www.simplicityhamilton.co.nz">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Address *</label>
													<div class="col-sm-9">
														<input type="text" class="form-control">
													</div>
													<div class="col-sm-9 col-xs-12 pull-right">
														<input type="text" class="form-control">
													</div>
													<div class="col-sm-9 col-xs-12 pull-right">
														<div class="region-select">
															<select class="form-control selectpicker">
																<option>Cambridge</option>
																<option>Coromandel</option>
																<option>Hamilton</option>
																<option>Huntly</option>
																<option>Morrinsville</option>
																<option>Otorohanga</option>
																<option>Tauramanui</option>
																<option>Paeroa</option>
																<option>Tokoroa</option>
																<option>Thames</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">About your business</label>
													<div class="col-sm-9">
														<textarea class="form-control large">Choose us and we will take a further 5% off the funeral package cost.	Simply say ‘Simplicity101’ and you will get the guaranteed 5% off.
														We are a family owned and operated funeral home with 30 years experience and have had many opportunities to help bereaved families create memorable celebrations and memorials to their loved ones. Allow us to assist you in creating a memorable, lasting experience to celebrate the life of your loved one. Our  commitment from our familyto your family is to do our very best to achieve the vision in your mind and make it a reality.
														</textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Photo Gallery</label>
													<div class="col-sm-9">
														<input type="button" class="form-control" value="Upload Photos">
													</div>
													<em class="gallery-note">* 9 Photos Max</em>
												</div>
											</div>
											<div class="submit-btn">
												<button type="submit" class="submit">Save</button>
											</div>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<div class="title"><h2>About Simplicity Bereavement Services</h2></div>
										<div class="about-package">
											<img src="images/package-img1.png" alt="">
											<div class="c-detail">
												<strong>Contact Details:</strong>
												<p>Phone: (07) 847-6851<br>
													Mobile: 027 123 1234<br>
													Address: 8F Railside Place, Frankton, Hamilton 3204<br>
													Website: <a href="#"> www.simplicityhamilton.co.nz</a></p>
											</div>
											<p>Choose us and we will take a further 5% off the funeral package cost. Simply say ‘Simplicity101’ and you will get the guaranteed 5% off.</p>
											<p>We are a family owned and operated funeral home with 30 years experience and have had many opportunities to help bereaved families create memorable celebrations and memorials to their loved ones. Allow us to assist you in creating a memorable, lasting experience to celebrate the life of your loved one. Our  commitment from our family to your family is to do our very best to achieve the vision in your mind and make it a reality.</p>
											<div class="gallery-about">
												<ul class="row clearfix">
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<a href="images/about-gallery-img-popup1.jpg" rel="author">
															<img src="images/about-gallery-img1.jpg" alt="">
														</a>
													</li>
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<a href="images/about-gallery-img-popup1.jpg" rel="author">
															<img src="images/about-gallery-img2.jpg" alt="">
														</a>
													</li>
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<a href="images/about-gallery-img-popup1.jpg" rel="author">
															<img src="images/about-gallery-img3.jpg" alt="">
														</a>
													</li>
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<a href="images/about-gallery-img-popup1.jpg" rel="author">
															<img src="images/about-gallery-img4.jpg" alt="">
														</a>
													</li>
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<a href="images/about-gallery-img-popup1.jpg" rel="author">
															<img src="images/about-gallery-img5.jpg" alt="">
														</a>
													</li>
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<a href="images/about-gallery-img-popup1.jpg" rel="author">
															<img src="images/about-gallery-img6.jpg" alt="">
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="view-detail-btn">
											<a href="additional-services.php">Choose Package</a>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include('include/scripts.php') ?>

</body>
</html>