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
                    <h2 class="breadcrumb-title">Profile - My Property</h2>
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
                            <li><a href="properties.php"><i class="far fa-file"></i> My Property</a></li>
                            <li><a href="new-property.php" class="current"><i class="fas fa-share"></i> New Property</a>
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
                        <h3>Property Basic Information</h3>
                        <div class="content with-padding">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Property Title <i class="far fa-question-circle ml-1" data-toggle="tooltip"
                                            data-placement="top" title="Property Title"></i> </h5>
                                    <input class="search-field" placeholder="Property Title" type="text" value="" />
                                </div>

                                <div class="col-md-6">
                                    <h5>Status</h5>
                                    <select class="chosen-select-single-item">
                                        <option label="For Business"></option>
                                        <option>For Business</option>
                                        <option>For Franchise</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <h5>Type</h5>
                                    <select class="chosen-select-single-item">
                                        <option label="Resturant"></option>
                                        <option>Apartment</option>
                                        <option>House</option>
                                        <option>Commercial</option>
                                        <option>Resturant</option>
                                        <option>Garage</option>
                                        <option>Lot</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <h5>Price</h5>
                                    <div class="select-input disabled-first-option">
                                        <input type="text" placeholder="100000" data-unit="USD">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h5>Area</h5>
                                    <div class="select-input disabled-first-option">
                                        <input type="text" placeholder="LA" data-unit="Sq Ft">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h5>Rooms</h5>
                                    <select class="chosen-select-single-item">
                                        <option label="1"></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>More than 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section / End -->

                    <!-- Section -->
                    <div class="submit-page-inner-box">
                        <h3>Property Gallery</h3>
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
                        <h3>Property Location</h3>
                        <div class="content with-padding">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Address</h5>
                                    <input type="text" placeholder="Address">
                                </div>
                                <div class="col-md-6">
                                    <h5>City Name</h5>
                                    <input type="text" placeholder="City Name">
                                </div>
                                <div class="col-md-6">
                                    <h5>State</h5>
                                    <input type="text" placeholder="State">
                                </div>
                                <div class="col-md-6">
                                    <h5>Zip-Code</h5>
                                    <input type="text" placeholder="000000">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section / End -->

                    <!-- Section -->
                    <div class="submit-page-inner-box">
                        <h3>Property Information</h3>
                        <div class="content1 with-padding">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Property Description</h5>
                                    <textarea name="summary" cols="20" rows="3" id="summary"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <h5>Building Age</h5>
                                    <select class="chosen-select-single">
                                        <option label="0 - 1 Years"></option>
                                        <option>0 - 1 Years</option>
                                        <option>0 - 5 Years</option>
                                        <option>0 - 10 Years</option>
                                        <option>0 - 20 Years</option>
                                        <option>0 - 50 Years</option>
                                        <option>50 + Years</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <h5>Bed Rooms</h5>
                                    <select class="chosen-select-single">
                                        <option label="1"></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <h5>Bath Rooms</h5>
                                    <select class="chosen-select-single">
                                        <option label="1"></option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <h5 class="margin-top-15">Other Features <span>(optional)</span></h5>
                                    <div class="checkboxes in-row margin-bottom-20">
                                        <input id="check-2" type="checkbox" name="check">
                                        <label for="check-2">Air Conditioning</label>
                                        <input id="check-3" type="checkbox" name="check">
                                        <label for="check-3">Swimming Pool</label>
                                        <input id="check-4" type="checkbox" name="check">
                                        <label for="check-4">Central Heating</label>
                                        <input id="check-5" type="checkbox" name="check">
                                        <label for="check-5">Laundry Room</label>
                                        <input id="check-6" type="checkbox" name="check">
                                        <label for="check-6">Gym</label>
                                        <input id="check-7" type="checkbox" name="check">
                                        <label for="check-7">Alarm</label>
                                        <input id="check-8" type="checkbox" name="check">
                                        <label for="check-8">Window Covering</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section / End -->

                    <!-- Section -->
                    <div class="submit-page-inner-box">
                        <h3>Property Contact Details</h3>
                        <div class="content with-padding">
                            <div class="row">
                                <div class="col-md-4">
                                    <h5>Full Name</h5>
                                    <input type="text" placeholder="Name">
                                </div>
                                <div class="col-md-4">
                                    <h5>Email Address</h5>
                                    <input type="text" placeholder="Email Address">
                                </div>
                                <div class="col-md-4">
                                    <h5>Phone Number</h5>
                                    <input type="text" placeholder="Phone Number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-page-inner-box">
                        <div class="content1 with-padding">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Agremeent *</label>
                                    <div class="col-md-12 ">
                                        <div class="terms-check">
                                        <input id="check" type="checkbox" name="check" class="mr-1">
                                         I accept all the Terms & Conditions.</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class=" button-profile ">Submit Property</button>
                        </div>
                    </div>
                </div>

            </div>
</section>
<?php
include('include/footer.php');
?>