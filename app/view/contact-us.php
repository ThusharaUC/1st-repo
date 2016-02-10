<?php include'../templates/header.php';?>
<section class="internal-header overlay-dark" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="title">CONTACT US</h2>
                <ol class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end internal-header -->
<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="titles">
                    <h6>CONTACT AND ADDRESS</h6>
                    <h2>INFORMATION</h2>
                </div>
                <!-- end title -->
            </div>
            <!-- end col-12 -->
            <div class="col-md-4">
                <h4>HEADQUARTER</h4>
                <br>
                <address>
                    <p>2234 ,Habaraththawela,<br>
                        Sewanagala, Sri Lanka</p>
                    <p>t: +94 772 66 80 78<br>
                        <a href="#">info@sidathconstruction.com</a></p>
                </address>
            </div>
            <!-- end col-4 --
            <div class="col-md-4">
                <h4>RIO DE JANEIRO</h4>
                <br>
                <address>
                    <p> Rua Prof Sede do Terra Apt 31 <br>
                        Rio de Janeiro, Brazil</p>
                    <p>t: 769 683 65 868<br>
                        <a href="#">info@constructor.com</a></p>
                </address>
            </div>
            <!-- end col-4 --
            <div class="col-md-4">
                <h4>ISTANBUL</h4>
                <br>
                <address>
                    <p> H. R?fat Pa?a Mah. Ertan Sok. No: 22/4 <br>
                        ?stanbul, Turkey</p>
                    <p>t: 769 683 65 868<br>
                        <a href="#">info@constructor.com</a></p>
                </address>
            </div>
            <!-- end col-4 -->
            <div class="col-xs-12">
                <div id="map"></div>
                <!-- end map -->
            </div>
            <!-- end col-12 -->
            <div class="col-xs-12">
                <div class="titles">
                    <h6>CONTACT FORM TO</h6>
                    <h2>REACH US</h2>
                </div>
                <!-- end title -->
            </div>
            <!-- end col-12 -->
            <div class="col-xs-12">
                <form class="contact-form" id="contact" name="contact" method="post">
                    <div class="form-group">
                        <label>Your name</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" name="email" id="email" required>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" id="phone" required>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" id="city" required>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <label>About what ?</label>
                        <input type="text" name="subject" id="subject" required>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <label>Your Message</label>
                        <textarea name="message" id="message" required></textarea>
                    </div>
                    <!-- end form-group -->
                    <div class="form-group">
                        <button id="submit" type="submit" name="submit">SEND IT</button>
                    </div>
                    <!-- end form-group -->
                </form>
            </div>
            <!-- end col-12 -->
            <div class="col-xs-12">
                <div id="success" class="alert alert-success" role="alert">
                    <p>Your message was sent successfully! We will be in touch as soon as we can.</p>
                </div>
                <!-- end alert -->
                <div id="error" class="alert alert-danger" role="alert">
                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                </div>
                <!-- end alert -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end gallery -->
<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12">
                <div class="titles">
                    <h6>SIGN UP FOR OUR </h6>
                    <h2>NEWSLETTER</h2>
                </div>
                <!-- end title -->
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Your e-mail">
                        <button type="submit">SUBSCRIBE</button>
                    </div>
                    <small>I promise, we won’t spam you!</small>
                </form>
            </div>
            <!-- end col-8 -->
            <div class="col-md-4 col-sm-5 hidden-xs"> <img src="../../public/images/newsletter-image.png" alt="Image" class="image"> </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end newsletter -->
<?php include'../templates/footer.php';?>

<a href="#0" class="cd-top"></a>
</body>
</html>