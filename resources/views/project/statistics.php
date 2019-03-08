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
				<div class="inner-wrap"><div class="menu-icon"></div>Statistics</div>
			</div>
			<div class="page-note">
				<div class="inner-wrap">
					<div class="note">
						Select the funeral home and select date range to view your statistics.
					</div>
				</div>
			</div>
			<div class="funeral-home-dashboard">
				<div class="inner-wrap">
					<div class="funeral-box">
						<div class="funeral-box-header">
							<div class="statistics-filter clearfix">
								<div class="choose-statistics">
									<div class="form-group">
										<label>Choose funeral home:</label>
										<div class="region-select step-select small white">
											<select class="form-control selectpicker">
												<option>Show All</option>
												<option>1</option>
												<option>2</option>
											</select>
										</div>
									</div>
								</div>
								<div class="choose-statistics-date clearfix">
									<div class="date">
										<div class="form-group">
											<div class="row">
												<div class="col-sm-3 text-right"><label>Date From:</label></div>
												<div class="col-sm-9">
													<input type="text" class="form-control flatpickr">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-3 text-right"><label>Date To:</label></div>
												<div class="col-sm-9">
													<input type="text" class="form-control flatpickr">
												</div>
											</div>
										</div>
									</div>
									<div class="statistics-search-btn">
										<div class="add-btn text-right">
											<input type="submit" class="blue add-btn-link" value="Search">
										</div>
									</div>
								</div>
								<div class="statistics-download">
									<div class="add-btn text-right">
										<a href="#" class="green add-btn-link">Download</a>
									</div>
								</div>
							</div>
						</div>
						<div class="funeral-box-middle">
							<div class="statistics-table">
								<h4>Simplicity Hawkes Bay <i>i</i></h4>
								<div class="table-responsive">
									<table cellpadding="0" cellspacing="0" class="table">
										<thead>
											<tr class="active">
												<th>Packages</th>
												<th>First Visits</th>
												<th>Return Visits</th>
												<th>Package Details</th>
												<th>Additional Services</th>
												<th>Submit Package</th>
												<th>Submissions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td colspan="7"><div class="red text-left"><strong>Burial Packages</strong></div></td>
											</tr>
											<tr class="active">
												<td>Package Name 1</td>
												<td>41</td>
												<td>6</td>
												<td>38</td>
												<td>22</td>
												<td>22</td>
												<td>3</td>
											</tr>
											<tr>
												<td>Package Name 2</td>
												<td>41</td>
												<td>6</td>
												<td>38</td>
												<td>22</td>
												<td>22</td>
												<td>3</td>
											</tr>
											<tr class="active">
												<td>Package Name 3</td>
												<td>41</td>
												<td>6</td>
												<td>38</td>
												<td>22</td>
												<td>22</td>
												<td>3</td>
											</tr>
											<tr class="danger">
												<td><strong>Sub-Total</strong></td>
												<td><strong>123</strong></td>
												<td><strong>18</strong></td>
												<td><strong>114</strong></td>
												<td><strong>66</strong></td>
												<td><strong>66</strong></td>
												<td><strong>9</strong></td>
											</tr>
											<tr>
												<td colspan="7"><div class="red text-left"><strong>Cremation Packages</strong></div></td>
											</tr>
											<tr class="active">
												<td>Package Name 1</td>
												<td>41</td>
												<td>6</td>
												<td>38</td>
												<td>22</td>
												<td>22</td>
												<td>3</td>
											</tr>
											<tr>
												<td>Package Name 2</td>
												<td>41</td>
												<td>6</td>
												<td>38</td>
												<td>22</td>
												<td>22</td>
												<td>3</td>
											</tr>
											<tr class="active">
												<td>Package Name 3</td>
												<td>41</td>
												<td>6</td>
												<td>38</td>
												<td>22</td>
												<td>22</td>
												<td>3</td>
											</tr>
											<tr class="danger">
												<td><strong>Sub-Total</strong></td>
												<td><strong>123</strong></td>
												<td><strong>18</strong></td>
												<td><strong>114</strong></td>
												<td><strong>66</strong></td>
												<td><strong>66</strong></td>
												<td><strong>9</strong></td>
											</tr>
										</tbody>
										<tfoot>
											<tr class="success">
												<td><strong>TOTAL</strong></td>
												<td><strong>246</strong></td>
												<td><strong>36</strong></td>
												<td><strong>228</strong></td>
												<td><strong>132</strong></td>
												<td><strong>132</strong></td>
												<td><strong>18</strong></td>
											</tr>
										</tfoot>
									</table>
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