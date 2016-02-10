<?php include "../templates/header.php";?>
<section class="internal-header overlay-dark" data-stellar-background-ratio="0.5" style="z-index: 1;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="title">GALLERY</h2>
                <ol class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li class="active">Gallery</li>
                </ol>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end internal-header -->
<section class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="titles">
                    <h6>GALLERY GRIDS</h6>
                    <h2>SPACED</h2>
                </div>
                <!-- end title -->
                <ul class="spaced-grids">
                    <?php
                    include '../controller/load-db.php';
                    for ($i=0;$i<$photocnt;$i++){echo "
                    <li><a href=".SCRIPT_ROOT. $photores[$i]->path." class='fancybox' rel='gallery'><img src=".SCRIPT_ROOT.$photores[$i]->path." alt='Image'></a></li>";}
                    ?>
                </ul>


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
<?php include '../templates/footer.php'; ?>


<a href="#0" class="cd-top"></a>


</body>
</html>