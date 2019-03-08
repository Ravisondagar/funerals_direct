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
				<div class="inner-wrap"><div class="menu-icon"></div><strong>STEP 1:</strong> Region and District Settings</div>
			</div>
			<div class="page-note">
				<div class="inner-wrap">
					<div class="note">
						<p><strong>Select from one of the options below and press ‘Show’.</strong></p>
						<div class="note-step-dropdown">
							<div class="region-select step-select">
								<select class="form-control selectpicker">
									<option><strong>STEP 1:</strong>  Region and District Settings</option>
									<option><strong>STEP 2:</strong>  Region and District Settings</option>
									<option><strong>STEP 3:</strong>  Region and District Settings</option>
									<option><strong>STEP 4:</strong>  Region and District Settings</option>
									<option><strong>STEP 5:</strong>  Region and District Settings</option>
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
										<a href="#" class="green add-btn-link">
											Add Region
										</a>
										<div class="popup-tooltip">
											<a href="javascript:;" class="close-icon"><i class="fa fa-times"></i></a>
											<div class="popup-tooltip-text">
												<h3>Click the button to add a region.</h3>
												<p>There are no limits of regions you can add.</p>
												<div class="checkbox-btn">
													<input type="checkbox" value="value" id="remember" name="remember">
													<label for="remember">Don’t show me this again.</label>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="funeral-box-middle">
							<p><em class="red">*</em> All regions and distrcts that you select will appear in the search results</p>
							<div class="add-region-list">
								<div class="row clearfix">
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
										<div class="add-region-box">
											<div class="region-select step-select">
												<div class="popup-tooltip right">
													<a href="javascript:;" class="close-icon"><i class="fa fa-times"></i></a>
													<div class="popup-tooltip-text">
														<h3>Select your region.</h3>
														<p>Once region is selected, you can select the districts.</p>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="remember" name="remember">
															<label for="remember">Don’t show me this again.</label>
														</div>
													</div>
												</div>
												<select class="form-control selectpicker" title="Choose Region">
													<option>Hawkes Bay</option>
													<option>Hawkes Bay</option>
													<option>Hawkes Bay</option>
													<option>Hawkes Bay</option>
													<option>Hawkes Bay</option>
												</select>
											</div>
											<div class="add-region-txt">
												Select the districts you will be servicing
											</div>
											<div class="region-list-check">
												<ul>
													<li>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="du_cat1" name="remember">
															<label for="du_cat1">Cambridge</label>
														</div>
													</li>
													<li>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="du_cat2" name="remember">
															<label for="du_cat2">Coromandel</label>
														</div>
													</li>
													<li>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="du_cat3" name="remember">
															<label for="du_cat3">Hamilton</label>
														</div>
													</li>
													<li>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="du_cat4" name="remember">
															<label for="du_cat4">Huntly</label>
														</div>
													</li>
													<li>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="du_cat5" name="remember">
															<label for="du_cat5">Morrinsville</label>
														</div>
													</li>
												</ul>
											</div>
											<div class="region-save-delete">
												<div class="add-btn">
													<a href="#" class="blue add-btn-link" data-toggle="modal" data-target="#save-region">
														Save
													</a>
													<a href="#" class="pink-orange add-btn-link" data-toggle="modal" data-target="#delete-region">
														Delete
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
										<div class="add-region-box">
											<div class="add-region-box-click">
												<a href="#">
													<h5>Add<br> Region <span>+</span></h5>
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
										<div class="add-region-box">
											<div class="add-region-box-click">
												<a href="#">
													<h5>Add<br> Region <span>+</span></h5>
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
										<div class="add-region-box">
											<div class="add-region-box-click">
												<a href="#">
													<h5>Add<br> Region <span>+</span></h5>
												</a>
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
	<!-- save-region -->
	<div class="modal fade funeral-home-popup" id="save-region" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p>Your regions and districts have been saved. You can come back and edit this at anytime.</p>
					<div class="add-btn text-center">
						<a href="javascript:;" class="blue add-btn-link" data-dismiss="modal">
							Close
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- delete-region -->
	<div class="modal fade funeral-home-popup" id="delete-region" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p class="text-center">Are you sure you want to delete<br> this region and its districts?</p>
					<div class="add-btn text-center">
						<a href="#" class="green add-btn-link" data-toggle="modal" data-target="#delete-region-confirm" data-dismiss="modal">
							Yes
						</a>
						<a href="javascript:;" class="pink-orange add-btn-link" data-dismiss="modal">
							Cancel
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- delete-region-confirm -->
	<div class="modal fade funeral-home-popup" id="delete-region-confirm" tabindex="2" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p>Your regions and districts have been deleted. You can always add it back in if ever needed.</p>
					<div class="add-btn text-center">
						<a href="javascript:;" class="blue add-btn-link" data-dismiss="modal">
							Close
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>