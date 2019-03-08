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
			<div class="dashboard-title"><div class="menu-icon"></div>Burial, Build-a-Funeral</div>
			<div class="dashboard-desc">
				<div class="note">
				In the build-a-funeral users can choose what services they want and leave out what they don’t need.</div>
				<div class="row clearfix">
					<div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
						<form>
							<div class="build-services-box">
								<h5>Transfer of Deceased to Funeral Home</h5>
								<div class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label">Title</label>
										<div class="col-sm-10">
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Price:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control price-input" value="800.00">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Description:</label>
										<div class="col-sm-10">
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="build-services-box">
								<h5>Embalming</h5>
								<div class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label">Price:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control price-input" value="800.00">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Description:</label>
										<div class="col-sm-10">
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="build-services-box">
								<h5>Sanitary Treatment</h5>
								<div class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label">Price:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control price-input" value="800.00">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Description:</label>
										<div class="col-sm-10">
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="build-services-box">
								<h5>Dressing of the Deceased</h5>
								<div class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label">Price:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control price-input" value="800.00">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Description:</label>
										<div class="col-sm-10">
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="build-services-box">
								<h5>Storage of Deceased at Funeral Home</h5>
								<div class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label">Price:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control price-input" value="800.00">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Description:</label>
										<div class="col-sm-10">
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="build-services-box">
								<h5>Viewing of the Deceased</h5>
								<div class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label">Price:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control price-input" value="800.00">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Description:</label>
										<div class="col-sm-10">
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="build-services-box">
								<h5>Transfer of Deceased to Venue</h5>
								<div class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label">Price:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control price-input" value="800.00">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Description:</label>
										<div class="col-sm-10">
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="build-services-box">
								<h5>Church Service</h5>
								<div class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label">Price:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control price-input" value="800.00">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Description:</label>
										<div class="col-sm-10">
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="build-services-box">
								<h5>Transfer Deceased to Burial Ground</h5>
								<div class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label">Price:</label>
										<div class="col-sm-10">
											<input type="text" class="form-control price-input" value="800.00">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Description:</label>
										<div class="col-sm-10">
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="submit-btn">
								<button type="submit" class="submit">Save</button>
							</div>
						</form>
					</div>
					<div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
						<div class="package-detail-box">
							<div class="packages-title-price">
								<h3>Preview<span class="price">$3,200</span></h3>
							</div>
							<div class="package-detail-box-desc">
								<h4>Package Includes:</h4>
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
	<?php include('include/scripts.php') ?>

</body>
</html>