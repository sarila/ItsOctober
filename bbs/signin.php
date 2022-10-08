<?php
include('include/header.php');
?>
<!-- START SECTION LOGIN -->
    <div class="login">
    <h2>Login</h2>
        <form>
            <div class="access_social">
                <a href="#0" class="social_bt facebook"><i class="fab fa-facebook-f "></i> Login with Facebook</a>
                <a href="#0" class="social_bt google"><i class="fab fa-google"></i> Login with Google</a>
                
            </div>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
               
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="" required>
             
            </div>
            <div class="filter-tags">
                <div class="checkboxes float-left">
                    <div class="filter-tags-wrap">
                        <input id="check-b" type="checkbox" name="check">
                        <label for="check-b">Remember me</label>
                    </div>
                </div>
                <div class="float-right mt-1"><a id="forgot" href="">Forgot Password?</a></div>
            </div>
            <a href="#0" class="btn_1">Login to Find Business</a>
            <div class="text-center add_top_10">New to Business? <strong><a href="signup.php">Sign up!</a></strong>
            </div>
        
        </form>
    </div>

<!-- END SECTION LOGIN -->

<?php
include('include/footer.php');
?>
