<footer>
    <div class="container">
        <div class="top-footer">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="box-content"> <i class="ion-android-microphone"></i>
                        <h5>CUSTOMER SUPPORT</h5>
                        <p>Monday-Friday : 9:30 - 20:00<br>
                            Saturday : 9:30 - 14:00</p>
                    </div>
                    <!-- end box-content -->
                </div>
                <!-- end col-4 -->
                <div class="col-md-4 col-sm-6">
                    <div class="box-content"> <i class="ion-navigate"></i>
                        <h5>HEADQUERTOR</h5>
                        <p> 2234, Habaraththawela,<br>
                            Sewanagala,
                            Sri Lanka</p>
                    </div>
                    <!-- end box-content -->
                </div>
                <!-- end col-4 -->
                <div class="col-md-4 col-sm-12">
                    <div class="box-content"> <i class="ion-ios-telephone"></i>
                        <h5>QUICK CONTACT</h5>
                        <p>+94 772 266 8078 <br>
                            <a href="#">info@sidathconstruction.com</a> </p>
                    </div>
                    <!-- end box-content -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end top-footer -->
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="about-text">
                    <h4 class="title">CONSTRUCTOR</h4>
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a</p>
                </div>
                <!-- end about-text -->
            </div>
            <!-- end col-3 -->
            <div class="col-md-3 col-sm-12 col-xs-12">
                <h4 class="title">PHOTO GALLERY</h4>
                <ul class="gallery-thumbs">
                    <li><a href="../../public/images/image1.jpg" class="fancybox"><img src="../../public/images/image1.jpg" alt="Image"></a></li>
                    <li><a href="../../public/images/image2.jpg" class="fancybox"><img src="../../public/images/image2.jpg" alt="Image"></a></li>
                    <li><a href="../../public/images/image5.jpg" class="fancybox"><img src="../../public/images/image5.jpg" alt="Image"></a></li>
                    <li><a href="../../public/images/image6.jpg" class="fancybox"><img src="../../public/images/image6.jpg" alt="Image"></a></li>
                    <li><a href="../../public/images/image5.jpg" class="fancybox"><img src="../../public/images/image5.jpg" alt="Image"></a></li>
                    <li><a href="../../public/images/image7.jpg" class="fancybox"><img src="../../public/images/image7.jpg" alt="Image"></a></li>
                    <li><a href="../../public/images/image8.jpg" class="fancybox"><img src="../../public/images/image8.jpg" alt="Image"></a></li>
                    <li><a href="../../public/images/image9.jpg" class="fancybox"><img src="../../public/images/image9.jpg" alt="Image"></a></li>
                </ul>
            </div>
            <!-- end col-3 -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h4 class="title">PROMO VIDEO</h4>
                <div class="video">
                    <figure><img src="../../public/images/banner2.jpg" alt="Image">
                        <div class="table">
                            <div class="inner"> <i class="ion-play"></i>
                                <h4><a href="http://www.youtube.com/embed/BpPR4Xww?autoplay=1" class="fancybox fancybox.iframe">WATCH VIDEO</a></h4>
                            </div>
                            <!-- end inner -->
                        </div>
                        <!-- end table -->
                    </figure>
                </div>
                <!-- end video -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
        <div class="sub-footer">
            <div class="row">
                <div class="col-xs-12"> <span class="copyright">Copyright  2016 , | Sidath Construction | </span> <span class="creation">Created by Dream Team <i class="ion-heart"></i> in Sri Lanka</span> </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end sub-footer -->
    </div>
    <!-- end container -->
</footer>
<!-- JS FILES -->
<script src="../../public/js/jquery.min.js"></script>
<script type="text/javascript">
    (function($) {
        $(window).load(function(){
            $(".loading").addClass("fade-out");
            $(".loading .table .inner").addClass("fade-out-inner");

        });
    })(jQuery)
</script>
<script src="../../public/js/bootstrap.min.js"></script>
<script src="../../public/js/bootstrap-slider.js"></script>
<script src="../../public/js/jquery.stellar.js"></script>
<script src="../../public/js/jquery.fancybox.js?v=2.1.5" type="text/javascript" ></script>
<script src="../../public/js/isotope.min.js"></script>
<script src="../../public/js/masonry.js"></script>
<script src="../../public/js/owl.carousel.js"></script>
<script src="../../public/js/wow.js"></script>
<script src="../../public/js/counter.js"></script>
<script src='../../public/js/jquery.themepunch.tools.min.js' type='text/javascript' ></script>
<script src='../../public/js/jquery.themepunch.revolution.min.js' type='text/javascript' ></script>
<script src='../../public/js/jquery.validate.min.js' type='text/javascript' ></script>
<script src='../../public/js/jquery.form.js' type='text/javascript' ></script>
<script src='../../public/js/contact-form.js' type='text/javascript' ></script>
<script src='../../public/js/settings.js' type='text/javascript' ></script>
<script src="../../public/js/waypoints.min.js"></script>
<script src="../../public/js/jquery.counterup.min.js"></script>
<script src="../../public/js/scripts.js"></script>
<script src="../../public/js/jquery.validate.js"></script>
<script src="../../public/js/google-js.js"></script>
<script src="../../public/js/google-maps.js" type="text/javascript"></script>
<script type="text/javascript">
    function suggest(inputString){
        if(inputString.length == 0) {
            $('#search').fadeOut();
        } else {
            $('#project').addClass('load');
            $.post("../controller/search.php", {queryString: ""+inputString+""}, function(data){
                if(data.length >0) {
                    $('#search').fadeIn();
                    $('#searchList').html(data);
                    $('#project').removeClass('load');
                }
            });
        }
    }

    function fill(thisValue) {
        $('#project').val(thisValue);
        setTimeout("$('#search').fadeOut();", 600);
    }

</script>
<script src="../../public/js/jquery.min.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width('50%')
                    .height('50%');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

