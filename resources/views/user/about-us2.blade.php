@extends('user.layouts.user')
@section('content')
		<div class="dashboard-content">
			<div class="dashboard-title">
				<div class="inner-wrap"><div class="menu-icon"></div><strong>STEP 3:</strong> Burial Packages</div>
			</div>
			<div class="page-note">
				<div class="inner-wrap">
					<div class="note">
						<p><strong>Select from one of the options below and press ‘Show’.</strong></p>
						<div class="note-step-dropdown">
							<div class="region-select step-select">
								<select class="form-control selectpicker">
									<option><strong>STEP 3:</strong>  Burial Packages</option>
									<option><strong>STEP 3:</strong>  Burial Packages</option>
									<option><strong>STEP 3:</strong>  Burial Packages</option>
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
										<input type="submit" class="blue add-btn-link" value="Save">
									</li>
								</ul>
							</div>
						</div>
						<div class="funeral-box-middle">
							<div class="burial-package-add">
								<p><em class="red">*</em> Red boxes are mandatory. These must be filled out before your packages can go live.</p>
								<div class="row clearfix">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="burial-package-add-form">
											@if($funral_profile->funeral_home_profile != null)
											<form method="post" action="{!! route('funeral-home-profile.update',$funral_profile->funeral_home_profile->id) !!}">
											@csrf
											@method('PATCH')
											@else
											<form method="post" action="{!! route('funeral-home-profile.store') !!}">
											@csrf
											@endif
												<div class="package-box">
													<ul>
														<li class="clearfix">
															<div class="popup-tooltip">
																<a href="javascript:;" class="close-icon"><i class="fa fa-times"></i></a>
																<div class="popup-tooltip-text">
																	<h3>The red boxes are mandatory. These must be filled out before your packages can go live.</h3>
																	<p>The blue boxes aren’t required to be filled out.</p>
																	<div class="checkbox-btn">
																		<input type="checkbox" value="value" id="remember" name="remember">
																		<label for="remember">Don’t show me this again.</label>
																	</div>
																</div>
															</div>
															<div class="left red">
																<label>Logo:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<div class="add-btn">
																		<div id="container">	
																		<a href="javascript:;" class="green add-btn-link" id="logo">
																			Upload Logo
																		</a>
																		</div>
																		<input type="hidden" name="business_logo" id="image" value="{!! $funral_profile->funeral_home_profile ? $funral_profile->funeral_home_profile->business_logo : ''  !!}">

																	</div>
																	<ul class="f_16">
																		<li>* Replace image by uploading the new image</li>
																		<li>* Logo dimensions: 371px (w) x 205px (h)</li>
																	</ul>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left red">
																<label>Landline Phone:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<div class="row">
																		<div class="col-xs-4">
																			<select class="form-control selectpicker form-control" name="phone_code">
																				<option>01</option>
																				<option>021</option>
																				<option>03</option>
																			</select>
																		</div>
																		<div class="col-xs-8">
																			<input type="text" class="form-control" name="phone" value="{!! $funral_profile->funeral_home_profile ? $funral_profile->funeral_home_profile->phone : ''  !!}">
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>FREE Phone:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<div class="row">
																		<div class="col-xs-4">
																			<select class="form-control selectpicker form-control" name="free_code">
																				<option>01</option>
																				<option>021</option>
																				<option>03</option>
																			</select>
																		</div>
																		<div class="col-xs-8">
																			<input type="text" class="form-control" name="free_phone" value="{!! $funral_profile->funeral_home_profile ? $funral_profile->funeral_home_profile->free_phone : ''  !!}">
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Mobile:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<div class="row">
																		<div class="col-xs-4">
																			<select class="form-control selectpicker form-control" name="mobile">
																				<option>01</option>
																				<option>021</option>
																				<option>03</option>
																			</select>
																		</div>
																		<div class="col-xs-8">
																			<input type="text" class="form-control" name="mobile" value="{!! $funral_profile->funeral_home_profile ? $funral_profile->funeral_home_profile->mobile : ''!!}">
																		</div>
																	</div>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left red">
																<label>Address:</label>
															</div>
															<div class="right">
																<div class="form-group address-input">
																	<input type="text" class="form-control" placeholder="Address 1" name="address1" value="{!! $funral_profile->funeral_home_profile ? $funral_profile->funeral_home_profile->address1 : '' !!}">
																	<input type="text" class="form-control" placeholder="Address 2" name="address2" value="{!! $funral_profile->funeral_home_profile ? $funral_profile->funeral_home_profile->address2 : '' !!}">
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Website:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control" name="website" value="{!! $funral_profile->funeral_home_profile ? $funral_profile->funeral_home_profile->website : '' !!}">
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left red">
																<label>About Your Business:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<textarea class="form-control about-textarea" placeholder="Write a brief description about your funeral home." name="about">{!! $funral_profile->funeral_home_profile ? $funral_profile->funeral_home_profile->about : '' !!}</textarea>
																</div>
															</div>
														</li>
														<input type="hidden" name="id" value="{!! $id !!}">
														<li class="clearfix">
															<div class="left">
																<label>Video URL: (You Tube only)</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control" name="videourl" value="{!! $funral_profile->funeral_home_profile ? $funral_profile->funeral_home_profile->videourl : '' !!}">
																	<a href="#" class="add-youtube-video"  >How to add Video URL</a>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left red">
																<label>Gallery:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<div class="add-btn">
																		<a href="#" class="green add-btn-link">
																			Upload Photos
																		</a>
																	</div>
																	<ul class="f_16">
																		<li>* Photo dimensions:</li>
																		<li>* Remove image by clicking the ‘x’ on the photo </li>
																		<li>* You can drag and drop photos to re-order</li>
																	</ul>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<div class="save-add-row">
													<div class="add-btn">
														<ul>
															<li><input type="submit" class="blue add-btn-link" value="Save"></li>
														</ul>
													</div>
												</div>
											</form>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="title"><h2>About Simplicity Bereavement Services</h2></div>
										<div class="about-package">
											<div class="business_logo">
												<img src="{!! asset($funral_profile->funeral_home_profile ? $funral_profile->funeral_home_profile->business_logo_url() : '') !!}" id="img">
												
											</div>
											<div class="c-detail">
												<strong>Contact Details:</strong>
												<p>Phone: (07) 847-6851<br>
													Mobile: 027 123 1234<br>
													Address: 8F Railside Place, Frankton, Hamilton 3204<br>
													Website: <a href="#"> www.simplicityhamilton.co.nz</a></p>
											</div>
											<p>Choose us and we will take a further 5% off the funeral package cost. Simply say ‘Simplicity101’ and you will get the guaranteed 5% off.</p>
											<div class="embed-responsive embed-responsive-16by9">
												<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iB_ilZ1SX4I"></iframe>
											</div>
											<div class="gallery-about">
												<ul class="row clearfix" id="sortable">
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<a href="{!! asset('images/about-gallery-img-popup1.jpg') !!}" rel="author">
															<img src="{!! asset('images/about-gallery-img1.jpg') !!}" alt="">
														</a>
														<div class="close-img">
															<a href="javascript:;" class="delete_g_image" data-id="130"><i class="fa fa-window-close"></i></a>
														</div>
													</li>
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<div class="close-img">
															<a href="javascript:;" class="delete_g_image" data-id="130"><i class="fa fa-window-close"></i></a>
														</div>
														<a href="images/about-gallery-img-popup1.jpg" rel="author">
															<img src="{!! asset('images/about-gallery-img2.jpg') !!}" alt="">
														</a>
													</li>
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<div class="close-img">
															<a href="javascript:;" class="delete_g_image" data-id="130"><i class="fa fa-window-close"></i></a>
														</div>
														<a href="images/about-gallery-img-popup1.jpg" rel="author">
															<img src="{!! asset('images/about-gallery-img3.jpg') !!}" alt="">
														</a>
													</li>
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<div class="close-img">
															<a href="javascript:;" class="delete_g_image" data-id="130"><i class="fa fa-window-close"></i></a>
														</div>
														<a href="images/about-gallery-img-popup1.jpg" rel="author">
															<img src="{!! asset('images/about-gallery-img4.jpg') !!}" alt="">
														</a>
													</li>
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<a href="images/about-gallery-img-popup1.jpg" rel="author">
															<img src="{!! asset('images/about-gallery-img5.jpg') !!}" alt="">
														</a>
													</li>
													<li class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
														<a href="images/about-gallery-img-popup1.jpg" rel="author">
															<img src="{!! asset('images/about-gallery-img6.jpg') !!}" alt="">
														</a>
													</li>
												</ul>
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
@endsection
@section('script')
<script src="{!! asset('js/plupload.full.min.js') !!}"></script>
<script type="text/javascript">
  var uploader = new plupload.Uploader({
      runtimes : 'html5,flash,silverlight,html4',
       
      browse_button : 'logo', // you can pass in id...
      container: document.getElementById('container'), // ... or DOM Element itself
       
      url : "{{ asset('plupload/upload.php') }}",

      filters : {
          max_file_size : '10mb',
          mime_types: [
              {title : "Image files", extensions : "jpg,gif,png"},
              {title : "Zip files", extensions : "zip"}
          ]
      },
   
      // Flash settings
      flash_swf_url : "{{ asset('plupload/Moxie.swf') }}",
   
      // Silverlight settings
      silverlight_xap_url : "{{ asset('plupload/Moxie.xap') }}",
       
   
      init: {
          PostInit: function() {
              //document.getElementById('filelist').innerHTML = '';
          },
   
          FilesAdded: function(up, files) {
              
              uploader.start();
          },
   
          // UploadProgress: function(up, file) {
          //     document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
          // },
          UploadFile: function(up, file){
                      var tmp_url = '{!! asset('/tmp/') !!}';
                      console.log(file);
                      
                          $('#image').val(file.name);
                          $('#img').remove();
                          $('.business_logo').append("<img src='"+tmp_url +"/"+ file.name+"' id='img' height='205px' width='371px'/>");
                          

                          /*$('#preview').val(file.name);
                          $('#previewDiv >img').remove();
                          $('#previewDiv').append("<img src='"+tmp_url +"/"+ file.name+"' id='preview' height='100px' width='100px'/>");*/
                      
                  },
          UploadComplete: function(up, files){
            
                  var tmp_url = '{!! asset('/tmp/') !!}';
                  console.log(files);
                  plupload.each(files, function(file) {
                      $('#image').val(file.name);
                      $('#previewDiv > img').remove();
                      $('#previewDiv').append("<img src='"+"/tmp/"+ file.name+"' id='preview' height='100px' width='100px'/>");
                  });
                  jQuery('.loader').fadeToggle('medium');
          },
   
          Error: function(up, err) {
              document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
          }
      }
  });
   
  uploader.init();
</script>
@endsection