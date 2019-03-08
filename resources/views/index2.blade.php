@extends('user.layouts.app')
@section('content')
	<div class="landing-page-search-bg">
		<img src="{!! asset('project/images/bg-img.jpg') !!}" alt="">
		<div class="most-affordable-wrap">
			<div class="container">
				<h1>NZ's #1 Website <div>for Funeral Packages</div>
					<span>Funeral packages to suit every family</span>
				</h1>
			</div>
		</div>
		<div class="select-option-funeral">
			<h4 class="text-center">Please select an option:</h4>
			<div class="clearfix select-option-wrap">
				<div class="funeral-option-box yellow">
					<a href="#">
						<div class="fu-op-txt text-center">
							<h3>To Organise<br> a Funeral Now</h3>
						</div>
					</a>
				</div>
				<div class="funeral-option-box orange">
					<a href="#">
						<div class="fu-op-txt">
							<h3>To Plan Ahead</h3>
							<p>Choose a:</p>
							<ul>
								<li>Funeral Package</li>
								<li>Funeral Finance option</li>
							</ul>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="text-center fb-share">
			<a href="https://www.facebook.com/funeralsdirect/" target="_blank"><img src="{!! asset('project/images/facebook_share.png') !!}') !!}" alt=""></a>
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