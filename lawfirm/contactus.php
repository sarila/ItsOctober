<?php
include('include/header.php');
?>

<!-- contact section -->

<section class="contact_section ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0">
                <div class="map_container">
                    <div class="map">
                        <div id="googleMap"> 
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.9822644156043!2d85.34027271456493!3d27.68694303299625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1980e9319e7f%3A0x220dee5bf8a34f6!2sTech%20Coderz!5e0!3m2!1sen!2snp!4v1627974918279!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-5 ">
                <div class="form_container mb_mobile_45">
                    <div class="heading_container heading_center ">
                        <h2 class="">
                            <span class="dot_design"></span>Get In Touch
                        </h2>
                    </div>
                    <form action="#" class="contact_form">
                        <input type="text" name="your_name" class="form-control" id="inputName" placeholder="Your Name">
                        <input type="text" name="phone_number" class="form-control" id="inputNumber"
                            placeholder="Mobile Number">
                        <input type="email" name="email_address" class="form-control" id="inputMail"
                            placeholder="Email">
                        <input type="text" name="your_message" class="form-control" id="inputMessage"
                            placeholder="Message">
                        <div class="btn-box btn-center">
                            <button type="submit" class="submit_btn">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact section -->
<?php
include('include/footer.php');
?>