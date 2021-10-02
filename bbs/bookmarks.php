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
                        <li class="breadcrumb-item active" aria-current="page">Bookmark</li>
                    </ol>
                    <h2 class="breadcrumb-title">Profile - Bookmark Listing</h2>
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
                            <li><a href="bookmarks.php" class="current"><i class="far fa-star"></i>Bookmark Listing</a>
                            </li>
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
                <div class="bookmarks-table user-profile-item ">
                    <div class="submit-page-inner-box">
                        <h3>Bookmark Property Listing</h3>
                    </div>
                    <!-- Item #1 -->
                    <div class="item-box">
                        <div class="title-container"><img src="assets/img/sale/sale-1.jpg" alt="">
                            <div class="title">
                                <h4><a href="#">Renovated Luxury Apartment</a></h4>
                                <span>2021 San Pedro, Los Angeles 90015</span> <span
                                    class="property-price">$22,000/mo</span>
                            </div>
                            <div class="action"><a href="#" class="delete  " data-toggle="tooltip"  data-placement="left" title="Delete"><i class="far fa-trash-alt"></i></a></div>

                        </div>
                        
                    </div>
                    <!-- Item #2 -->
                    <div class="item-box">
                        <div class="title-container"><img src="assets/img/sale/sale-2.jpg" alt="">
                            <div class="title">
                                <h4><a href="#">Renovated Luxury Apartment</a></h4>
                                <span>2021 San Pedro, Los Angeles 90015</span> <span
                                    class="property-price">$20,000/mo</span>
                            </div>
                        <div class="action"><a href="#" class="delete  "data-toggle="tooltip" data-placement="left" title="Delete"><i class="far fa-trash-alt"></i></a></div>
                        </div>
                        
                    </div >
                    <!-- Item #3 -->
                    <div class="item-box">
                        <div class="title-container"><img src="assets/img/sale/sale-3.jpg" alt="">
                            <div class="title">
                                <h4><a href="#">Renovated Luxury Apartment</a></h4>
                                <span>2021 San Pedro, Los Angeles 90015</span> <span
                                    class="property-price">$15,000/mo</span>
                            </div>
                        <div class="action"><a href="#" class="delete  "data-toggle="tooltip"  data-placement="left" title="Delete"><i class="far fa-trash-alt"></i></a></div>
                        </div>
                        
                    </div >
                    <!-- Item #4 -->
                    <div class="item-box">
                        <div class="title-container"><img src="assets/img/sale/sale-4.jpg" alt="">
                            <div class="title">
                                <h4><a href="#">Renovated Luxury Apartment</a></h4>
                                <span>2021 San Pedro, Los Angeles 90015</span> <span
                                    class="property-price">$18,000/mo</span>
                            </div>
                        <div class="action"><a href="#" class="delete  "data-toggle="tooltip"  data-placement="left" title="Delete"><i class="far fa-trash-alt"></i></a></div>
                        </div>
                        
                    </div >
                </div>
            </div>
        </div>
</section>
<?php
include('include/footer.php');
?>