<style>
	.home-header {
		position: relative;
		/* Ensure the pseudo-element is positioned relative to this container */
		background-image: url('uploads/matrimonial_img/banner/wedding_image.webp');
		background-size: cover;
		background-position: top -350px center;
		/* Adjust position as needed */
		background-repeat: no-repeat;
		height: 500px;
		color: white;
		text-align: center;
		display: flex;
		align-items: center;
		justify-content: center;
		overflow: hidden;
		/* Ensure no overflow from the pseudo-element */
	}

	.home-header::before {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: rgba(0, 0, 0, 0.5);
		/* Semi-transparent black overlay */
		z-index: 1;
		/* Place overlay above the image but below the content */
	}

	.home-header>* {
		position: relative;
		/* Ensure text and other content are above the overlay */
		z-index: 2;
	}


	.custom-select-wrapper {
		position: relative;
	}

	.custom-select {
		display: block;
		width: 100%;
		height: calc(2.25rem + 2px);
		padding: 0.375rem 0.75rem;
		font-size: 1rem;
		line-height: 1.5;
		color: #495057;
		background-color: #fff;
		border: 1px solid #ced4da;
		border-radius: 0.375rem;
	}

	.searchnow {
		background-color: #007bff;
		border: none;
		color: white;
	}

	.mega-n-border img {
		max-width: 100%;
		height: auto;
	}

	.progress-wrap {
		position: fixed;
		bottom: 20px;
		right: 20px;
	}

	.search-section {
		display: flex;
		align-items: center;
	}

	.border-img {
		background-image: url(uploads/matrimonial_img/images/mega-border-image.png);
		background-size: cover;
		position: relative;
		height: 436px;
		width: 736px;
		right: 28px;
		z-index: 1;
	}

	.line-dot ul li {
		background-image: url(uploads/matrimonial_img/images/ellipse.png);
		background-repeat: no-repeat;
		height: 45px;
		position: relative;
		left: 10px;
	}
</style>
</head>

