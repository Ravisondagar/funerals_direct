@extends('user.layouts.user')
@section('content')
		<div class="dashboard-content">
			<div class="dashboard-title">
				<div class="inner-wrap"><div class="menu-icon"></div><strong>STEP 1:</strong> Region and District Settings</div>
			</div>
			<div class="page-note">
				<div class="inner-wrap">
					<div class="note">
						<p><strong>Select from one of the options below and press ‘Show’.</strong></p>
						<div class="note-step-dropdown">
							<div class="region-select step-select">
								<select class="form-control selectpicker">
									<option><strong>STEP 1:</strong>  Region and District Settings</option>
									<option><strong>STEP 2:</strong>  Region and District Settings</option>
									<option><strong>STEP 3:</strong>  Region and District Settings</option>
									<option><strong>STEP 4:</strong>  Region and District Settings</option>
									<option><strong>STEP 5:</strong>  Region and District Settings</option>
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
										<a href="javascript:;" class="green add-btn-link" id="ad_region">
											Add Region
										</a>
										{{-- <div class="popup-tooltip">
											<a href="javascript:;" class="close-icon"><i class="fa fa-times"></i></a>
											<div class="popup-tooltip-text">
												<h3>Click the button to add a region.</h3>
												<p>There are no limits of regions you can add.</p>
												<div class="checkbox-btn">
													<input type="checkbox" value="value" id="remember" name="remember">
													<label for="remember">Don’t show me this again.</label>
												</div>
											</div>
										</div> --}}
									</li>
								</ul>
							</div>
						</div>
						<div class="funeral-box-middle">
							<p><em class="red">*</em> All regions and distrcts that you select will appear in the search results</p>
							<div class="add-region-list">
								<div class="row clearfix">
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" class="clone">
										<div class="add-region-box">
											<div class="region-select step-select">
												{{-- <div class="popup-tooltip right">
													<a href="javascript:;" class="close-icon"><i class="fa fa-times"></i></a>
													<div class="popup-tooltip-text">
														<h3>Select your region.</h3>
														<p>Once region is selected, you can select the districts.</p>
														<div class="checkbox-btn">
															<input type="checkbox" value="value" id="remember" name="remember">
															<label for="remember">Don’t show me this again.</label>
														</div>
													</div>
												</div> --}}
												<select class="form-control selectpicker" class="parent" title="Choose Region" name="location_id">
													@foreach($parents as $parent)
														<option value="{!! $parent->id !!}">{!! $parent->title !!}</option>
													@endforeach
												</select>
											</div>
											<div class="add-region-txt">
												Select the districts you will be servicing
											</div>
											<div class="region-list-check">
												<ul id="location">
													@foreach($locations as $location)
													<li>
														<div class="checkbox-btn">
															<input type="checkbox" value="{!! $location->id !!}" id="{!! $location->id !!}" name="region_id[]">
															<label for="{!! $location->id !!}">{!! $location->title !!}</label>
														</div>
													</li>
													@endforeach
												</ul>
											</div>
											<div class="region-save-delete">
												<div class="add-btn">
													<a href="#" class="blue add-btn-link" data-toggle="modal" data-target="#save-region">
														Save
													</a>
													<a href="#" class="pink-orange add-btn-link" data-toggle="modal" data-target="#delete-region">
														Delete
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
										<div class="add-region-box">
											<div class="add-region-box-click">
												<a href="#">
													<h5>Add<br> Region <span>+</span></h5>
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
										<div class="add-region-box">
											<div class="add-region-box-click">
												<a href="#">
													<h5>Add<br> Region <span>+</span></h5>
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
										<div class="add-region-box">
											<div class="add-region-box-click">
												<a href="#">
													<h5>Add<br> Region <span>+</span></h5>
												</a>
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
	</div>
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
@endsection
@section('script')
<script type="text/javascript">
	$('.parent').change(function(){
		var id = $(this).val();
		var v_token = "{!! csrf_token() !!}";

		$.ajax({
			type:'post',
			url:"{!! route('country') !!}",
			data:{'id':id, _token: v_token},
			success : function(data){
				console.log(data);
				$('#location').html(data);
			}
		});
	});


</script>
@endsection
