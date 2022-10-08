<?php
include('include/header.php');
?>
<!-- ============================ Page Title Start================================== -->
<div class="page-title ">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="breadcrumbs-wrap">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active" aria-current="page">Profile</li>
					</ol>
					<h2 class="breadcrumb-title">Profile - My Profile</h2>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- ============================ Page Title End ================================== -->
<section class="profile-section">
	<!-- Content -->
	<div class="container">
		<div class="row">
			<!-- Widget -->
			<div class="col-md-3">
				<div class="edit-profile-photo-area-wrap ">
					<div class="edit-profile-photo-area"> <img src="assets/img/test/dhiraj.jpg" alt="">
						<div class="change-photo-btn-item">
							<div class="user-photo-upload"> <span><i class="fa fa-upload"></i> Upload Photo</span>
								<input type="file" class="upload " data-toggle="tooltip" title="Upload Photo" />
							</div>
						</div>
					</div>
					<div class="edit-profile-username-area">
					<h5>Dhiraj Tandukar</h5>
					<h6>Toronto,Canada</h6></div>
				</div>
				<div class="clearfix"></div>
				<div class="sidebar ">
					<div class="user-smt-account-menu-container">
						<ul class="user-account-nav-menu">
							<li><a href="profile.php" class="current"><i class="far fa-user"></i> My Profile</a></li>
							<li><a href="bookmarks.php"><i class="far fa-star"></i>Bookmark Listing</a></li>
							<li><a href="properties.php"><i class="far fa-file"></i> My Property</a></li>
							<li><a href="new-property.php"><i class="fas fa-share"></i> New Property</a></li>
							<li><a href="change-password.php"><i class="fas fa-user-lock"></i> Change Password</a></li>
							<li><a href="#"><i class="fas fa-power-off"></i> Log Out</a></li>
						</ul>
					</div>
				</div>
				<div class="widget sidebar-widget-item">
					<div class="detail-banner-add-section">
						<a href="#"><img src="assets/img/banner-add-2.jpg" alt="banner-add-2"></a>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="user-profile-item">
					<div class="submit-page-inner-box">
						<h3>My Account</h3>
						<div class="content with-padding">
							<div class="row">
								<div class="col-md-6">
									<label>Your Name</label>
									<input value="Dhiraj Tandukar" type="text">
								</div>
								<div class="col-md-6">
									<label>Your Title</label>
									<input value="Agent In Afghanistan" type="text">
								</div>
								<div class="col-md-6">
									<label>Phone Number</label>
									<input value="(+21) 124 123 4546" type="text">
								</div>
								<div class="col-md-6">
									<label>Email Address</label>
									<input value="info@example.com" type="text">
								</div>
								<div class="col-md-12 margin-bottom-0">
									<label>Message</label>
									<textarea name="about" id="about" cols="20"
										rows="5">Lorem Ipsum is simply dummy text of printing and type setting industry Lorem Ipsum been industry standard dummy text ever since. Lorem Ipsum is simply dummy text of printing and type setting industry Lorem Ipsum been industry standard dummy text ever since.</textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="submit-page-inner-box">
						<h3>Social Accounts</h3>
						<div class="content with-padding">
							<div class="row">
								<div class="col-md-6">
									<label><i class="fab fa-facebook-square"></i> Facebook</label>
									<input value="https://www.facebook.com" type="text">
								</div>
								<div class="col-md-6">
									<label><i class="fab fa-twitter"></i> Twitter</label>
									<input value="https://www.twitter.com" type="text">
								</div>
								<div class="col-md-6">
									<label><i class="fab fa-linkedin-in"></i>Linkedin</label>
									<input value="https://www.linkedin.com" type="text">
								</div>
								<div class="col-md-6">
									<label><i class="fab fa-google"></i> Google</label>
									<input value="https://www.google.com" type="text">
								</div>
								<div class="col-md-6">
									<label><i class="fab fa-pinterest"></i>Pinterest</label>
									<input value="https://www.pinterest.com" type="text">
								</div>
								<div class="col-md-6">
									<label><i class="fab fa-instagram"></i>Instagram</label>
									<input value="https://www.instagram.com" type="text">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<button class=" button-profile ">Save Changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
include('include/footer.php');
?>