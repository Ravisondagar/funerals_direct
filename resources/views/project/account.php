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
				<div class="inner-wrap"><div class="menu-icon"></div>Account</div>
			</div>
			<div class="funeral-home-dashboard">
				<div class="inner-wrap">
					<div class="funeral-box border-0">
						<div class="package-detail-tab">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class=""><a href="#about-tab" role="tab" data-toggle="tab" aria-expanded="true">Summary</a></li>
								<li role="presentation" class="active"><a href="#review-tab" role="tab" data-toggle="tab" aria-expanded="false">Payment Methods</a></li>
							</ul>
								<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade" id="about-tab">
									<div class="about-tab">
										<div class="table-responsive">
											<table class="table table-striped">
												<thead>
													<tr>
														<th width="35%">Subscription Name</th>
														<th width="20%">Payment method</th>
														<th width="15%">Billing Address</th>
														<th width="15%">Shipping Address</th>
														<th width="15%">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															Gaia First month<br>
															Next Biling Date: 10/252017 - 16:40<br>
															Next Biling amount: $9.95<br>
															Account Status: Active
														</td>
														<td>Visa - 4003<br> Expires 04/2019</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>
															<div><a href="#">View</a></div>
														</td>
													</tr>
													<tr>
														<td>
															Gaia First month<br>
															Next Biling Date: 10/252017 - 16:40<br>
															Next Biling amount: $9.95<br>
															Account Status: Active
														</td>
														<td>Visa - 4003<br> Expires 04/2019</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>
															<div><a href="#">View</a></div>
														</td>
													</tr>
													<tr>
														<td>
															Gaia First month<br>
															Next Biling Date: 10/252017 - 16:40<br>
															Next Biling amount: $9.95<br>
															Account Status: Active
														</td>
														<td>Visa - 4003<br> Expires 04/2019</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>
															<div><a href="#">View</a></div>
														</td>
													</tr>
													<tr>
														<td>
															Gaia First month<br>
															Next Biling Date: 10/252017 - 16:40<br>
															Next Biling amount: $9.95<br>
															Account Status: Active
														</td>
														<td>Visa - 4003<br> Expires 04/2019</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>
															<div><a href="#">View</a></div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade active in" id="review-tab">
									<div class="about-tab">
										<div class="add-btn"><a href="#" class="green add-btn-link">Add Card</a><a href="#" class="orange add-btn-link">Pay Now</a><br></div>
										<div class="table-responsive">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>Choose</th>
														<th>cardholder</th>
														<th>type</th>
														<th>last 4 digits</th>
														<th>expiration date</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<input type="radio" name="radio">
														</td>
														<td>Hiirini Pomare</td>
														<td>Visa</td>
														<td>4003</td>
														<td>04/2019</td>
														<td>
															<div><a href="#">Edit</a></div>
															<div><a href="#">Remove</a></div>
														</td>
													</tr>
													<tr>
														<td>
															<input type="radio" name="radio">
														</td>
														<td>Hiirini Pomare</td>
														<td>Visa</td>
														<td>4003</td>
														<td>04/2019</td>
														<td>
															<div><a href="#">Edit</a></div>
															<div><a href="#">Remove</a></div>
														</td>
													</tr>
													<tr>
														<td>
															<input type="radio" name="radio">
														</td>
														<td>Hiirini Pomare</td>
														<td>Visa</td>
														<td>4003</td>
														<td>04/2019</td>
														<td>
															<div><a href="#">Edit</a></div>
															<div><a href="#">Remove</a></div>
														</td>
													</tr>
												</tbody>
											</table>
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