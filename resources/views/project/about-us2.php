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
					Welcome<br> [Joe Funeral Services]
				</div>
				<h4>MY ACCOUNT</h4>
				<ul>
					<li class="active"><a href="#">My Funeral Homes</a></li>
					<li><a href="#">Account Settings</a></li>
					<li><a href="#">Change Password</a></li>
					<li><a href="#">Statistics</a></li>
				</ul>
			</div>
		</div>
		<div class="dashboard-content">
			<div class="dashboard-title">
				<div class="inner-wrap"><div class="menu-icon"></div><strong>STEP 3:</strong> Burial Packages</div>
			</div>
			<div class="page-note">
				<div class="inner-wrap">
					<div class="note">
						<p><strong>Select from one of the options below and press ‘Show’.</strong></p>
						<div class="note-step-dropdown">
							<div class="region-select step-select">
								<select class="form-control selectpicker">
									<option><strong>STEP 3:</strong>  Burial Packages</option>
									<option><strong>STEP 3:</strong>  Burial Packages</option>
									<option><strong>STEP 3:</strong>  Burial Packages</option>
								</select>
							</div>
							<div class="add-btn">
								<a href="#" class="green add-btn-link">
									Show
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="funeral-home-dashboard">
				<div class="inner-wrap">
					<div class="funeral-box">
						<div class="funeral-box-header">
							<div class="add-btn">
								<ul>
									<li class="relative">
										<input type="submit" class="blue add-btn-link" value="Save">
									</li>
								</ul>
							</div>
						</div>
						<div class="funeral-box-middle">
							<div class="burial-package-add">
								<p><em class="red">*</em> Red boxes are mandatory. These must be filled out before your packages can go live.</p>
								<div class="row clearfix">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="burial-package-add-form">
											<form>
												<div class="package-box">
													<ul>
														<li class="clearfix">
															<div class="popup-tooltip">
																<a href="javascript:;" class="close-icon"><i class="fa fa-times"></i></a>
																<div class="popup-tooltip-text">
																	<h3>The red boxes are mandatory. These must be filled out before your packages can go live.</h3>
																	<p>The blue boxes aren’t required to be filled out.</p>
																	<div class="checkbox-btn">
																		<input type="checkbox" value="value" id="remember" name="remember">
																		<label for="remember">Don’t show me this again.</label>
																	</div>
																</div>
															</div>
															<div class="left red">
																<label>Logo:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<div class="add-btn">
																		<a href="#" class="green add-btn-link">
																			Upload Logo
																		</a>
																	</div>
																	<ul class="f_16">
																		<li>* Replace image by uploading the new image</li>
																		<li>* Logo dimensions: 371px (w) x 205px (h)</li>
																	</ul>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left red">
																<label>Landline Phone:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<div class="row">
																		<div class="col-xs-4">
																			<select class="form-control selectpicker form-control">
																				<option>01</option>
																				<option>021</option>
																				<option>03</option>
																			</select>
																		</div>
																		<div class="col-xs-8"><input type="text" class="form-control"></div>
																	</div>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>FREE Phone:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<div class="row">
																		<div class="col-xs-4">
																			<select class="form-control selectpicker form-control">
																				<option>01</option>
																				<option>021</option>
																				<option>03</option>
																			</select>
																		</div>
																		<div class="col-xs-8"><input type="text" class="form-control"></div>
																	</div>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Mobile:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<div class="row">
																		<div class="col-xs-4">
																			<select class="form-control selectpicker form-control">
																				<option>01</option>
																				<option>021</option>
																				<option>03</option>
																			</select>
																		</div>
																		<div class="col-xs-8"><input type="text" class="form-control"></div>
																	</div>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left red">
																<label>Address:</label>
															</div>
															<div class="right">
																<div class="form-group address-input">
																	<input type="text" class="form-control" placeholder="Address 1">
																	<input type="text" class="form-control" placeholder="Address 2">
																	<input type="text" class="form-control" placeholder="Address 3">
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Website:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control">
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left red">
																<label>About Your Business:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<textarea class="form-control about-textarea" placeholder="Write a brief description about your funeral home."></textarea>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Video URL: (You Tube only)</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control">
																	<a href="#" class="add-youtube-video">How to add Video URL</a>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left red">
																<label>Gallery:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<div class="add-btn">
																		<a href="#" class="green add-btn-link">
																			Upload Photos
																		</a>
																	</div>
																	<ul class="f_16">
																		<li>* Photo dimensions:</li>
																		<li>* Remove image by clicking the ‘x’ on the photo </li>
																		<li>* You can drag and drop photos to re-order</li>
																	</ul>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="save-add-row">
													<div class="add-btn">
														<ul>
															<li><input type="submit" class="blue add-btn-link" value="Save"></li>
														</ul>
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
											<div class="embed-responsive embed-responsive-16by9">
												<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iB_ilZ1SX4I"></iframe>
											</div>
											<div class="gallery-about">
												<ul class="row clearfix" id="sortable">
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<a href="images/about-gallery-img-popup1.jpg" rel="author">
															<img src="images/about-gallery-img1.jpg" alt="">
														</a>
														<div class="close-img">
															<a href="javascript:;" class="delete_g_image" data-id="130"><i class="fa fa-window-close"></i></a>
														</div>
													</li>
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<div class="close-img">
															<a href="javascript:;" class="delete_g_image" data-id="130"><i class="fa fa-window-close"></i></a>
														</div>
														<a href="images/about-gallery-img-popup1.jpg" rel="author">
															<img src="images/about-gallery-img2.jpg" alt="">
														</a>
													</li>
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<div class="close-img">
															<a href="javascript:;" class="delete_g_image" data-id="130"><i class="fa fa-window-close"></i></a>
														</div>
														<a href="images/about-gallery-img-popup1.jpg" rel="author">
															<img src="images/about-gallery-img3.jpg" alt="">
														</a>
													</li>
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<div class="close-img">
															<a href="javascript:;" class="delete_g_image" data-id="130"><i class="fa fa-window-close"></i></a>
														</div>
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('include/scripts.php') ?>
</body>
</html>