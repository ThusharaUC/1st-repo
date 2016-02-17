<?php
include '../templates/head.php';
include '../core/init.php';
include '../models/dbConfig.php';
$db=DB::getInstance();
if (isset($_GET['p-name'])) {
    $pname=$_GET['p-name'];
    $query="SELECT * FROM projects WHERE p_name='$pname'";
    $res=$db->query($query)->result();

    ?>
    <nav class="navbar navbar-default " role="navigation" id="nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#mobile-menu"> <i class="ion-navicon"></i> </button>
                <a class="navbar-brand" href="../view/home.php"><img src="../../public/images/logo1.png" alt="Image"></a>
            </div>
        </div>
    </nav>
    <section class="internal-header overlay-dark" data-stellar-background-ratio="0.5" style="z-index: 1;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="title"><?php echo $res[0]->p_name;?></h3>
                    <ol class="breadcrumb">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="projects.php">Project</a></li>
                        <li class="active"><?php echo $res[0]->p_name;?></li>
                    </ol>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <br>
    <ul><li>
        <div class="container">
            <div class="col-sm-12">
                <div class="col-sm-6">

                   <figure ><img style="width: 100%;height: 50%" src="<?php echo SCRIPT_ROOT; echo $res[0]->p_photo;?>" alt="<?php echo $res[0]->p_name;?>"></figure>

                </div>
                <div class="col-sm-6" style="float: right">
                    <div class="info">
                        <h3 style="color: #f3c217"><?php echo $res[0]->p_name ?></h3><br><br>
                        <h4 class="type"><?php echo $res[0]->p_type ?></h4><br><br>
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
                                <td width="43%" height="27" valign="top"><span><b>Client</b></span></td>
                                <td width="4%" valign="top" ><span>:</span></td>
                                <td width="63%" valign="top" ><span><?php echo $res[0]->p_client ?></span><br><br></td>
                            </tr>
                            </tbody>
                        <tbody>
                            <tr>
                                <td width="43%" height="27" valign="top"><span><b>Location</b></span></td>
                                <td width="4%" valign="top" ><span>:</span></td>
                                <td width="63%" valign="top" ><span> <?php echo $res[0]->p_location ?></span><br><br></td>
                            </tr>
                            </tbody>
                        <tbody>
                            <tr>
                                <td width="43%" height="27" valign="top"><span><b>Prices</b></span></td>
                                <td width="4%" valign="top" ><span>: </span></td>
                                <td width="63%" valign="top" ><span>&nbsp;Rs:&nbsp; <?php echo number_format($res[0]->p_value,2); ?></span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div></li>
    </ul>
    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!-- end title -->
                    <ul class="spaced-grids">
                        <?php
                        $photo=$db->query("SELECT * FROM photos WHERE p_name='$pname'")->result();
                        $cphoto=$db->query("SELECT * FROM photos WHERE p_name='$pname'")->count();
                        for($i=0;$i<$cphoto;$i++) {echo "
                    <li><a href=".SCRIPT_ROOT. $photo[$i]->path." class='fancybox' rel='gallery'><img src=".SCRIPT_ROOT.$photo[$i]->path." alt='Image'></a></li>";}
                        ?>
                    </ul>


                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <?php
}
include '../templates/footer.php';

?>

