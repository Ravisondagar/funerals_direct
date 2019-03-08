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
			<div class="dashboard-title"><div class="menu-icon"></div>Funeral Programme & Print</div>
			<div class="dashboard-desc">
				<div class="note">Description and any instructions.</div>
				<div class="casket-sprays-page">
					<form>
						<h5 class="list-title">Funeral Programme Options</h5>
						<ul>
							<li>
								<h3>Programme Option 1</h3>
								<div class="row clearfix">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<div class="build-services-box">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="col-sm-3 control-label">Title</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="Template 1">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Price</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="$40.00">
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
											<img src="images/design-template1.jpg" alt="">
										</div>
									</div>
								</div>
							</li>
							<li>
								<h3>Programme Option 2</h3>
								<div class="row clearfix">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<div class="build-services-box">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="col-sm-3 control-label">Title</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="Template 2">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Price</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="$45.00">
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
											<img src="images/design-template2.jpg" alt="">
										</div>
									</div>
								</div>
							</li>
							<li>
								<h3>Programme Option 3</h3>
								<div class="row clearfix">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<div class="build-services-box">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="col-sm-3 control-label">Title</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="Template 3">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Price</label>
													<div class="col-sm-9">
														<input type="text" class="form-control" value="$50.00">
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
											<img src="images/design-template3.jpg" alt="">
										</div>
									</div>
								</div>
							</li>
							<li>
								<h5 class="list-title">Paper &amp; Print Options</h5>
								<div class="gray-title">Plain A4 Paper</div>
								<div class="row clearfix">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<div class="build-services-box">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="col-sm-3 col-xs-4 control-label">Black &amp; White</label>
													<div class="col-sm-9 col-xs-8">
														<input type="text" class="paper-input" value="0.20"><label class="control-label">per print</label>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 col-xs-4 control-label">Colour</label>
													<div class="col-sm-9 col-xs-8">
														<input type="text" class="paper-input" value="0.40"><label class="control-label">per print</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="gray-title">A4 Card</div>
								<div class="row clearfix">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<div class="build-services-box">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="col-sm-3 col-xs-4 control-label">Black &amp; White</label>
													<div class="col-sm-9 col-xs-8">
														<input type="text" class="paper-input" value="0.25"><label class="control-label">per print</label>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 col-xs-4 control-label">Colour</label>
													<div class="col-sm-9 col-xs-8">
														<input type="text" class="paper-input" value="0.45"><label class="control-label">per print</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="gray-title">A4 Card Gloss</div>
								<div class="row clearfix">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<div class="build-services-box">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="col-sm-3 col-xs-4 control-label">Black &amp; White</label>
													<div class="col-sm-9 col-xs-8">
														<input type="text" class="paper-input" value="0.30"><label class="control-label">per print</label>
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 col-xs-4 control-label">Colour</label>
													<div class="col-sm-9 col-xs-8">
														<input type="text" class="paper-input" value="0.50"><label class="control-label">per print</label>
													</div>
												</div>
											</div>
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