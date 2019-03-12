@extends('user.layouts.user')
@section('content')
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
										<div class="popup-tooltip">
											<a href="javascript:;" class="close-icon"><i class="fa fa-times"></i></a>
											<div class="popup-tooltip-text">
												<h3>Click the “Add Funeral Home” button to get started</h3>
												<p>From there you can add funeral packages, set regions etc</p>
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
							<p><em class="red">*</em> Minimum Requirements</p>
							<table class="funeral-table table table-bordered" cellspacing="0" cellpadding="0">
								<tr>
									<th>My Funeral Homes</th>
									<th><em>*</em>Region</th>
									<th><em>*</em>About Us</th>
									<th><em>*</em>3 Packages</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
								@foreach($funeral_homes as $funeral_home)
								<tr>
									<td data-th="My Funeral Homes"><i>{!! $funeral_home->name !!}</i></td>
									<td data-th="*Region"><div class="text-center"><i class="fa fa-times-circle circle-close"></i></div></td>
									<td data-th="*About Us"><div class="text-center"><i class="fa fa-times-circle circle-close"></i></div></td>
									<td data-th="*3 Packages"><div class="text-center"><i class="fa fa-times-circle circle-close"></i></div></td>
									<td data-th="Status"><div class="text-center"><i class="fa fa-times-circle circle-close"></i> Offline</div></td>
									<td data-th="Actions" class="relative">
										{{-- <div class="popup-tooltip right">
											<a href="javascript:;" class="close-icon"><i class="fa fa-times"></i></a>
											<div class="popup-tooltip-text">
												<h3>To edit your funeral home select “Settings”</h3>
												<p>From there you can add funeral packages, set regions etc</p>
												<div class="checkbox-btn">
													<input type="checkbox" value="value" id="remember1" name="remember">
													<label for="remember1">Don’t show me this again.</label>
												</div>
											</div>
										</div> --}}
										<div class="btn-group table-dropdown">
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Choose Action <span class="caret"></span>
											</button>
											<ul class="dropdown-menu">
												<li><a href="{!! route('funeral.setting',$funeral_home->id) !!}">Settings</a></li>
												<li><a data-href="{!! route('funeral-home.update',$funeral_home->id) !!}" id="rename" data-toggle="modal" data-target="#rename-funeral-home">Rename</a></li>
												<li><a href="#" data-toggle="modal" data-target="#publish-funeral-home">Publish</a></li>
												<li class="active"><a href="#" data-toggle="modal" data-target="#unpublish-funeral-home">Unpublish</a></li>
												<li><a href="#" data-toggle="modal" data-target="#duplicate-funeral-home">Duplicate</a></li>
												<li><a href="#" data-toggle="modal" data-target="#delete-funeral-home">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
								@endforeach
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- add-funeral-home -->
	<div class="modal fade funeral-home-popup" id="add-funeral-home" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p>Give your package a name and then press the “Save” button.</p>
					<form method="post" action="{!! route('funeral-home.store') !!}">
						@csrf
						<div class="funeral-home-popup-form">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Joe Bloggs & Co Hawkes Bay" name="name">
							</div>
						</div>
						<div class="add-btn text-right">
							<input type="submit" class="blue add-btn-link" value="Save">
							<a href="javascript:;" class="pink-orange add-btn-link" data-dismiss="modal">
								Cancel
							</a>
						</div>
					</form>
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

	<!-- unpublish-funeral-home -->
	<div class="modal fade funeral-home-popup" id="unpublish-funeral-home" tabindex="-1" role="dialog">
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
@endsection
@section('script')
<script type="text/javascript">
	$('#rename').click(function(){
		alert($(this).data('href'));
	});
	
</script>
@endsection