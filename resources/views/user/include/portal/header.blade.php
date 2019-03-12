<header>
		<div class="header-wrap">
			<div class="container-fluid clearfix">
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
				<div class="header-wrap-right">
					<div class="nav-warp">
						<div id="nav-header" class="nav collapse">
							<ul>
								<li class="active">
									<a href="index.php">Go to Website</a>
								</li>
								<li>
									<form method="post" id="form" action="{{ route('userlogout') }}">
									@csrf
									<a href="javascript:;" id="logout">Logout</a>
								</form>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>