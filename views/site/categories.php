<?php include('include/header.php'); ?>

	<!-- main -->
	<section id="main" class="clearfix category-page">
		<div class="container">

			<div class="banner">
			
				<!-- banner-form -->
				<div class="banner-form banner-form-full">
					<form action="#">
						<!-- category-change -->
						<div class="dropdown category-dropdown">						
							<a data-toggle="dropdown" href="#"><span class="change-text">Select Category</span> <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu category-change">
								<li><a href="#">Fashion & Beauty</a></li>
								<li><a href="#">Cars & Vehicles</a></li>
								<li><a href="#">Electronics & Gedgets</a></li>
								<li><a href="#">Real Estate</a></li>
								<li><a href="#">Sports & Games</a></li>
							</ul>								
						</div><!-- category-change -->

						<!-- language-dropdown -->
						<div class="dropdown category-dropdown language-dropdown ">						
							<a data-toggle="dropdown" href="#"><span class="change-text">United Kingdom</span> <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu  language-change">
								<li><a href="#">United Kingdom</a></li>
								<li><a href="#">United States</a></li>
								<li><a href="#">China</a></li>
								<li><a href="#">Russia</a></li>
							</ul>								
						</div><!-- language-dropdown -->
					
						<input type="text" class="form-control" placeholder="Type Your key word">
						<button type="submit" class="form-control" value="Search">Search</button>
					</form>
				</div><!-- banner-form -->
			</div>
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Jobs</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">Accounting & Finance</h2>
			</div>
			
	
			<div class="category-info">	
				<div class="row">
					<!-- accordion-->
					<div class="col-md-3 col-sm-4">
						<div class="accordion">
							<!-- panel-group -->
							<div class="panel-group" id="accordion">
							 	
								<!-- panel -->
								<div class="panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#accordion-one">
											<h4 class="panel-title">Categories<span class="pull-right"><i class="fa fa-minus"></i></span></h4>
										</a>
									</div><!-- panel-heading -->

									<div id="accordion-one" class="panel-collapse collapse in">
										<!-- panel-body -->
										<div class="panel-body">
											<a href="#">Jobs</a>
											<ul>
												<li><a href="#">&raquo; Accounting<span>(129)</span></a></li>
												<li><a href="#">&raquo; Banking & Finance<span>(188)</span></a></li>
												<li><a href="#">&raquo; Business Development<span>(214)</span></a></li>
												<li><a href="#">&raquo; Construction<span>(23)</span></a></li>
												<li><a href="#">&raquo; HR & Recruitment<span>(76)</span></a></li>
												<li><a href="#">&raquo; Information Technology<span>(92)</span></a></li>
												<li><a href="#">&raquo; Marketing & Advertising<span>(133)</span></a></li>
												<li><a href="#">&raquo; Public Relations<span>(129)</span></a></li>
											</ul>
											<a href="#">Housing</a><br/>
											<a href="#">Investments</a><br/>
											<a href="#">Education</a><br/>
											<a href="#">Expatriate Guide</a><br/>
											<a href="#">Initiatives</a>

										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<!-- panel -->
								<div class="panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#accordion-two">
											<h4 class="panel-title">Filter<span class="pull-right"><i class="fa fa-minus"></i></span></h4>
										</a>
									</div><!-- panel-heading -->

									<div id="accordion-two" class="panel-collapse collapse in">
										<!-- panel-body -->
										<div class="panel-body">
											<a href="#">Career Level</a>
											<label for="new"><input type="checkbox" name="new" id="new"> Student/Intern</label>
											<label for="used"><input type="checkbox" name="used" id="used"> Junior</label>
											<label for="used"><input type="checkbox" name="used" id="used"> Mid-level</label>
											<label for="used"><input type="checkbox" name="used" id="used"> Senior</label>
											<label for="used"><input type="checkbox" name="used" id="used"> Executive/Director</label>
											<br />
											<a href="#">Minimum Experience</a>
											<label for="new"><input type="checkbox" name="new" id="new"> 1-2 Years</label>
											<label for="used"><input type="checkbox" name="used" id="used"> 2-5 Years</label>
											<label for="used"><input type="checkbox" name="used" id="used"> 5-10 Years</label>
											<label for="used"><input type="checkbox" name="used" id="used"> 10+ Years</label>
											<br />
											<a href="#">Employment Type</a>
											<label for="new"><input type="checkbox" name="new" id="new"> Full Time</label>
											<label for="used"><input type="checkbox" name="used" id="used"> Part Time</label>
											<label for="used"><input type="checkbox" name="used" id="used"> Contract</label>
											<label for="used"><input type="checkbox" name="used" id="used"> Temporary</label>
											<br />
											<a href="#">Salary</a>
											<div class="price-range"><!--price-range-->
												<div class="price">
													<span>$100 - <strong>$700</strong></span>
													<div class="dropdown category-dropdown pull-right">	
														<a data-toggle="dropdown" href="#"><span class="change-text">USD</span><i class="fa fa-caret-square-o-down"></i></a>
														<ul class="dropdown-menu category-change">
															<li><a href="#">USD</a></li>
															<li><a href="#">AUD</a></li>
															<li><a href="#">EUR</a></li>
															<li><a href="#">GBP</a></li>
															<li><a href="#">JPY</a></li>
														</ul>								
													</div><!-- category-change -->													
													 <input type="text"value="" data-slider-min="0" data-slider-max="700" data-slider-step="5" data-slider-value="[250,450]" id="price" ><br />
												</div>
												<br />
												<button value="Search" class="btn btn-primary btn-block" type="submit">Search</button>
											</div><!--/price-range-->
										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

								<div class="advertisement text-center">
										<a href="#"><img src="http://placehold.it/300x250" alt="" class="img-responsive"></a>
									</div> 
							 </div><!-- panel-group -->
						</div>
					</div><!-- accordion-->

					<!-- recommended-ads -->
					<div class="col-sm-9 col-md-9">				
						<div class="section recommended-ads">
							<!-- featured-top -->
							<div class="featured-top">
								<h4>Recommended Ads for You</h4>
								<div class="dropdown pull-right">
								
								<!-- category-change -->
								<div class="dropdown category-dropdown">
									<h5>Sort by:</h5>						
									<a data-toggle="dropdown" href="#"><span class="change-text">Popular</span><i class="fa fa-caret-square-o-down"></i></a>
									<ul class="dropdown-menu category-change">
										<li><a href="#">Featured</a></li>
										<li><a href="#">Newest</a></li>
										<li><a href="#">All</a></li>
										<li><a href="#">Bestselling</a></li>
									</ul>								
								</div><!-- category-change -->														
								</div>							
							</div><!-- featured-top -->	

							<!-- ad-item -->
							<div class="ad-item row">
								<!-- item-image -->
								<div class="item-image-box col-sm-4">
									<div class="item-image">
										<a href="details.html"><img src="images/listing/1.jpg" alt="Image" class="img-responsive"></a>
										<span class="featured-ad">Featured</span>
									</div><!-- item-image -->
								</div>
								
								<!-- rending-text -->
								<div class="item-info col-sm-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h4 class="item-title"><a href="#">Accountant-Reconciliation</a></h4>
										<div class="item-cat">
											<span> Accountant : Semi qualified (CA inter/CWA/ACCA/CPA ) -required urgently.1) Indian male or Female wit... </span>
										</div>										
									</div><!-- ad-info -->
									
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">Date: 07/07/2016</a></span>
										</div>										
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
											<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
										</div><!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->

							<!-- ad-item -->
							<div class="ad-item row">
								<div class="item-image-box col-sm-4">
									<!-- item-image -->
									<div class="item-image">
										<a href="details.html"><img src="images/listing/1.jpg" alt="Image" class="img-responsive"></a>
										<span class="featured-ad">Featured</span>
										<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
									</div><!-- item-image -->
								</div><!-- item-image-box -->
								
								<!-- rending-text -->
								<div class="item-info col-sm-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h4 class="item-title"><a href="#"> Accounts Assistant / Junior Accountant </a></h4>
										<div class="item-cat">
											<span> Accounting assistant with knowledge of accounting concepts and experience in using accounting softwa... /span>
										</div>										
									</div><!-- ad-info -->
									
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
											<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
										</div>									
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
											<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
										</div><!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->
							
							<!-- ad-item -->
							<div class="ad-item row">
								<!-- item-image -->
								<div class="item-image-box col-sm-4">
									<div class="item-image">
										<a href="details.html"><img src="images/listing/1.jpg" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>
								
								<!-- rending-text -->
								<div class="item-info col-sm-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h4 class="item-title"><a href="#">Accountant-Reconciliation</a></h4>
										<div class="item-cat">
											<span> Accountant : Semi qualified (CA inter/CWA/ACCA/CPA ) -required urgently.1) Indian male or Female wit... </span>
										</div>										
									</div><!-- ad-info -->
									
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">Date: 07/07/2016</a></span>
										</div>										
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
											<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
										</div><!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->

							<!-- ad-item -->
							<div class="ad-item row">
								<!-- item-image -->
								<div class="item-image-box col-sm-4">
									<div class="item-image">
										<a href="details.html"><img src="images/listing/1.jpg" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>
								
								<!-- rending-text -->
								<div class="item-info col-sm-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h4 class="item-title"><a href="#">Accountant-Reconciliation</a></h4>
										<div class="item-cat">
											<span> Accountant : Semi qualified (CA inter/CWA/ACCA/CPA ) -required urgently.1) Indian male or Female wit... </span>
										</div>										
									</div><!-- ad-info -->
									
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">Date: 07/07/2016</a></span>
										</div>										
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
											<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
										</div><!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->

							<!-- ad-item -->
							<div class="ad-item row">
								<!-- item-image -->
								<div class="item-image-box col-sm-4">
									<div class="item-image">
										<a href="details.html"><img src="images/listing/1.jpg" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>
								
								<!-- rending-text -->
								<div class="item-info col-sm-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h4 class="item-title"><a href="#">Accountant-Reconciliation</a></h4>
										<div class="item-cat">
											<span> Accountant : Semi qualified (CA inter/CWA/ACCA/CPA ) -required urgently.1) Indian male or Female wit... </span>
										</div>										
									</div><!-- ad-info -->
									
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">Date: 07/07/2016</a></span>
										</div>										
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
											<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
										</div><!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->

							<!-- ad-item -->
							<div class="ad-item row">
								<!-- item-image -->
								<div class="item-image-box col-sm-4">
									<div class="item-image">
										<a href="details.html"><img src="images/listing/1.jpg" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>
								
								<!-- rending-text -->
								<div class="item-info col-sm-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h4 class="item-title"><a href="#">Accountant-Reconciliation</a></h4>
										<div class="item-cat">
											<span> Accountant : Semi qualified (CA inter/CWA/ACCA/CPA ) -required urgently.1) Indian male or Female wit... </span>
										</div>										
									</div><!-- ad-info -->
									
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">Date: 07/07/2016</a></span>
										</div>										
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
											<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
										</div><!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->

							<!-- ad-item -->
							<div class="ad-item row">
								<!-- item-image -->
								<div class="item-image-box col-sm-4">
									<div class="item-image">
										<a href="details.html"><img src="images/listing/1.jpg" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>
								
								<!-- rending-text -->
								<div class="item-info col-sm-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h4 class="item-title"><a href="#">Accountant-Reconciliation</a></h4>
										<div class="item-cat">
											<span> Accountant : Semi qualified (CA inter/CWA/ACCA/CPA ) -required urgently.1) Indian male or Female wit... </span>
										</div>										
									</div><!-- ad-info -->
									
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">Date: 07/07/2016</a></span>
										</div>										
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
											<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
										</div><!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->

							<!-- ad-item -->
							<div class="ad-item row">
								<!-- item-image -->
								<div class="item-image-box col-sm-4">
									<div class="item-image">
										<a href="details.html"><img src="images/listing/1.jpg" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>
								
								<!-- rending-text -->
								<div class="item-info col-sm-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h4 class="item-title"><a href="#">Accountant-Reconciliation</a></h4>
										<div class="item-cat">
											<span> Accountant : Semi qualified (CA inter/CWA/ACCA/CPA ) -required urgently.1) Indian male or Female wit... </span>
										</div>										
									</div><!-- ad-info -->
									
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">Date: 07/07/2016</a></span>
										</div>										
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
											<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
										</div><!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->
							
							
							
							<!-- pagination  -->
							<div class="text-center">
								<ul class="pagination ">
									<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
									<li><a href="#">1</a></li>
									<li class="active"><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">...</a></li>
									<li><a href="#">10</a></li>
									<li><a href="#">20</a></li>
									<li><a href="#">30</a></li>
									<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>			
								</ul>
							</div><!-- pagination  -->					
						</div>
					</div><!-- recommended-ads -->

				</div>	
			</div>
		</div><!-- container -->
	</section><!-- main -->
	
	
	
<?php include('include/footer.php'); ?>