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
				<div class="inner-wrap"><div class="menu-icon"></div>My Funeral Homes</div>
			</div>
			<div class="page-note">
				<div class="inner-wrap">
					<div class="note">
						<p><strong>There are three requirements that you must meet before your funeral home can go live:</strong></p>
						<ol>
							<li>Have at least one region set</li>
							<li>The about us information must be filled out</li>
							<li>Have at least 3 funeral packages created.</li>
						</ol>
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
										<a href="#" class="green add-btn-link" data-toggle="modal" data-target="#add-funeral-home">
											Add Funeral Home
										</a>
										<a href="#" class="blue add-btn-link" data-toggle="modal" data-target="#save-funeral-home">
											save Funeral Home
										</a>
										<a href="#" class="green add-btn-link" data-toggle="modal" data-target="#rename-funeral-home">
											rename Funeral Home
										</a>
										<a href="#" class="blue add-btn-link" data-toggle="modal" data-target="#publish-funeral-home">
											publish funeral home
										</a>
										<a href="#" class="green add-btn-link" data-toggle="modal" data-target="#publish-funeral-home2">
											publish funeral home 2
										</a>
									</li>
									<li>
										<hr>
									</li>
									<li>
										<a href="#" class="blue add-btn-link" data-toggle="modal" data-target="#unpublish-funeral-home">
											unpublish funeral home
										</a>
										<a href="#" class="green add-btn-link" data-toggle="modal" data-target="#duplicate-funeral-home">
											duplicate funeral home
										</a>
										<a href="#" class="blue add-btn-link" data-toggle="modal" data-target="#delete-funeral-home">
											delete-funeral-home
										</a>
										<a href="#" class="pink-orange add-btn-link" data-toggle="modal" data-target="#nominate-question">
											Nominate Question
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="funeral-box-middle">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('include/scripts.php') ?>
	<!-- add-funeral-home -->
	<div class="modal fade funeral-home-popup" id="add-funeral-home" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p>Give your package a name and then press the “Save” button.</p>
					<form class="funeral-home-popup-form">
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Joe Bloggs & Co Hawkes Bay">
						</div>
					</form>
					<div class="add-btn text-right">
						<a href="#" class="blue add-btn-link">
							Save
						</a>
						<a href="javascript:;" class="pink-orange add-btn-link" data-dismiss="modal">
							Cancel
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- save-funeral-home -->
	<div class="modal fade funeral-home-popup" id="save-funeral-home" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p>The About Us has been saved. You can come back and edit this at anytime.</p>
					<div class="add-btn text-center">
						<a href="javascript:;" class="blue add-btn-link" data-dismiss="modal">
							Cancel
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- rename-funeral-home -->
	<div class="modal fade funeral-home-popup" id="rename-funeral-home" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p>What would you like to rename your funeral home to? Type in field below:</p>
					<form class="funeral-home-popup-form">
						<div class="form-group">
							<input type="email" class="form-control" value="Bloggs Funerals Hawkes Bay">
						</div>
					</form>
					<div class="add-btn text-right">
						<a href="#" class="green add-btn-link">
							Rename
						</a>
						<a href="javascript:;" class="pink-orange add-btn-link" data-dismiss="modal">
							Cancel
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- publish-funeral-home -->
	<div class="modal fade funeral-home-popup" id="publish-funeral-home" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p>It seems that this funeral home has not met all the 3 requirements in order to be published.</p>
					<p>Once you have met these requirements please come back and try again.</p>
					<div class="add-btn text-center">
						<a href="javascript:;" class="blue add-btn-link" data-dismiss="modal">
							Cancel
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- publish-funeral-home 2 -->
	<div class="modal fade funeral-home-popup" id="publish-funeral-home2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p>You are about to publish your funeral home to Funerals Direct website. </p>
					<p>Before we go live we need to setup the monthly payments via credit card.</p>
					<div class="add-btn text-center">
						<a href="javascript:;" class="blue add-btn-link" data-dismiss="modal">
							Setup Payments
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- unpublish-funeral-home -->
	<div class="modal fade funeral-home-popup" id="unpublish-funeral-home" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p><strong>Are you sure you want to unpublish [Funeral Home]?</strong></p>
					<ul>
						<li><em>*</em> This will mean that everything connected to this funeral home will no longer show on our website.</li>
						<li><em>*</em> Note that all information will still be in place but it just won’t be live on our website.</li>
					</ul>
					<div class="add-btn text-right">
						<a href="#" class="green add-btn-link">
							Yes, take offline
						</a>
						<a href="javascript:;" class="pink-orange add-btn-link" data-dismiss="modal">
							No, don’t take offline
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- add-funeral-home -->
	<div class="modal fade funeral-home-popup" id="duplicate-funeral-home" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<form class="funeral-home-popup-form">
						<p><strong>Type below the new funeral home name:</strong></p>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Type new funeral home name">
						</div>
						<p><strong>What would you like to duplicate, please select:</strong></p>
						<ul class="clearfix">
							<li>
								<div class="checkbox-btn">
									<input type="checkbox" value="value" id="du_cat1" name="remember">
									<label for="du_cat1">Region settings</label>
								</div>
							</li>
							<li>
								<div class="checkbox-btn">
									<input type="checkbox" value="value" id="du_cat2" name="remember">
									<label for="du_cat2">Flower Listings</label>
								</div>
							</li>
							<li>
								<div class="checkbox-btn">
									<input type="checkbox" value="value" id="du_cat3" name="remember">
									<label for="du_cat3">About Us</label>
								</div>
							</li>
							<li>
								<div class="checkbox-btn">
									<input type="checkbox" value="value" id="du_cat4" name="remember">
									<label for="du_cat4">Catering Listings</label>
								</div>
							</li>
							<li>
								<div class="checkbox-btn">
									<input type="checkbox" value="value" id="du_cat5" name="remember">
									<label for="du_cat5">Burial Packages</label>
								</div>
							</li>
							<li>
								<div class="checkbox-btn">
									<input type="checkbox" value="value" id="du_cat6" name="remember">
									<label for="du_cat6">Funeral Programme &amp; Printing</label>
								</div>
							</li>
							<li>
								<div class="checkbox-btn">
									<input type="checkbox" value="value" id="du_cat7" name="remember">
									<label for="du_cat7">Cremation Packages</label>
								</div>
							</li>
						</ul>
					</form>
					<div class="add-btn text-right">
						<a href="#" class="blue add-btn-link">
							Duplicate
						</a>
						<a href="javascript:;" class="pink-orange add-btn-link" data-dismiss="modal">
							Cancel
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- delete-funeral-home -->
	<div class="modal fade funeral-home-popup" id="delete-funeral-home" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p><strong>Are you sure you want to delete [Funeral Home]?</strong></p>
					<ul>
						<li class="red"><em>*</em> This will mean that everything connected to this funeral home will be gone forever.</li>
					</ul>
					<p><strong>How do you want to proceed?</strong></p>
					<div class="add-btn text-center">
						<a href="#" class="green add-btn-link">
							Yes, delete forever
						</a>
						<a href="javascript:;" class="pink-orange add-btn-link" data-dismiss="modal">
							No, don’t delete
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- nominate-question popup -->
	<div class="modal fade free-download-popup nominate-question-popup" id="nominate-question" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="download-icon">
					<img src="images/home-package-option5.png" alt="">
				</div>
				<div class="nominate-question-popup-desc">
					<div class="row clearfix">
						<div class="col-sm-5">
							<img src="images/card-img.jpg" alt="">
						</div>
						<div class="col-sm-7 text-center">
							<p>Nominate a funeral homeand receive a <strong>$25 prezzy</strong> card when your finance application is successful.</p>
						</div>
					</div>
				</div>
				<div class="modal-body text-center">
					<div class="add-btn text-center">
						<a href="#" class="green add-btn-link">Yes</a>
						<a href="#" class="pink-orange add-btn-link">No</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>