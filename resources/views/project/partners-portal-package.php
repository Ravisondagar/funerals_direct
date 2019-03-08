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
			<div class="dashboard-title"><div class="menu-icon"></div>Burial Package between $0 - $3,000</div>
			<div class="dashboard-desc">
				<div class="note">
				Description and any instructions.</div>
				<div class="row clearfix">
					<div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
						<div class="build-package-page">
							<form>
								<div class="build-services-box">
									<h5>Price</h5>
									<div class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-2 control-label">Price:</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" value="$2,900">
											</div>
										</div>
									</div>
								</div>
								<div class="build-services-box">
									<h5>Package Includes</h5>
									<div class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-2 control-label">Title 1.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" value="Service fee">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Brief description 1.</label>
											<div class="col-sm-10">
												<textarea class="form-control">This is our general fee for the service we are providing.</textarea>
												<em>45 Words max</em>
											</div>
										</div>
									</div>
									<div class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-2 control-label">Title 2.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" value="Transfer to venue">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Description 2.</label>
											<div class="col-sm-10">
												<textarea class="form-control">WE will pick up your loved one with our hearse and transfer them to their final resting place.</textarea>
												<em>45 Words max</em>
											</div>
										</div>
									</div>
									<div class="form-horizontal">
										<div class="form-group">
											<label class="col-sm-2 control-label">Title 3.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" value="Standard Casket">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-2 control-label">Description 3.</label>
											<div class="col-sm-10">
												<textarea class="form-control">This package includes a standard caset as shown in the photos.</textarea>
												<em>45 Words max</em>
											</div>
										</div>
									</div>
									<div class="add-package-btn">
										<a href="#">Add <i class="fa fa-plus"></i></a>
									</div>
								</div>
								<div class="submit-btn">
									<button type="submit" class="submit">Save</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
						<div class="package-detail-box">
							<div class="packages-title-price">
								<h3>Preview<span class="price">$2,900</span></h3>
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