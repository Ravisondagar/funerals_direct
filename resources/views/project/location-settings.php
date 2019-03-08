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
			<div class="dashboard-title"><div class="menu-icon"></div>Location Settings</div>
			<div class="dashboard-desc">
				<div class="note">What areas in your region will you be servicing? Simply select your region and choose the districts that your business will servicing.</div>
				<div class="casket-sprays-page">
					<form>
						<ul>
							<li>
								<div class="row clearfix">
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
										<div class="build-services-box">
											<div class="form-horizontal">
												<div class="form-group">
													<label class="col-sm-3 control-label">Choose Region</label>
													<div class="col-sm-9">
														<div class="region-select">
															<select class="form-control selectpicker">
																<option>Waikato</option>
																<option>Northland</option>
																<option>Auckland</option>
																<option>Bay of Plenty</option>
																<option>Gisborne</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="region-districts-select col-sm-12">
														<label class="control-label">What districts will you be servicing?</label>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="dis1">
															<label for="dis1">Cambridge</label>
														</div>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="dis2">
															<label for="dis2">Coromandel</label>
														</div>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="dis3">
															<label for="dis3">Hamilton</label>
														</div>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="dis4">
															<label for="dis4">Huntly</label>
														</div>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="dis5">
															<label for="dis5">Morrinsville</label>
														</div>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="dis6">
															<label for="dis6">Otorohanga</label>
														</div>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="dis7">
															<label for="dis7">Tauramanui</label>
														</div>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="dis8">
															<label for="dis8">Paeroa</label>
														</div>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="dis9">
															<label for="dis9">Tokoroa</label>
														</div>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="dis10">
															<label for="dis10">Thames</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="submit-btn">
									<div class="row clearfix">
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<button type="submit" class="submit">Save</button>
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