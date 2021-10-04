<?php include('include/header.php'); ?>
<div class="inner-title-banner">
    <div class="sub-head">
        <h2 class="text-uppercase text-white">Contact Us</h2>
        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>

            <li><a href="contactus.php">Contact Us</a></li>
        </ol>
    </div>
</div>
<section class="contact-section py-5">
    <div class="container ">
       

        <div class="row ">
            <div class="col-md-4">
                <h3> Contact us</h3>
                <h5>Postal Address</h5>

                <p>Dillibazar Height, Kathmandu</p>

                <p>+977 01-4265755</p>

                <p> info@enlightacademy.edu.np</p>
            </div>
            <div class="col-md-8">
                <div class="form"><h5>Message us:</h5>
                    <form action="/action_page.php">
                    <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="email" class="form-control" placeholder="Name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" placeholder="Enter email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pno">Phone Number:</label>
                            <input type="number" class="form-control" placeholder="Phone Number" id="pno">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" class="form-control" placeholder="Subject" id="subject">
                        </div>
                        <div class="form-group">
                            <label for="msg">Message:</label>
                            <textarea  class="form-control" placeholder="Message" id="msg"></textarea>
                        </div>
                        
                        <button type="submit" class="enquiry">Submit</button>
                    </form>
                </div>
            </div>


        </div>
        <div class="map py-3">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14129.73458925131!2d85.324996!3d27.7038942!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7a668c0b769b5614!2sEnlight%20Academy!5e0!3m2!1sen!2snp!4v1613024172765!5m2!1sen!2snp"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
            </div>
    </div>
</section>
<?php include('include/footer.php'); ?>