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
									<option>STEP 1:  Burial Packages</option>
									<option>STEP 2:  Burial Packages</option>
									<option>STEP 3:  Burial Packages</option>
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
										<a href="#" class="green add-btn-link">
											Add Row
										</a>
										<a href="#" class="orange add-btn-link">
											View Example
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="funeral-box-middle">
							<div class="burial-package-add">
								<div class="row clearfix">
									<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
										<div class="burial-package-add-form">
											<form>
												<h4><span>Package Name &amp; Pricing</span></h4>
												<div class="package-box">
													<ul>
														<li class="clearfix">
															<div class="popup-tooltip">
																<a href="javascript:;" class="close-icon"><i class="fa fa-times"></i></a>
																<div class="popup-tooltip-text">
																	<h3>Add your package details in the form below.</h3>
																	<p>Press the “Save” button when you’re done.</p>
																	<div class="checkbox-btn">
																		<input type="checkbox" value="value" id="remember" name="remember">
																		<label for="remember">Don’t show me this again.</label>
																	</div>
																</div>
															</div>
															<div class="left">
																<label>Price Range:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<select class="form-control selectpicker form-control" title="Select Price Range">
																		<option>1</option>
																		<option>2</option>
																		<option>3</option>
																	</select>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Package Name:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="Give your package a name">
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Price:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="e.g. 4500">
																</div>
															</div>
														</li>
													</ul>
												</div>
												<h4><span>Package Details:</span> What does your package include?</h4>
												<div class="burial-package-detail-list">
													<div class="package-box">
														<ul>
															<li class="clearfix">
																<div class="popup-tooltip">
																	<a href="javascript:;" class="close-icon"><i class="fa fa-times"></i></a>
																	<div class="popup-tooltip-text">
																		<h3>AThe red boxes are mandatory for all packages. These cannot be erased.</h3>
																		<p>You can edit the description to suit.</p>
																		<div class="checkbox-btn">
																			<input type="checkbox" value="value" id="remember4" name="remember">
																			<label for="remember4">Don’t show me this again.</label>
																		</div>
																	</div>
																</div>
																<div class="left red">
																	<label>Bullet Point Title</label>
																</div>
																<div class="right">
																	<div class="form-group">
																		<input type="text" value="Transfer of Deceased to the Funeral Home" class="form-control">
																	</div>
																</div>
															</li>
															<li class="clearfix">
																<div class="left red">
																	<label>Brief description</label>
																</div>
																<div class="right">
																	<div class="form-group">
																		<textarea class="form-control">Transfer of the Decased to the funeral home within a 50 km radius.</textarea>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													<div class="package-box">
														<ul>
															<li class="clearfix">
																<div class="left red">
																	<label>Bullet Point Title</label>
																</div>
																<div class="right">
																	<div class="form-group">
																		<input type="text" value="Sanitary Treatment" class="form-control">
																	</div>
																</div>
															</li>
															<li class="clearfix">
																<div class="left red">
																	<label>Brief description</label>
																</div>
																<div class="right">
																	<div class="form-group">
																		<textarea class="form-control" placeholder="e.g.  Write a brief description explaining the title above title"></textarea>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													<div class="package-box">
														<ul>
															<li class="clearfix">
																<div class="left red">
																	<label>Bullet Point Title</label>
																</div>
																<div class="right">
																	<div class="form-group">
																		<input type="text" value="Casket" class="form-control">
																	</div>
																</div>
															</li>
															<li class="clearfix">
																<div class="left red">
																	<label>Brief description</label>
																</div>
																<div class="right">
																	<div class="form-group">
																		<textarea class="form-control" placeholder="e.g.  Write a brief description explaining the title above"></textarea>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													<div id="sortable">
														<div class="package-box">
															<ul>
																<li class="clearfix">
																	<div class="left">
																		<label>Bullet Point Title</label>
																	</div>
																	<div class="right">
																		<div class="form-group">
																			<input type="text" value="Sanitary Treatment" class="form-control">
																		</div>
																	</div>
																</li>
																<li class="clearfix">
																	<div class="left">
																		<label>Brief description</label>
																	</div>
																	<div class="right">
																		<div class="form-group">
																			<textarea class="form-control" placeholder="e.g.  Write a brief description explaining the title above title"></textarea>
																		</div>
																		<div class="remove-btn">
																			<a href="#">Remove Row</a>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
														<div class="package-box">
															<ul>
																<li class="clearfix">
																	<div class="left">
																		<label>Bullet Point Title</label>
																	</div>
																	<div class="right">
																		<div class="form-group">
																			<input type="text" value="Casket" class="form-control">
																		</div>
																	</div>
																</li>
																<li class="clearfix">
																	<div class="left">
																		<label>Brief description</label>
																	</div>
																	<div class="right">
																		<div class="form-group">
																			<textarea class="form-control" placeholder="e.g.  Write a brief description explaining the title above"></textarea>
																		</div>
																		<div class="remove-btn">
																			<a href="#">Remove Row</a>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="save-add-row">
													<div class="add-btn">
														<ul>
															<li><input type="submit" class="blue add-btn-link" value="Save"></li>
															<li>
																<a href="#" class="green add-btn-link">
																	Add Row
																</a>
																<div class="popup-tooltip">
																	<a href="javascript:;" class="close-icon"><i class="fa fa-times"></i></a>
																	<div class="popup-tooltip-text">
																		<h3>Click the “Add Row” button to add new row</h3>
																		<p>You will be redirected to the packages list</p>
																		<div class="checkbox-btn">
																			<input type="checkbox" value="value" id="remember2" name="remember">
																			<label for="remember2">Don’t show me this again.</label>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
										<div class="package-detail-box">
											<div class="popup-tooltip">
												<a href="javascript:;" class="close-icon"><i class="fa fa-times"></i></a>
												<div class="popup-tooltip-text">
													<h3>This is a preview. This is what the visitors to the website will see.</h3>
													<p>Fill out the form on the left to see the text in preview.</p>
													<div class="checkbox-btn">
														<input type="checkbox" value="value" id="remember3" name="remember">
														<label for="remember3">Don’t show me this again.</label>
													</div>
												</div>
											</div>
											<div class="packages-title-price">
												<h3>Package Name<span class="price">$0</span></h3>
											</div>
											<div class="package-detail-box-desc">
												<ul>
													<li><strong>Transfer of Deceased to Funeral Home</strong>We will pick up your loved one with our hearse and transfer them to their final resting place.</li>
													<li><strong>Embalming</strong>This package includes a standard casket as shown in the photos below.</li>
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