<body>

	<div id="wrapper">
		<div class="home-header">
			<div class="text-center">
				<h1 class="display-4">FIND YOUR PERFECT LIFE PARTNERS</h1>
				<p class="lead">OVER 1200+ WEDDING PARTNERS FOR YOUR SPECIAL DATE &amp; FIND THE PERFECT VENUE &amp;
					SAVE YOUR DATE.</p>
			</div>
		</div>
	</div>
	<div class="container" style="position: relative;top: -52px; z-index:2;">
		<div class="row">
			<div class="col-12">
				<!-- Find search section -->
				<div class="bg-light p-4 rounded shadow-lg">
					<form method="post" name="search_form" id="search_form">
						<div class="row">
							<!-- Gender Select -->
							<div class="col-md-2 col-sm-6">
								<div class="form-floating">
									<select name="gender" id="Looking" class="form-select">
										<option value="Female" title="Bride" selected>Bride</option>
										<option value="Male" title="Groom">Groom</option>
									</select>
									<label for="Looking">Looking For</label>
								</div>
							</div>

							<!-- From Age Select -->
							<div class="col-md-2 col-sm-6">
								<div class="form-floating">
									<select name="from_age" id="agefrom" class="form-select">
										<!-- Add age options here -->
										<option value="18" title="18 Year">18 Year</option>
										<!-- Add more options as needed -->
										<option value="65" title="65 Year">65 Year</option>
									</select>
									<label for="agefrom">From Age</label>
								</div>
							</div>

							<!-- To Age Label -->
							<div class="col-md-1 d-flex align-items-center justify-content-center">
								<p class="mb-0">to</p>
							</div>

							<!-- To Age Select -->
							<div class="col-md-2 col-sm-6">
								<div class="form-floating">
									<select name="to_age" id="ageto" class="form-select">
										<!-- Add age options here -->
										<option value="18" title="18 Year">18 Year</option>
										<!-- Add more options as needed -->
										<option value="65" title="65 Year">65 Year</option>
									</select>
									<label for="ageto">To Age</label>
								</div>
							</div>

							<!-- Religion Select -->
							<div class="col-md-3 col-sm-6">
								<div class="form-floating">
									<select name="religion[]" id="Religion" class="form-select" multiple
										aria-label="Religion">
										<option value="" selected>Doesn't matter</option>
										<option value="1" title="Hindu">Hindu</option>
										<!-- Add more options as needed -->
									</select>
									<label for="Religion">Religion</label>
								</div>
							</div>


							<!-- Search Button -->
							<div class="col-md-2 col-sm-6 d-flex align-items-center">
								<button type="button" class="btn btn-primary w-100 h-100" id="submit-btn"
									onclick="find_match()">Search</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--hover box-->
	<div class="container hidden-xs hidden-sm">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center mt-7">
				<div class="row">
					<h2 class="calibri-Bold-font mega-n3">FIND YOUR SPECIAL <span class="mega-n4"><SPAN
								CLASS="MEGA-N4">SOMEONE</span></h2>
					<p class="calibri-regular-font mega-n5 f-15">SIMPLE WEDDING PLANNING TOOLS TO HELP YOU STAY ON
						TRACK.</p>
					<div class="mega-n-border">
						<img src="uploads/matrimonial_img/images/mega-n-border.png" alt="">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-xs-12 col-sm-4 text-center">
						<div class="box-step">
							<div class="step-number">
								<p class="text-center number-count Poppins-Semi-Bold">1</p>
							</div>
							<i class="fas fa-sign-in-alt fa-new"></i>
							<p class="Poppins-Medium f-19">Sign up</p>
						</div>
						<p class="p-sign-up Poppins-Regular f-15">
							Register for free & put up your Matrimony Profile </p>
					</div>
					<div class="col-md-4 col-xs-12 col-sm-4 text-center">
						<div class="box-step">
							<div class="step-number">
								<p class="text-center number-count Poppins-Semi-Bold">2</p>
							</div>
							<i class="fas fa-users fa-new"></i>
							<p class="Poppins-Medium f-19">Contact</p>
						</div>
						<p class="p-sign-up Poppins-Regular f-15">
							Select & Connect with Matches you like </p>
					</div>
					<div class="col-md-4 col-xs-12 col-sm-4 text-center">
						<div class="box-step">
							<div class="step-number">
								<p class="text-center number-count Poppins-Semi-Bold">3</p>
							</div>
							<i class="fas fa-comments fa-new"></i>
							<p class="Poppins-Medium f-19">Interact</p>
						</div>
						<p class="p-sign-up Poppins-Regular f-15">
							Become a Premium Member & Start a Conversation </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 mt-10">
						<div class="mega-n-btn1">
							<a href="matrimonial_form" class="Poppins-Medium color-f f-16">Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END hover box-->
	<!--wedding bendor section start-->
	<div class="weding-vendor mt-6 hidden-xs hidden-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="border-img">
						<img src="uploads/matrimonial_img/front_end_new/images/2.png" alt=""
							class="img-responsive c1-img">
						<div class="border-in-img">
							<img src="uploads/matrimonial_img/other_banner/0362be0ee799b70f5d5dd7ad1b36150f.jpg"
								alt="wedding-vendor" class="img-responsive border-inner-img">

						</div>
						<img src="uploads/matrimonial_img/front_end_new/images/1.png" alt="wedding-vendor"
							class="img-responsive c2-img">
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="mena-n9">
						<p class="calibri-Bold-font color-f mega-n7">Are you trying our planning tools ? </p>
						<p class="Poppins-Medium mega-n8">
							Best Bridal Makeup, Photographer, Pre-Wedding , Wedding Video Shoot, Rental Cars,
							Decorators with complete Marriage Solutions. </p>
						<img src="uploads/matrimonial_img/front_end_new/images/logo-2-n.png" alt="wedding-vendor"
							class="img-responsive logo-2n">
						<div class="mega-n-btn2">
							<a href="wedding-vendor.html" class="mega-n11 Poppins-Medium">Start Planning Today</a>
						</div>
						<img src="uploads/matrimonial_img/front_end_new/images/bottom-img.png" alt="wedding-vendor"
							class="img-responsive img-bottom">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--wedding bendor section End-->

	<!-- Happy Couple Section -->
	<div class="container d-none d-md-block">
		<div class="text-center my-5">
			<h2 class="display-4">JUST GET MARRIED HAPPY <span class="text-primary">COUPLE</span></h2>
			<p class="lead">SIMPLE WEDDING PLANNING TOOLS TO HELP YOU STAY ON TRACK.</p>
			<div class="mega-n-border">
				<img src="uploads/matrimonial_img/images/mega-n-border.png" alt="">
			</div>
		</div>
		<div class="row my-5">
			<div class="col-md-4 mb-4">
				<div class="vendor-main">
					<div class="vendor">
						<a href="success-story/details/7.html">
							<img src="uploads/matrimonial_img/success-story/5362c1448e1f617d50ae038bab95c9b4.png" alt=""
								class="img-fluid mega-c1">
						</a>
						<div class="c1-name">
							<p class="Poppins-Semi-Bold f-18 c1-n1">DR DINESH GUPTA & DR SARITA GUPTA</p>
						</div>
					</div>
					<div class="c1-t1">
						<p class="Poppins-Regular f-15 c1-t2">I first saw his profile on the recommendation list and he
							instantly caught my eye. The way he had described everything in this profile, the attention
							to details really impressed me. I then initiated the talk and we decided to meet after two
							months of talking. In the first m....<a href="success-story/details/6.html"
								class="mega-rm Poppins-Medium">Read More</a> </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="vendor-main">
					<div class="vendor">
						<a href="success-story/details/7.html">
							<img src="uploads/matrimonial_img/success-story/5939e89bb545feece836dfc63a76d286.jpg" alt=""
								class="img-fluid mega-c1">
						</a>
						<div class="c1-name">
							<p class="Poppins-Semi-Bold f-18 c1-n1">Mukesh Teli & Seema Gupta</p>
						</div>
					</div>
					<div class="c1-t1">
						<p class="Poppins-Regular f-15 c1-t2">I first saw his profile on the recommendation list and he
							instantly caught my eye. The way he had described everything in this profile, the attention
							to details really impressed me. I then initiated the talk and we decided to meet after two
							months of talking. In the first m....<a href="success-story/details/6.html"
								class="mega-rm Poppins-Medium">Read More</a> </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="vendor-main">
					<div class="vendor">
						<a href="success-story/details/7.html">
							<img src="uploads/matrimonial_img/success-story/48985f81796f5fd96f04a687b6d5fdb2.jpg" alt=""
								class="img-fluid mega-c1">
						</a>
						<div class="c1-name">
							<p class="Poppins-Semi-Bold f-18 c1-n1">Nilesh gupta & Kiran gupta</p>
						</div>
					</div>
					<div class="c1-t1">
						<p class="Poppins-Regular f-15 c1-t2">I first saw his profile on the recommendation list and he
							instantly caught my eye. The way he had described everything in this profile, the attention
							to details really impressed me. I then initiated the talk and we decided to meet after two
							months of talking. In the first m....<a href="success-story/details/6.html"
								class="mega-rm Poppins-Medium">Read More</a> </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Mobile App Section -->
	<!--mobile app section start-->
	<div class="app-develop margin-top-50 hidden-sm hidden-xs pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12 col-sm-12">
					<p class="just-app calibri-Bold-font">Happiness is just an app away!</p>
					<p class="just-app-p Poppins-Medium f-16">The next generation of matchmaking is here!<br>
						Find your right match with shaadi.telisahusamaj.in with over thousands <br>
						downloads Search Smarter, Match Faster </p>
					<p class="app-b color-31 Poppins-Medium f-16 mt-5"> Simple &nbsp; | &nbsp; Fast &nbsp; | &nbsp;
						Convenient &nbsp;| &nbsp;Safe &amp; Secure</p>
					<div class="line-dot mt-6">
						<ul>
							<li class="margin-top-10"><a href="javascript:void(0);"
									class="Poppins-Semi-Bold f-18 color-31">Easy registration &amp; login</a></li>
							<li class="mt-2"><a href="javascript:void(0);" class="Poppins-Semi-Bold f-18 color-31">Quick
									matches &amp; search criteria</a></li>
							<li class="mt-2"><a href="javascript:void(0);" class="Poppins-Semi-Bold f-18 color-31">Find
									your perfect better half</a></li>
						</ul>
					</div>
					<div class="text-left app-av-img">
						<div class="row">
							<div class="col-md-5 col-sm-4">

								<a target='_blank' href="https://www.google.co.in/android">
									<img src="uploads/matrimonial_img/front_end_new/images/app-store.png"
										class="img-responsive mega-n-app1" alt="Android App">
								</a>

							</div>
							<div class="col-md-5 col-sm-4">

								<a target='_blank' href="https://www.google.co.in/ios">
									<img src="uploads/matrimonial_img/front_end_new/images/app-store2.png"
										class="img-responsive mega-n-app2" alt="iOS App">
								</a>

							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-12 col-sm-12">
					<img src="uploads/matrimonial_img/other_banner/3dc7d024852706fa349beb389f55607a.jpg"
						class="img-lap-top img-responsive" alt="">

				</div>
			</div>
		</div>
	</div>

	<!-- Wedding Planning Tools -->
	<!--WEDDING PLANNING TOOLS section start-->

	<div class="weding-vendor-wedding mt-6">
		<div class="container">
			<div class="row mt-2 row-cstm">
				<div class="col-md-12 col-sm-12 col-xs-12 text-center">
					<h2 class="calibri-Bold-font mega-n3 f-40" style="color:#fff!important;">Are you trying our planning
						tools ?</h2>
					<p class="calibri-regular-font mega-n5 color-f f-15 new-wedding-t">Teli Samaj Yuva foundation is
						emerging as one of the India’s most trusted brand for match making services and remarkably known
						for world’s most deserving matchmaking website.</p>
					<div class="mega-n-border text-center">
						<img src="uploads/matrimonial_img/front_end_new/images/wedding-white.png" alt=""
							class="img-responsive">
					</div>
				</div>
			</div>

			<div class="row mt-6" style="margin-bottom:30px;">
				<div class="col-md-4 col-xs-12 col-sm-4">
					<div class="vendor-main-wedding">
						<div class="vendor-wedding text-center">
							<img src="uploads/matrimonial_img/reason_why_to_choose/742809224d3f1e5cbb851fa2e72d05e0.png"
								alt="10 Years  Experience" class="img-responsive img-center-wedding" />
							<div class="c1-name-wedding">
								<p class="f-14 c1-n1-wedding">10 Years <span class="color-d"> Experience</span></span>
								</p>
							</div>
						</div>
						<div class="c1-t1-wedding">
							<p class="Poppins-Regular f-15 c1-t2-wedding">We have good experience in Samajik Activities.
								Matrimonial is one of the initiative which we are driving successfully an... </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-4">
					<div class="vendor-main-wedding">
						<div class="vendor-wedding text-center">
							<img src="uploads/matrimonial_img/reason_why_to_choose/7e25a23b895937641c9e70b0353d5697.png"
								alt="100+ Real  Weddings" class="img-responsive img-center-wedding" />
							<div class="c1-name-wedding">
								<p class="f-14 c1-n1-wedding">100+ Real <span class="color-d"> Weddings</span></span>
								</p>
							</div>
						</div>
						<div class="c1-t1-wedding">
							<p class="Poppins-Regular f-15 c1-t2-wedding">Every wedding is unique and has a special
								story. Share all the details of your special moments. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 col-sm-4">
					<div class="vendor-main-wedding">
						<div class="vendor-wedding text-center">
							<img src="uploads/matrimonial_img/reason_why_to_choose/da0e8a914a5ee72486212e545b3022e6.png"
								alt="100 +  Wedding Suppliers" class="img-responsive img-center-wedding" />
							<div class="c1-name-wedding">
								<p class="f-14 c1-n1-wedding">100 + <span class="color-d"> Wedding
										Suppliers</span></span>
								</p>
							</div>
						</div>
						<div class="c1-t1-wedding">
							<p class="Poppins-Regular f-15 c1-t2-wedding">100+Wedding Vendor provides discounted price
								for Teli Samaj Members. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--WEDDING PLANNING TOOLS section End-->

	<!--why us section start-->
	<div class="chosen_section">
		<div class="container">
			<div class="row">
				<div class="choose-us-section">
					<div class="row mt-5 row-cstm">
						<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							<h2 class="calibri-Bold-font mega-font-new f-47">MORE REASONS WHY TO <span
									class="mega-font-mobile">CHOOSE US</span></h2>
							<p class="calibri-regular-font mega-n5 f-15 hidden-xs">SIMPLE WEDDING PLANNING TOOLS TO HELP
								YOU STAY ON TRACK.</p>
							<div class="mega-n-border text-center">
								<img src="assets/front_end_new/images/mega-n-border.png" alt="" class="img-responsive">
							</div>
						</div>
					</div>
					<div class="row row-cstm">
						<div class="col-md-12 col-sm-12 col-xs-12 mt-5 pb-5">
							<p class="Poppins-Regular f-17 color-31 w-p1">
								Teli Samaj Shaadi portal is emerging as one of the India’s most trusted brand Teli
								communit's match making services and remarkably known for world’s most deserving
								matchmaking website. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end why us section-->

	<div class="container-fluid shadow-lg">
		<div class="row hidden-xs">
			<div class="col-md-12 col-xs-12 col-sm-12 mt-5 text-center">
				<h4 class="text-center find-section-new calibri-Bold-font color-31 f-31">Browse Matrimonial <span
						class="color-d">Profiles</span> By</h4>
			</div>
		</div>
		<div class="row mt-5 pb-5 hidden-xs ">
			<div class="col-xs-12 col-md-2 col-sm-6 col-x" id="p3">
				<h5 class="f-c">Religion</h5>
				<ul class="list-unstyled quick-links Poppins-Regular f-14">
				</ul>
			</div>
			<div class="col-xs-12 col-md-2 col-sm-6 col-half-offset col-x" id="p5">
				<h5 class="f-c">Caste</h5>
				<ul class="list-unstyled quick-links Poppins-Regular f-14">
				</ul>
			</div>
			<div class="col-xs-12 col-md-2 col-sm-6 col-half-offset col-x" id="p4">
				<h5 class="f-c">Mother Tongue</h5>
				<ul class="list-unstyled quick-links Poppins-Regular f-14">

				</ul>
			</div>
			<div class="col-xs-12 col-md-2 col-sm-6 col-half-offset col-x" id="p1">
				<h5 class="f-c">Country</h5>
				<ul class="list-unstyled quick-links Poppins-Regular f-14">
				</ul>
			</div>
			<div class="col-xs-12 col-md-2 col-sm-6 col-half-offset col-x" id="p2">
				<h5 class="f-c">Cities</h5>
				<ul class="list-unstyled quick-links Poppins-Regular f-14">
				</ul>
			</div>
		</div>