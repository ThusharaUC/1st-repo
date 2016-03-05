<?php include'../templates/header.php';
?>
<section class="internal-header overlay-dark" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="title">PROJECTS</h2>
                <ol class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Projects</li>
                </ol>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<?php if ($_SESSION['new_user']!=""){ ?>
<div  style="float:right;margin-bottom: 10px;margin-top: 20px;">
    <button type="button" style="background-color: #f3c217" class="btn btn-warning" onclick="location.href='add-project.php'" >ADD NEW PROJECT</button>
    <button type="button" style="background-color: #f3c217" class="btn btn-warning" onclick="location.href='update-project.php'" >UPDATE PROJECT</button>
    <!-- <li><a href="#" class="search-btn">SEARCH</a></li>-->
</div>
<?php } ?>
<br>
<!-- end internal-header -->
<section class="all-projects">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titles">
                    <h6>WE PROUD OF OUR</h6>
                    <h2>NEW PROJECTS</h2>
                </div>
                <!-- end title -->
            </div>
            <!-- end col-12 -->


        </div>
        <!-- end row -->

        <div class="col-md-12 col-xs-12">
        <ul>
            <?php
            include '../controller/load-db.php';
            for ($i=0;$i<$npcount;$i++ ){
//var_dump($presult);
                ?> <li>
                    <figure> <img src="<?php echo SCRIPT_ROOT; echo $npresult[$i]->p_photo ?>" alt="Image">
                        <figcaption>
                            <div class="table">
                                <div style="color: white" class="inner"><?php echo $npresult[$i]->p_name ?></div>
                            </div>
                        </figcaption>
                    </figure>

                    <div class="progress">
                        <div class="progress-bar wow " data-wow-delay="0.1s" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $npresult[$i]->progress ?>%"> <?php echo $npresult[$i]->progress ?>% </div>
                        <!-- end progress-bar -->
                    </div>
                    <!-- end progress -->
                    <div class="info">
                        <h5><?php echo $npresult[$i]->p_name ?></h5>
                        <span class="type"><?php echo $npresult[$i]->p_type ?></span>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td width="43%" height="27" valign="top"><span><b>Location</b></span></td>
                                <td width="4%" valign="top" ><span>:</span></td>
                                <td width="63%" valign="top" ><span>&nbsp; <?php echo $npresult[$i]->p_location ?></span></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td width="43%" height="27" valign="top"><span><b>Prices</b></span></td>
                                <td width="4%" valign="top" ><span>: </span></td>
                                <td width="63%" valign="top" ><span> <?php echo number_format($npresult[$i]->p_value,2); ?>&nbsp;Rs:&nbsp;</span></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td width="43%" height="27" valign="top"><span><b>Duration</b></span></td>
                                <td width="4%" valign="top" ><span>:</span></td>
                                <td width="63%" valign="top" ><span>&nbsp;<?php echo $npresult[$i]->p_client ?></span><br><br></td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="search-result.php?p-name=<?php echo $npresult[$i]->p_name?>">DETAIL</a>
                    </div>
                    <!-- end info -->
                </li>
                <!-- end project -->
            <?php }
            ?>
            <!-- end project -->
        </ul>
        </div>
        <!-- end projects -->
    </div>
    <!-- end container -->
</section>
<!-- end new projects -->
<section class="all-projects">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titles">
                    <h6>WE PROUD OF OUR</h6>
                    <h2>ALL PROJECTS</h2>
                </div>
                <!-- end title -->
            </div>
            <!-- end col-12 -->


        </div>
        <!-- end row -->

        <ul>
            <?php
            include '../controller/load-db.php';
            for ($i=0;$i<$pcount;$i++ ){
//var_dump($presult);
                ?> <li>
                    <figure> <img src="<?php echo SCRIPT_ROOT; echo $presult[$i]->p_photo ?>" alt="Image">
                        <figcaption>
                            <div class="table">
                                <div class="inner" ><?php echo $presult[$i]->p_name ?></div>
                            </div>
                        </figcaption>
                    </figure>

                    <div class="progress">
                        <div class="progress-bar wow " data-wow-delay="0.1s" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $presult[$i]->progress ?>%"> <?php echo $presult[$i]->progress ?>% </div>
                        <!-- end progress-bar -->
                    </div>
                    <!-- end progress -->
                    <div class="info">
                        <h5><span style="color: red"><?php echo $presult[$i]->p_name ?></span></h5>
                        <span class="type"><?php echo $presult[$i]->p_type ?></span>
                        <table>
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td width="43%" height="27" valign="top"><span><b>Location</b></span></td>
                                <td width="4%" valign="top" ><span>:</span></td>
                                <td width="63%" valign="top" ><span>&nbsp; <?php echo $npresult[$i]->p_location ?></span></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td width="43%" height="27" valign="top"><span><b>Prices</b></span></td>
                                <td width="4%" valign="top" ><span>: </span></td>
                                <td width="63%" valign="top" ><span> <?php echo $npresult[$i]->p_value; ?> Mna</span></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td width="43%" height="27" valign="top"><span><b>Duration</b></span></td>
                                <td width="4%" valign="top" ><span>:</span></td>
                                <td width="63%" valign="top" ><span>&nbsp;<?php echo $npresult[$i]->p_client ?></span><br><br></td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="search-result.php?p-name=<?php echo $npresult[$i]->p_name?>">DETAIL</a>
                    </div>
                    <!-- end info -->
                </li>
                <!-- end project -->
            <?php }
            ?>
            <!-- end project -->
        </ul>

        <!-- end projects -->
    </div>
    <!-- end container -->
</section>
<!-- end new project -->
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
<?php include'../templates/footer.php'; ?>
<!-- end footer -->

<a href="#" class="cd-top"></a>

</body>
</html>



