	<header class="subscribe-header">
		<div class="header-wrap">
			<div class="subscribe-wrap">
				<div class="mobile-subscribe-wrap clearfix">
					<div class="facebook-btn">
						<a href="#"> <i class="fa fa-facebook"></i> Follow us on<br> Facebook</a>
					</div>
					<div class="subscribe-btn">
						<a href="#">Subscribe</a>
					</div>
				</div>
				<div class="container clearfix">
					<div class="left"><a href="#"><img src="{!! asset('/project/images/facebook-icon.png') !!}" alt=""></a></div>
					<div class="right">
						<form>
							<ul class="clearfix">
								<li><label>Subscribe to our newsletters</label></li>
								<li><span class="s-icon"><i class="fa fa-user"></i></span><input type="text" placeholder="Name" class="form-control"></li>
								<li><span class="s-icon"><i class="fa fa-envelope"></i></span><input type="text" placeholder="Email Address" class="form-control"></li>
								<li><input type="submit" value="Subscribe" class="submit"></li>
							</ul>
						</form>
					</div>
				</div>
			</div>
			<div class="container clearfix">
				<div class="header-wrap-left clearfix">
					<div class="logo">
						<a href="#"><img src="{!! asset('project/images/logo.png') !!}" alt=""></a>
					</div>
					<button data-target="#nav-header" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="header-wrap-right with-login">
					<div class="nav-warp">
						<div id="nav-header" class="nav collapse">
							<ul>
								<li class="active">
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="#">About Us</a>
								</li>
								<li>
									<a href="#">Funeral Home Directory</a>
								</li>
								<li>
									<a href="#">Blog</a>
								</li>
								<li>
									<a href="#">Contact Us</a>
								</li>
								@if(!Auth::check())
								<li class="login-links">
									<a href="{!! route('users.login') !!}">Login</a>   /  <a href="{!! route('users.register') !!}">Register</a>
								</li>
								@endif
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>