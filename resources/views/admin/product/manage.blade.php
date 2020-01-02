@extends('template.app')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom_style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
	<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Wizards</span> - Steps</h4>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="{{ route('admin.poducts.list') }}">Product List</a></li>
							<li class="active">Add Product</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

		            <!-- Wizard with validation -->
		            <div class="panel panel-white">
						<div class="panel-heading">
							<h6 class="panel-title">Add Product</h6>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

	                	<form class="steps-validation" action="#">
							<h6>General data</h6>
							<fieldset>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Select location: <span class="text-danger">*</span></label>
											<select name="location" data-placeholder="Select position" class="select">
												<option></option>
												<optgroup label="North America">
													<option value="1">United States</option>
													<option value="2">Canada</option>
												</optgroup>

												<optgroup label="Latin America">
													<option value="3">Chile</option>
													<option value="4">Argentina</option>
													<option value="5">Colombia</option>
													<option value="6">Peru</option>
												</optgroup>

												<optgroup label="Europe">
													<option value="8">Croatia</option>
													<option value="9">Hungary</option>
													<option value="10">Ukraine</option>
													<option value="11">Greece</option>
												</optgroup>

												<optgroup label="Middle East &amp; Africa">
													<option value="21">Egypt</option>
													<option value="22">Israel</option>
													<option value="23">Nigeria</option>
													<option value="24">United Arab Emirates</option>
												</optgroup>

												<optgroup label="Asia Pacific">
													<option value="26">Australia</option>
													<option value="27">China</option>
													<option value="28">India</option>
													<option value="29">Singapore</option>
												</optgroup>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Select position: <span class="text-danger">*</span></label>
											<select name="position" data-placeholder="Select position" class="select">
												<option></option>
												<optgroup label="Developer Relations">
													<option value="1">Sales Engineer</option>
													<option value="2">Ads Solutions Consultant</option>
													<option value="3">Technical Solutions Consultant</option>
													<option value="4">Business Intern</option>
												</optgroup>

												<optgroup label="Engineering &amp; Design">
													<option value="5">Interaction Designer</option>
													<option value="6">Technical Program Manager</option>
													<option value="7">Software Engineer</option>
													<option value="8">Information Security Engineer</option>
												</optgroup>

												<optgroup label="Marketing &amp; Communications">
													<option value="13">Media Outreach Manager</option>
													<option value="14">Research Manager</option>
													<option value="15">Marketing Intern</option>
													<option value="16">Business Intern</option>
												</optgroup>

												<optgroup label="Sales Operations">
													<option value="17">Sales Operations Analyst</option>
													<option value="18">Technology Product Manager</option>
													<option value="19">Product Expert</option>
													<option value="20">Sales Insights Analyst</option>
													<option value="21">Customer Operations Analyst</option>
												</optgroup>
											</select>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Product Name: <span class="text-danger">*</span></label>
											<input type="text" name="name" class="form-control required" placeholder="Product Name">
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Model: <span class="text-danger">*</span></label>
											<input type="text" name="model" class="form-control required" placeholder="Model">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Price: <span class="text-danger">*</span></label>
											<input type="text" name="price" class="form-control required" placeholder="Price">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Quantity:</label>
											<input type="text" name="qty" class="form-control" placeholder="Quantity">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Quantity:</label>
											<input type="text" name="qty" class="form-control" placeholder="Quantity">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>YouTube Link:</label>
											<input type="text" name="youtube_link" class="form-control" placeholder="YouTube Link">
										</div>
									</div>
									
								</div>
								<div class="row">
									<div class="form-group">
										<label>Description <span class="text-danger">*</span></label>
										<textarea name="editor-full" id="editor-full" rows="4" cols="4" class="required">
										<h2>Apollo 11</h2>
										<div class="pull-right" style="margin-left: 20px;"><img alt="Saturn V carrying Apollo 11" class="right" src="http://c.cksource.com/a/1/img/sample.jpg"></div>

										<p><strong>Apollo 11</strong> was the spaceflight that landed the first humans, Americans <a href="#">Neil Armstrong</a> and <a href="#">Buzz Aldrin</a>, on the Moon on July 20, 1969, at 20:18 UTC. Armstrong became the first to step onto the lunar surface 6 hours later on July 21 at 02:56 UTC.</p>

										<p class="mb-15">Armstrong spent about <s>three and a half</s> two and a half hours outside the spacecraft, Aldrin slightly less; and together they collected 47.5 pounds (21.5&nbsp;kg) of lunar material for return to Earth. A third member of the mission, <a href="#">Michael Collins</a>, piloted the <a href="#">command</a> spacecraft alone in lunar orbit until Armstrong and Aldrin returned to it for the trip back to Earth.</p>

										<h5 class="text-semibold">Technical details</h5>
										<p>Launched by a <strong>Saturn V</strong> rocket from <a href="#">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="#">NASA</a>'s Apollo program. The Apollo spacecraft had three parts:</p>
										<ol>
											<li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
											<li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
											<li><strong>Lunar Module</strong> for landing on the Moon.</li>
										</ol>
										<p class="mb-15">After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and landed in the <a href="#">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command Module, they returned to Earth and landed in the <a href="#">Pacific Ocean</a> on July 24.</p>

										<h5 class="text-semibold">Misson crew</h5>

										<table class="table table-bordered" style="width: 100%">
											<thead>
												<tr>
													<th>Position</th>
													<th>Astronaut</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Commander</td>
													<td>Neil A. Armstrong</td>
												</tr>
												<tr>
													<td>Command Module Pilot</td>
													<td>Michael Collins</td>
												</tr>
												<tr>
													<td>Lunar Module Pilot</td>
													<td>Edwin "Buzz" E. Aldrin, Jr.</td>
												</tr>
											</tbody>
										</table>

										Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>
						            </textarea>
									</div>
								</div>
							</fieldset>

							<h6>Links</h6>
							<fieldset>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Manufacturer:</label>
		                                    <select name="university-country" data-placeholder="Manufacturer ..." class="select">
		                                        <option></option> 
		                                        <option value="1">None</option> 
		                                        <option value="1">Apple</option> 
		                                        <option value="2">Samsung</option> 
		                                        <option value="3">Oppo</option> 
		                                        <option value="4">Vivo</option> 
		                                    </select>
	                                    </div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Categories:</label>
		                                    <select name="university-country" data-placeholder="Categories ..." class="select">
		                                        <option></option> 
		                                        <option value="1">Accessories > Charger</option> 
		                                        <option value="2">Computer & Accessories > All computer Accessories </option> 
		                                        <option value="3">Computer & Accessories > Laptop, Desktop and printers </option> 
		                                    </select>
	                                    </div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Related Products:</label>
		                                    <select name="university-country" data-placeholder="Manufacturer ..." class="select">
		                                        <option></option> 
		                                        <option value="1">None</option> 
		                                        <option value="1">Apple</option> 
		                                        <option value="2">Samsung</option> 
		                                        <option value="3">Oppo</option> 
		                                        <option value="4">Vivo</option> 
		                                    </select>
	                                    </div>
									</div>
								</div>
							</fieldset>

							<h6>Option</h6>
							<fieldset>
								<div class="row">
									<div class="col-md-12">
										<div class="panel panel-flat">
											<div class="panel-heading">
												<h6 class="panel-title">Select Options</h6>
											</div>

											<div class="panel-body">
												<div class="tabbable">
													<ul class="nav nav-tabs nav-justified">
														<li class="active"><a href="#basic-justified-tab1" data-toggle="tab">Select</a></li>
														<li><a href="#basic-justified-tab2" data-toggle="tab">CheckBox</a></li>
														<li><a href="#basic-justified-tab3" data-toggle="tab">Radio</a></li>
													</ul>

													<div class="tab-content">
														<div class="tab-pane active" id="basic-justified-tab1">
															<div class="row mb-5">
																<div class="col-md-12">
																	<div class="form-group">
																		<table class="table table-bordered">
																				<thead>
																					<th>Option Value</th>
																					<th>Quantity</th>
																					<th>Price</th>
																					<th>Action</th>
																				</thead>
																				<tbody>
																					<td>
																						<select name="red" class="form-control">
																							<option value="red">Red</option>
																							<option value="blue">Blue</option>
																							<option value="white">White</option>
																						</select>
																					</td>
																					<td>
																						<input type="text" name="sel_qty" value="" class="form-control" placeholder="Qty">
																					</td>
																					<td>
																						<input type="text" name="sel_price" value="" class="form-control" placeholder="Price">
																					</td>
																					<td>
																						<i class="fa fa fa-plus-circle text-danger fa-2x" onclick="addOption(this)" title="Add Option"></i>
																					</td>
																				</tbody>
																		</table>
																	</div>
																</div>
															</div>
														</div>

														<div class="tab-pane" id="basic-justified-tab2">
															<div class="row mb-5">
																<div class="col-md-12">
																	<div class="form-group">
																		<table class="table table-bordered">
																				<thead>
																					<th>Option Value</th>
																					<th>Quantity</th>
																					<th>Price</th>
																					<th>Action</th>
																				</thead>
																				<tbody>
																					<td>
																						<select name="red" class="form-control">
																							<option value="red">Red</option>
																							<option value="blue">Blue</option>
																							<option value="white">White</option>
																						</select>
																					</td>
																					<td>
																						<input type="text" name="sel_qty" value="" class="form-control" placeholder="Qty">
																					</td>
																					<td>
																						<input type="text" name="sel_price" value="" class="form-control" placeholder="Price">
																					</td>
																					<td>
																						<i class="fa fa fa-plus-circle text-danger fa-2x" onclick="addOption(this)" title="Add Option"></i>
																					</td>
																				</tbody>
																		</table>
																	</div>
																</div>
															</div>
														</div>

														<div class="tab-pane" id="basic-justified-tab3">
															<div class="row mb-5">
																<div class="col-md-12">
																	<div class="form-group">
																		<table class="table table-bordered">
																				<thead>
																					<th>Option Value</th>
																					<th>Quantity</th>
																					<th>Price</th>
																					<th>Action</th>
																				</thead>
																				<tbody>
																					<td>
																						<select name="red" class="form-control">
																							<option value="red">Small</option>
																							<option value="blue">Medium</option>
																							<option value="white">Large</option>
																						</select>
																					</td>
																					<td>
																						<input type="text" name="sel_qty" value="" class="form-control" placeholder="Qty">
																					</td>
																					<td>
																						<input type="text" name="sel_price" value="" class="form-control" placeholder="Price">
																					</td>
																					<td>
																						<i class="fa fa fa-plus-circle text-danger fa-2x" onclick="addOption(this)" title="Add Option"></i>
																					</td>
																				</tbody>
																		</table>
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
							</fieldset>

							<h6>Additional info</h6>
							<fieldset>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="display-block">Applicant resume:</label>
		                                    <input type="file" name="resume" class="file-styled">
		                                    <span class="help-block">Accepted formats: pdf, doc. Max file size 2Mb</span>
	                                    </div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Where did you find us? <span class="text-danger">*</span></label>
		                                    <select name="source" data-placeholder="Choose an option..." class="select-simple required">
		                                        <option></option> 
		                                        <option value="monster">Monster.com</option> 
		                                        <option value="linkedin">LinkedIn</option> 
		                                        <option value="google">Google</option> 
		                                        <option value="adwords">Google AdWords</option> 
		                                        <option value="other">Other source</option>
		                                    </select>
	                                    </div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Availability: <span class="text-danger">*</span></label>
											<div class="radio">
												<label>
													<input type="radio" name="availability" class="styled required">
													Immediately
												</label>
											</div>

											<div class="radio">
												<label>
													<input type="radio" name="availability" class="styled">
													1 - 2 weeks
												</label>
											</div>

											<div class="radio">
												<label>
													<input type="radio" name="availability" class="styled">
													3 - 4 weeks
												</label>
											</div>

											<div class="radio">
												<label>
													<input type="radio" name="availability" class="styled">
													More than 1 month
												</label>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label>Additional information:</label>
		                                    <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
	                                    </div>
									</div>
								</div>
							</fieldset>
						</form>
		            </div>
		            <!-- /wizard with validation -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

@endsection
@section('script')
<!-- Theme JS files -->
<script type="text/javascript" src="{{ asset('assets/js/plugins/forms/wizards/steps.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/js/plugins/forms/selects/select2.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('assets/js/core/libraries/jasny_bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/forms/validation/validate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/extensions/cookie.js') }}"></script>

<script type="text/javascript" src="{{ asset('assets/js/pages/wizard_steps.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/admin/product.js') }}"></script>
@endsection