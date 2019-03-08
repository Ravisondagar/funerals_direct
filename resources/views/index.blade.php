@extends('user.layouts.app')
@section('content')
	<div class="landing-page-search-bg">
		<img src="{!! asset('project/images/bg-img.jpg') !!}"alt="">
		<div class="most-affordable-wrap">
			<div class="container">
				<h1>NZ's #1 Website for Funeral Packages
					<span><a href="#">Never</a> pay too much for funeral services ever again!</span>
				</h1>
			</div>
		</div>
		<div class="filter-wrap">
			<div class="container">
				<div class="row clearfix">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<label>Region <em>*</em></label>
							<select class="form-control selectpicker" title="Region">
								<option>Northland</option>
								<option>Auckland</option>
								<option disabled="">Waikato</option>
								<option>Bay of Plenty</option>
								<option>Gisborne</option>
							</select>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<label>District <em>*</em></label>
							<select class="form-control selectpicker" title="District">
								<option>Cambridge</option>
								<option>Coromandel</option>
								<option>Hamilton</option>
								<option>Huntly</option>
								<option>Morrinsville</option>
								<option>Otorohanga</option>
								<option>Tauramanui</option>
								<option>Paeroa</option>
								<option>Tokoroa</option>
								<option>Thames</option>
							</select>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<label>Funeral Type <em>*</em></label>
							<select class="form-control selectpicker" title="Funeral Type">
								<option>Burial Packages</option>
								<option>Cremation Packages</option>
								<option>Burial Custom</option>
								<option>Cremation Custom</option>
							</select>
						</div>
					</div>
					<!-- <div class="col-lg-2">
						<div class="form-group">
							<label>Package Type <em>*</em></label>
							<select class="form-control selectpicker" title="Package Type">
								<option>Funeral Packages</option>
								<option>Build-a-Funeral</option>
							</select>
						</div>
					</div> -->
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="form-group">
							<label>Your Budget <em>*</em></label>
							<select class="form-control selectpicker" title="Your Budget">
								<option>$0 - $3,000</option>
								<option>$3,000 - $6,000</option>
								<option>$6,000 - $9,000</option>
								<option>$9,000 - $12,000</option>
								<option>$12,000 - $15,000</option>
							</select>
						</div>
					</div>
				</div>
				<div class="find-btn"><a href="build-a-funeral.php">Find Funeral Packages</a></div>
				<div class="or">
					<span>or</span>
				</div>
				<div class="find-btn-bg-blue text-center"><input value="Find a Funeral Director" type="submit"></div>
				<!-- <div class="social-icon">
					<ul>
						<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-github"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div> -->
			</div>
		</div>
	</div>
	<div class="landing-page-text">
		<div class="container">
			<p>Organising a funeral during the loss of a loved one can be a daunting and stressful time.  We understand how you feel which is why we want to make the process for you as easy as possible.</p>
		</div>
	</div>
	<div class="how-it-works-wrap">
		<div class="container">
			<h2>HOW IT WORKS</h2>
			<p class="t_highlite">Whether you're planning for a current funeral or planning for the future, it only takes 5 easy steps to organise a funeral.</p>
			<ul class="row clearfix">
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<span class="no">1</span>
					<h3>Define Your Search</h3>
					<img src="{!! asset('project/images/hiw-img1.jpg') !!}" alt="">
					<p><strong>Choose your location, funeral type and budget.</strong></p>
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<span class="no">2</span>
					<h3>Compare &amp; Choose</h3>
					<img src="{!! asset('project/images/hiw-img2.jpg') !!}" alt="">
					<p><strong>Find the best funeral home and pricing that suits your family.</strong></p>
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<span class="no">3</span>
					<h3>Organise Other Services</h3>
					<img src="{!! asset('project/images/hiw-img3.jpg') !!}" alt="">
					<p><strong>Organise the casket flowers, catering, funeral programme and printing.</strong></p>
				</li>
			</ul>
			<ul class="row clearfix">
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<span class="no">4</span>
					<h3>Fill Out Form</h3>
					<img src="{!! asset('project/images/hiw-img4.jpg') !!}" alt="">
					<p><strong>Fill out the form with your details and submit.</strong></p>
				</li>
				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<span class="no">5</span>
					<h3>You’re Done!</h3>
					<img src="{!! asset('project/images/hiw-img5.jpg') !!}" alt="">
					<p><strong>Receive a confirmation email with your package details.</strong></p>
				</li>
			</ul>
		</div>
	</div>
@endsection