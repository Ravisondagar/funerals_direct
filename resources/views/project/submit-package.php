<!doctype html>
<html>
<head>
	<?php include('include/styles.php') ?>
</head>

<body>
	<?php include('include/header.php') ?>

	<div class="funerals-steps">
		<div class="container">
			<ul>
				<li class="done">
					<span class="step-no">
						1<img src="images/step-done-icon.png" alt="">
					</span>
					<span class="step-name">Define Search</span>
				</li>
				<li class="done">
					<span class="step-no">
						2<img src="images/step-done-icon.png" alt="">
					</span>
					<span class="step-name">Choose Package</span>
				</li>
				<li class="done">
					<span class="step-no">
						3<img src="images/step-done-icon.png" alt="">
					</span>
					<span class="step-name">Additional Services</span>
				</li>
				<li class="in-progress">
					<span class="step-no">
						4<img src="images/step-done-icon.png" alt="">
					</span>
					<span class="step-name">Submit Package</span>
				</li>
				<li>
					<span class="step-no">
						5<img src="images/step-done-icon.png" alt="">
					</span>
					<span class="step-name">You’re Done</span>
				</li>
			</ul>
		</div>
	</div>
	<div class="submit-package-page">
		<div class="container">
			<div class="search-result">Results for Waikato, Hamilton, Burial, Package, $3,000 - $6,000</div>
			<div class="title"><h2>Submit Package</h2></div>
			<div class="row clearfix">
				<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
					<div class="additional-services-list-box">
						<h4>Your Information</h4>
						<div class="submit-package-form">
							<form>
								<div class="input-group">
									<label>Your Name <em>*</em></label>
									<input type="text" class="form-control">
								</div>
								<div class="input-group">
									<label>Best Contact Number</label>
									<input type="text" class="form-control">
								</div>
								<div class="input-group">
									<label>Email Address <em>*</em></label>
									<input type="text" class="form-control">
								</div>
								<div class="input-group">
									<label>Questions / Message to Funeral Home</label>
									<textarea class="form-control"></textarea>
								</div>
							</form>
							<div class="tc">
								<ul>
									<li>Prices include GST</li>
									<li>Payment will be organized directly with the funeral home. No payment is required online.</li>
									<li>Additional services, flowers, caterers, printers, headstones are provided by third parties in which we will organize.</li>
								</ul>
								<div class="tc-checkbox">
									<div class="checkbox-btn">
										<input type="checkbox" value="value" id="remember" name="remember">
										<label for="remember"></label>
									</div>
									I confirm that I have read and agreed to the <a href="#" class="blue-link">Terms and Conditions</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tc apply-finance-box">
						<div class="form-group">
							<label>Would you like to apply for Funeral Finance? <em class="red">*</em></label>
							<p>If yes, once you have submitted your funeral package you will be redirected to the Funeral Finance application.</p>
							<div class="btn-group custom-radio clearfix" data-toggle="buttons">
								<label class="btn btn-default active">
									<input type="radio" name="options" id="option1" autocomplete="off" checked=""> Yes
								</label>
								<label class="btn btn-default">
									<input type="radio" name="options" id="option2" autocomplete="off"> No
								</label>
							</div>
						</div>
					</div>
					<div class="view-detail-btn">
						<a href="submit-package-thankyou.php">Submit Package</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
					<div class="summary-services">
						<div class="summary-box">
							<h3>Summary of Services</h3>
							<ul>
								<li class="clearfix">
									<div class="summary-desc">
										<div class="summary-name">Burial Package</div>
										<div class="summary-options">* Package 1</div>
										<div class="summary-options">* Simplicity Funeral Homes</div>
									</div>
									<div class="summary-price">$3,200.00</div>
								</li>
								<li class="clearfix">
									<div class="summary-desc">
										<div class="summary-name">Casket Spray</div>
										<div class="summary-options">* Double ended</div>
									</div>
									<div class="summary-price">$250.00</div>
								</li>
								<li class="clearfix">
									<div class="summary-desc">
										<div class="summary-name">Catering</div>
										<div class="summary-options">* $15 per head x 200 people</div>
									</div>
									<div class="summary-price">$3,000.00</div>
								</li>
								<li class="clearfix">
									<div class="summary-desc">
										<div class="summary-name">Funeral Programme</div>
										<div class="summary-options">* Template 1</div>
									</div>
									<div class="summary-price">$40.00</div>
								</li>
								<li class="clearfix">
									<div class="summary-desc">
										<div class="summary-name">Printing</div>
										<div class="summary-options">* Plain A4 paper</div>
										<div class="summary-options">* Black &amp; white</div>
										<div class="summary-options">* 200 prints @ 20c each</div>
									</div>
									<div class="summary-price">$40.00</div>
								</li>
							</ul>
						</div>
						<div class="summary-total clearfix">
							<div class="summary-desc">
								<div class="summary-name">TOTAL:</div>
							</div>
							<div class="summary-price">$6,530.00</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('include/footer2.php') ?>
	<?php include('include/scripts.php') ?>

</body>
</html>