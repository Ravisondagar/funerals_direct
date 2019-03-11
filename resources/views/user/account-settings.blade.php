@extends('user.layouts.user')
@section('content')
		<div class="dashboard-content">
			<div class="dashboard-title">
				<div class="inner-wrap"><div class="menu-icon"></div>Account Settings</div>
			</div>
			<div class="page-note">
				<div class="inner-wrap">
					<div class="note">
						Please ensure that all required fields are filled out.
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
								<p><em class="red">*</em> Required fields</p>
								<div class="row clearfix">
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="burial-package-add-form">
											<form>
												<div class="package-box">
													<ul>
														<li class="clearfix">
															<div class="left">
																<label>Company Name: <em class="red">*</em></label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="Type your company name">
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Contact Person: <em class="red">*</em></label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="Type your name">
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Physical Address: <em class="red">*</em></label>
															</div>
															<div class="right">
																<div class="form-group address-input">
																	<input type="text" class="form-control" placeholder="Address 1">
																	<input type="text" class="form-control" placeholder="Address 2">
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Suburb: <em class="red">*</em></label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="Type your suburb">
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>City: <em class="red">*</em></label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="Type your city">
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Region:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<select class="form-control selectpicker darkblue form-control" title="Region">
																		<option>Region 1</option>
																		<option>Region 2</option>
																		<option>Region 3</option>
																	</select>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Country: <em class="red">*</em></label>
															</div>
															<div class="right">
																<div class="form-group">
																	<select class="form-control selectpicker darkblue form-control" title="Country">
																		<option>New Zealand</option>
																		<option>New Zealand 1</option>
																		<option>New Zealand</option>
																	</select>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Landline: <em class="red">*</em></label>
															</div>
															<div class="right">
																<div class="form-group">
																	<div class="row">
																		<div class="col-xs-4">
																			<select class="form-control selectpicker darkblue form-control">
																				<option>01</option>
																				<option>021</option>
																				<option>03</option>
																			</select>
																		</div>
																		<div class="col-xs-8"><input type="text" class="form-control" placeholder="Type your mobile number"></div>
																	</div>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Mobile: <em class="red">*</em></label>
															</div>
															<div class="right">
																<div class="form-group">
																	<div class="row">
																		<div class="col-xs-4">
																			<select class="form-control selectpicker darkblue form-control">
																				<option>01</option>
																				<option>021</option>
																				<option>03</option>
																			</select>
																		</div>
																		<div class="col-xs-8"><input type="text" class="form-control" placeholder="Type your mobile number"></div>
																	</div>
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Email Address: <em class="red">*</em></label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="Type your email address">
																</div>
															</div>
														</li>
														<li class="clearfix">
															<div class="left">
																<label>Website:</label>
															</div>
															<div class="right">
																<div class="form-group">
																	<input type="text" class="form-control" placeholder="Type your website URL">
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