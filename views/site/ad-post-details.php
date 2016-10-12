
<?php include('include/header.php'); ?>

	<!-- main -->
	<section id="main" class="clearfix ad-details-page">
		<div class="container">
		
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Add Dubarah</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">Post Free Ad</h2>
			</div><!-- banner -->

			<div class="adpost-details">
				<div class="row">	
					<div class="col-md-8">
						<form action="#">
							<fieldset>
								<div class="section postdetails">
									<h4>General Information <span class="pull-right">* Mandatory Fields</span></h4>
									<div class="form-group selected-product">
										<ul class="select-category list-inline">
											<li>
												<a href="index.php?r=site/ad-post">
													<span class="select">
														<img src="images/icon/2.png" alt="Images" class="img-responsive">
													</span>
													Jobs
												</a>
											</li>

											<li class="active">
												<a href="#">Accounting</a>
											</li>
										</ul>
										<a class="edit" href="#"><i class="fa fa-pencil"></i>Edit</a>
									</div>
									
									<div class="row form-group add-title">
										<label class="col-sm-3 label-title">Title for your Ad<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" class="form-control" id="text" placeholder="ex, Sony Xperia dual sim 100% brand new ">
										</div>
									</div>
									<div class="row form-group item-description">
										<label class="col-sm-3 label-title">Description<span class="required">*</span></label>
										<div class="col-sm-9">
											<textarea class="form-control" id="textarea" placeholder="Write few lines about your products" rows="8"></textarea>		
										</div>
									</div>

									<div class="row form-group">
										<label class="col-sm-3 label-title">Country<span class="required">*</span></label>
										<div class="col-sm-9">
											<select class="form-control">
												<option value="">Syria</option>
												<option value="">United Arab Emirates</option>
											</select>
										</div>
									</div>

									<div class="row form-group">
										<label class="col-sm-3 label-title">City<span class="required">*</span></label>
										<div class="col-sm-9">
											<select class="form-control">
												<option value="">Damascus</option>
												<option value="">Homs</option>
												<option value="">Aleppo</option>
											</select>
										</div>
									</div>

									<div class="row form-group add-image">
										<label class="col-sm-3 label-title">Photos for your ad <span>(This will be your cover photo )</span> </label>
										<div class="col-sm-9">
											<h5><i class="fa fa-upload" aria-hidden="true"></i>Select Files to Upload / Drag and Drop Files <span>You can add multiple images.</span></h5>
											<div class="upload-section">
												<label class="upload-image" for="upload-image-one">
													<input type="file" id="upload-image-one">
												</label>										

												<label class="upload-image" for="upload-image-two">
													<input type="file" id="upload-image-two">
												</label>											
												<label class="upload-image" for="upload-image-three">
													<input type="file" id="upload-image-three">
												</label>										

												<label class="upload-image" for="upload-imagefour">
													<input type="file" id="upload-imagefour">
												</label>
											</div>	
										</div>
									</div>
																
								</div><!-- section -->
								
								<div class="section seller-info">
									<h4>Ad Details</h4>
									
									<div class="row form-group">
										<label class="col-sm-3 label-title">Employment Type<span class="required">*</span></label>
										<div class="col-sm-9">
											<select class="form-control">
												<option value="">Full Time</option>
												<option value="">Part Time</option>
												<option value="">One Time</option>
											</select>
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Work Experience<span class="required">*</span></label>
										<div class="col-sm-9">
											<select class="form-control">
												<option value="">0-1 Year</option>
												<option value="">1-2 Years</option>
												<option value="">2-5 Years</option>
												<option value="">5-10 Years</option>
												<option value="">10+ Years</option>
											</select>
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Educational Level<span class="required">*</span></label>
										<div class="col-sm-9">
											<select class="form-control">
												<option value="">High School</option>
												<option value="">Secondary School</option>
												<option value="">Bachelors Degree</option>
												<option value="">Master Degree</option>
												<option value="">Phd</option>
											</select>
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">CV Required<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="radio" name="sellerType" value="1" id="Required" checked="">
											<label for="individual">Required</label>
											<input type="radio" name="sellerType" value="0" id="NRequired"> 
											<label for="dealer">Not Required</label>
										</div>
									</div>
									<div class="row form-group">
										<label class="col-sm-3 label-title">Salary</label>
										<div class="col-sm-9">
											<input type="text" name="address" class="form-control" placeholder="">
										</div>
									</div>
								</div><!-- section -->

								<div class="section seller-info">
									<h4>Notifications</h4>
									<p>How do you want to receive requests for this position?</p>
									
									<div class="row form-group">
										<div class="col-sm-9">
											<input type="radio" name="sellerType" value="Email" id="con_email" checked="">
											<label for="con_email">Email</label>
											<input type="radio" name="sellerType" value="phoneCalls" id="con_phone"> 
											<label for="con_phone">Phone Call</label>
											<input type="radio" name="sellerType" value="both" id="con_both"> 
											<label for="con_both">Both</label>
										</div>
										<div class="col-sm-12">
											<br />
											<input type="text" name="address" class="form-control" placeholder="Please add the email ex:john@dubarah.com">
										</div>
									</div>
								</div><!-- section -->
								
								<div class="checkbox section agreement">
									<label for="send">
										<input type="checkbox" name="send" id="send">
										I agree to <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Dubarah.
									</label>
									<button type="submit" class="btn btn-primary">Post Your Ad</button>
								</div><!-- section -->
								
							</fieldset>
						</form><!-- form -->	
					</div>
				

					<!-- quick-rules -->	
					<div class="col-md-4">
						<div class="section quick-rules">
							<h4>Quick rules</h4>
							<p class="lead">Posting an ad on <a href="#">Dubarah.com</a> is free! However, all ads must follow our rules:</p>

							<ul>
								<li>Make sure you post in the correct category.</li>
								<li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
								<li>Do not upload pictures with watermarks.</li>
								<li>Do not post ads containing multiple items unless it's a package deal.</li>
								<li>Do not put your email or phone numbers in the title or description.</li>
								<li>Make sure you post in the correct category.</li>
								<li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
								<li>Do not upload pictures with watermarks.</li>
								<li>Do not post ads containing multiple items unless it's a package deal.</li>
							</ul>
						</div>
					</div><!-- quick-rules -->	
				</div><!-- photos-ad -->				
			</div>	
		</div><!-- container -->
	</section><!-- main -->
	
<?php include('include/footer.php'); ?>