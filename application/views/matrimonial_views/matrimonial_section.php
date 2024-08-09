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
							<a href="register.html" class="Poppins-Medium color-f f-16">Get Started</a>
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
				<div class="bg-light p-4 rounded text-center">
					<a href="success-story/details/6.html">
						<img src="uploads/matrimonial_img/success-story/48985f81796f5fd96f04a687b6d5fdb2.jpg" alt=""
							class="img-fluid">
					</a>
					<p class="h5">DR. KAPIL & KIRAN</p>
					<p>All thanks to this site. We found our perfect match.</p>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="bg-light p-4 rounded text-center">
					<a href="success-story/details/7.html">
						<img src="uploads/matrimonial_img/success-story/9be544dd1db238832fc379a206fa7e52.jpg" alt=""
							class="img-fluid">
					</a>
					<p class="h5">AARON & NINA</p>
					<p>Our love story began here, and we're forever grateful.</p>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="bg-light p-4 rounded text-center">
					<a href="success-story/details/8.html">
						<img src="uploads/matrimonial_img/success-story/f57ad2d551c75012e97808c1798d1851.jpg" alt=""
							class="img-fluid">
					</a>
					<p class="h5">MARK & ELENA</p>
					<p>Thank you for making our dreams come true.</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Mobile App Section -->
	<div class="container text-center my-5">
		<div class="bg-light p-4 rounded">
			<p class="h3">Download Our Mobile App</p>
			<p class="lead">Get our app for better experience and access to exclusive features.</p>
			<a href="https://play.google.com/store/apps" class="btn btn-primary me-2">
				<i class="fab fa-google-play"></i> Google Play
			</a>
			<a href="https://apps.apple.com/" class="btn btn-primary">
				<i class="fab fa-app-store-ios"></i> App Store
			</a>
		</div>
	</div>

	<!-- Wedding Planning Tools -->
	<div class="container text-center my-5">
		<div class="bg-light p-4 rounded">
			<p class="h3">Explore Wedding Planning Tools</p>
			<p class="lead">Everything you need for your special day.</p>
			<img src="uploads/matrimonial_img/images/bottom-img.png" alt="wedding-tools" class="img-fluid">
		</div>
	</div>