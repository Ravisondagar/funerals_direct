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
					<li><a href="#">My Funeral Homes</a></li>
					<li class="active"><a href="#">Account Settings</a></li>
					<li><a href="#">Change Password</a></li>
					<li><a href="#">Statistics</a></li>
				</ul>
			</div>
		</div>
		<div class="dashboard-content">
			<div class="dashboard-title">
				<div class="inner-wrap"><div class="menu-icon"></div>Change Password</div>
			</div>
			<div class="page-note">
				<div class="inner-wrap">
					<div class="note">
						To change your password simply fill in the fields below and press save.
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
								<p><em class="red">*</em> Required fields</p>
								<div class="row clearfix">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="burial-package-add-form">
											<form>
												<div class="package-box">
													<ul>
														<li class="clearfix">
															<div class="left">
																<label>Old Password: <em class="red">*</em></label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="Type your old password">
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>New Password: <em class="red">*</em></label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="Type your new password">
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Confirm Password: <em class="red">*</em></label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="Confirm your new password">
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