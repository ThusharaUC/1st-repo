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
                        <h3><?php echo $res[0]->p_name ?></h3>
                        <span class="type"><?php echo $res[0]->p_type ?></span><br>
                        <span>Location : <?php echo $res[0]->p_location ?></span><br>
                        <span>Prices : Rs: <?php echo number_format($res[0]->p_value,2); ?></span>

                    </div>
                </div>
            </div>
        </div></li>
    </ul>


    <?php
}
include '../templates/footer.php';

?>

