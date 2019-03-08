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
				<div class="inner-wrap"><div class="menu-icon"></div><strong>STEP 6:</strong> Catering</div>
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
										<a href="#" class="green add-btn-link">Add Option</a>
										<input type="submit" class="blue add-btn-link" value="Save">
									</li>
								</ul>
							</div>
						</div>
						<div class="funeral-box-middle">
							<div class="burial-package-add">
								<div class="row clearfix">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="burial-package-add-form">
											<form>
												<div class="package-box">
													<h4><span>Catering Option 1</span></h4>
													<ul>
														<li class="clearfix">
															<div class="left">
																<label>Price Per Head:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<div class="catering-price-input">
																		<div class="dollar-icon">$</div>
																		<input type="text" class="form-control" placeholder="e.g. 14.50">
																	</div>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Description: What does this include?</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<textarea class="form-control" placeholder="Write up a brief description"></textarea>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Photo of food:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<div class="add-btn">
																		<a href="#" class="green add-btn-link">
																			Upload Photo
																		</a>
																		<a href="#" class="pink-orange add-btn-link">
																			Remove Photo
																		</a>
																	</div>
																	<ul class="f_16">
																		<li>* Image dimensions: 960px (w) x 666px (h)</li>
																	</ul>
																</div>
																<div class="remove-btn">
																	<a href="#">Remove Option</a>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="save-add-row">
													<div class="add-btn">
														<ul>
															<li>
																<a href="#" class="green add-btn-link">Add Option</a>
																<input type="submit" class="blue add-btn-link" value="Save">
															</li>
														</ul>
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="flower-desc">
											<p><span class="red">$200.00</span> - per head</p>
											<div class="flower-desc-img">
												<img src="images/flower-default-img.png" alt="">
											</div>
											<p>Description</p>
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