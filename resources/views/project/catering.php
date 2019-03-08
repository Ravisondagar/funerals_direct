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
			<div class="dashboard-title"><div class="menu-icon"></div>Catering</div>
			<div class="dashboard-desc">
				<div class="note">Description and any instructions.</div>
				<div class="casket-sprays-page">
					<form>
						<ul>
							<li>
								<h3>Catering Option 1</h3>
								<div class="row clearfix">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<div class="build-services-box">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="col-sm-3 control-label">Price per head</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="$14.00">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Includes</label>
													<div class="col-sm-9">
														<textarea class="form-control">Sandwiches, savoury rolls, savoury pies, chocolate cake, orange drink, tea,coffee, milo, hot chocolate.</textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Image</label>
													<div class="col-sm-9">
														<input type="button" class="form-control" value="Upload Image">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="preview-img">
											<img src="images/packageimg2.jpg" alt="">
										</div>
									</div>
								</div>
							</li>
							<li>
								<h3>Catering Option 2</h3>
								<div class="row clearfix">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<div class="build-services-box">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="col-sm-3 control-label">Price per head</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="$15.00">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Includes</label>
													<div class="col-sm-9">
														<textarea class="form-control">Sandwiches, savoury rolls, savoury pies, chocolate cake, orange drink, tea,coffee, milo, hot chocolate.</textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Image</label>
													<div class="col-sm-9">
														<input type="button" class="form-control" value="Upload Image">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
										<div class="preview-img">
											<img src="images/img-336.jpg" alt="">
										</div>
									</div>
								</div>
							</li>
						</ul>
						<div class="submit-btn">
							<div class="row clearfix">
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
									<button type="submit" class="submit">Save</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include('include/scripts.php') ?>

</body>
</html>