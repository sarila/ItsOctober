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
                        <li class="breadcrumb-item active" aria-current="page">Property</li>
                    </ol>
                    <h2 class="breadcrumb-title">Profile - Edit My Property</h2>
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
                            <li><a href="profile.php"><i class="far fa-user"></i> My Profile</a></li>
                            <li><a href="bookmarks.php"><i class="far fa-star"></i>Bookmark Listing</a>
                            </li>
                            <li><a href="properties.php"  class="current"><i class="far fa-file"></i> My Property</a></li>
                            <li><a href="new-property.php"><i class="fas fa-share"></i> New Property</a>
                            </li>
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

            <!-- Submit Page -->
            <div class="col-md-9">
                <div class="submit-page user-profile-item">
                      <!-- Section -->
                      <div class="submit-page-inner-box">
                        <h3>Property Picture</h3>
                        <div class="content1 with-padding">
                            <div class="row">
                                <div class="col-md-12 submit-section">
                                    <form action="file-upload" class="">
                                        <input type="file" id="myFile" name="filename">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section / End -->

                    <!-- Section -->
                    <div class="submit-page-inner-box">
                        <h3>Edit Property Basic Information</h3>
                        <div class="content with-padding">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Property Title <i class="far fa-question-circle ml-1" data-toggle="tooltip"
                                            data-placement="top" title="Property Title"></i> </h5>
                                    <input class="search-field" placeholder="Property Title" type="text" value="" />
                                </div>

                                
                                <div class="col-md-4">
                                    <h5>Price</h5>
                                    <div class="select-input disabled-first-option">
                                        <input type="text" placeholder="100000" data-unit="USD">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h5>Date</h5>
                                    <div class="select-input disabled-first-option">
                                        <input type="date" >
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- Section / End -->

                  

                    <!-- Section -->
                    <div class="submit-page-inner-box">
                        <h3>Property Location</h3>
                        <div class="content with-padding">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>City Name</h5>
                                    <input type="text" placeholder="City Name">
                                </div>
                                <div class="col-md-6">
                                    <h5>State</h5>
                                    <input type="text" placeholder="State">
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <!-- Section / End -->
                    <div class="row">
                        <div class="col-md-12">
                            <button class=" button-profile ">Update Property</button>
                        </div>
                    </div>
                </div>
            </div>
</section>
<?php
include('include/footer.php');
?>