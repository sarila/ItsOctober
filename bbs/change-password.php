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
              <li><a href="profile.php"><i class="far fa-user"></i> My Profile</a></li>
              <li><a href="bookmarks.php"><i class="far fa-star"></i>Bookmark Listing</a></li>
              <li><a href="properties.php"><i class="far fa-file"></i> My Property</a></li>
              <li><a href="new-property.php"><i class="fas fa-share"></i> New Property</a></li>
              <li><a href="change-password.php" class="current"><i class="fas fa-user-lock"></i> Change Password</a>
              </li>
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
            <h3>Change Password</h3>
            <div class="content with-padding">
              <div class="row">
                <div class="col-md-12">
                  <label>Current Password</label>
                  <input type="password" placeholder="*********">
                </div>
                <div class="col-md-6">
                  <label>New Password</label>
                  <input type="password" placeholder="*********">
                </div>
                <div class="col-md-6">
                  <label>Confirm New Password</label>
                  <input type="password" placeholder="*********">
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