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
										<a href="burial2.php" class="green add-btn-link">
											Add Burial Package
										</a>
										<div class="popup-tooltip">
											<a href="javascript:;" class="close-icon"><i class="fa fa-times"></i></a>
											<div class="popup-tooltip-text">
												<h3>Click the button to add Burial Packages</h3>
												<p>There is a limit of 5 packages per price range</p>
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
							<div class="burial-package-list">
								<ul>
									<li>
										<h4><span>$0 - $3,000</span>  (Limit of 5 packages)</h4>
										<table class="funeral-table table table-bordered" cellspacing="0" cellpadding="0">
											<tr>
												<th width="40%">Package Title</th>
												<th width="15%">Price</th>
												<th width="15%">Status</th>
												<th width="30%">Actions</th>
											</tr>
											<tr>
												<td data-th="Package Title"><i>No funeral homes have been added yet.</i></td>
												<td data-th="Price">&nbsp;</td>
												<td data-th="Status">&nbsp;</td>
												<td data-th="Actions">
													&nbsp;
												</td>
											</tr>
										</table>
									</li>
									<li>
										<h4><span>$0 - $3,000</span>  (Limit of 5 packages)</h4>
										<table class="funeral-table table table-bordered" cellspacing="0" cellpadding="0">
											<tr>
												<th width="40%">Package Title</th>
												<th width="15%">Price</th>
												<th width="15%">Status</th>
												<th width="30%">Actions</th>
											</tr>
											<tr>
												<td data-th="Package Title" class="bg-gray">Silver 1 Burial Package</td>
												<td data-th="Price" class="bg-gray">$3,200</td>
												<td data-th="Status" class="bg-gray"><i class="fa fa-check-circle circle-check"></i> Live</td>
												<td data-th="Actions" class="bg-gray relative">
													<div class="btn-group table-dropdown">
													<div class="popup-tooltip right">
														<a href="javascript:;" class="close-icon"><i class="fa fa-times"></i></a>
														<div class="popup-tooltip-text">
															<h3>You can duplicate any package by simply selecting “Duplicate package”.</h3>
															<p>If the packages are near the same this wll be handy.</p>
															<div class="checkbox-btn">
																<input type="checkbox" value="value" id="remember1" name="remember">
																<label for="remember1">Don’t show me this again.</label>
															</div>
														</div>
													</div>
														<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Choose Action <span class="caret"></span>
														</button>
														<ul class="dropdown-menu">
															<li><a href="#">Settings</a></li>
															<li><a href="#">Rename</a></li>
															<li><a href="#">Publish</a></li>
															<li class="active"><a href="#">Unpublish</a></li>
															<li><a href="#">Duplicate</a></li>
															<li><a href="#">Delete</a></li>
														</ul>
													</div>
												</td>
											</tr>
										</table>
									</li>
									<li>
										<h4><span>$6,000 - $9,000 </span>  (Limit of 5 packages)</h4>
										<table class="funeral-table table table-bordered" cellspacing="0" cellpadding="0">
											<tr>
												<th width="40%">Package Title</th>
												<th width="15%">Price</th>
												<th width="15%">Status</th>
												<th width="30%">Actions</th>
											</tr>
											<tr>
												<td data-th="Package Title"><i>No funeral homes have been added yet.</i></td>
												<td data-th="Price">&nbsp;</td>
												<td data-th="Status">&nbsp;</td>
												<td data-th="Actions">
													&nbsp;
												</td>
											</tr>
										</table>
									</li>
									<li>
										<h4><span>$9,000 - $12,000</span>  (Limit of 5 packages)</h4>
										<table class="funeral-table table table-bordered" cellspacing="0" cellpadding="0">
											<tr>
												<th width="40%">Package Title</th>
												<th width="15%">Price</th>
												<th width="15%">Status</th>
												<th width="30%">Actions</th>
											</tr>
											<tr>
												<td data-th="Package Title"><i>No funeral homes have been added yet.</i></td>
												<td data-th="Price">&nbsp;</td>
												<td data-th="Status">&nbsp;</td>
												<td data-th="Actions">
													&nbsp;
												</td>
											</tr>
										</table>
									</li>
									<li>
										<h4><span>$12,000 - $15,000</span>  (Limit of 5 packages)</h4>
										<table class="funeral-table table table-bordered" cellspacing="0" cellpadding="0">
											<tr>
												<th width="40%">Package Title</th>
												<th width="15%">Price</th>
												<th width="15%">Status</th>
												<th width="30%">Actions</th>
											</tr>
											<tr>
												<td data-th="Package Title"><i>No funeral homes have been added yet.</i></td>
												<td data-th="Price">&nbsp;</td>
												<td data-th="Status">&nbsp;</td>
												<td data-th="Actions">
													&nbsp;
												</td>
											</tr>
										</table>
									</li>
								</ul>
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