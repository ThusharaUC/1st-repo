<?php include'../templates/head.php';
include '../controller/load-project.php';
?>
<nav class="navbar navbar-default " role="navigation" id="nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle toggle-menu menu-left push-body" data-toggle="collapse" data-target="#mobile-menu"> <i class="ion-navicon"></i> </button>
            <a class="navbar-brand" href="../view/home.php"><img src="../../public/images/logo1.png" alt="Image"></a>
        </div>
    </div>
</nav>
<section class="internal-header overlay-dark" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="title">CLIENT LIST</h2>
                <ol class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li class="active">Client List</li>
                </ol>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end internal-header -->
<div class="container-fluid">
    <div class="row" id="alert_data"></div>

    <div id="layout">

        <div class="row">
            <div id="recent">
                <h2 style="color:#000000; float:left;"></h2>
            </div> <!--recent ends-->
        </div>

        <?php
        $data=$db->query("SELECT * FROM client");
        $db_result=$data->result();
        $count=$data->count();

        if((isset($_POST['delete'])) && (isset($_POST['checkbox']))){
            for($i=0; $i<count($_POST['checkbox']); $i++){

                $del_id = $_POST['checkbox'][$i];
                $delete = $db->query("DELETE FROM client WHERE id='$del_id'");
                if (!$delete->error()) {
                    echo '<script>
                                        window.location.href=window.location.href;
                                      </script>';
                }
            }

        }


        ?>

        <!--add new client-->
        <div class="modal fade" id="myModale" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Add Client</h4>
                    </div>
                    <!-- end modal-header -->
                    <div class="modal-body" style="height: 280px;">
                        <form class="form-horizontal" action="../controller/addclient.php"  method="post" id="ex_auth">

                            <div class="form-group">
                                <label for="inputName" class="col-sm-4 control-label">Client Name:</label>
                                <div class="col-sm-8">
                                    <input type="name" name="c-name" class="form-control ext_input" id="c-name" align="center"  placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputmobile" class="col-sm-4 control-label">Client Number:</label>
                                <div class="col-sm-8">
                                    <input type="tel" name="c-tel" class="form-control" align="center" id="c-tel" placeholder="Telphone Number" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress" class="col-sm-4 control-label">Client Company:</label>
                                <div class="col-sm-8">
                                    <input type="text" name="c-company" class="form-control ext_input" id="inputAddress" align="center" placeholder="Company">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">Client Email:</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control ext_input" name="c-email" align="center" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-sm-8 form-group" style="float:right;">
                                <button type="submit" id="submit" name="btn-adduser" style="margin: 5px;background-color: #f3c217;" class="btn btn-warning" value="Submit">&nbsp;Add</button>

                                <button type="button" style="margin: 5px;background-color: #f3c217;" name="btn-cancel" class="btn btn-default btn-primary" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!-- end modal-body -->
                </div>
                <!-- end modal-content -->
            </div>
            <!-- end modal-dialog -->
        </div>
        <!--end add new client-->

        <div class="row">
            <div id="content" scrolling="yes">
                <form name="table" method="post">
                    <table class="table table_striped" id="table">

                        <div>
                            <div style="float:right;margin: 10px;">
                                <button style="background-color: #f3c217" class="btn btn-warning" data-toggle="modal" type="submit" name="delete" >Delete</button>
                            </div>
                            <div style="float:right;margin: 10px">
                                <button style="background-color: #f3c217;" class="btn btn-warning" data-toggle="modal" data-target="#myModale" type="button" >Add New</button>
                            </div>
                        </div>

                        <thead class="modal-header">
                        <tr>
                            <th>&nbsp;# </th>
                            <th>&nbsp;Client Name</th>
                            <th>&nbsp;Client Company</th>
                            <th>&nbsp;Client Telephone No.</th>
                            <th>&nbsp;Client Email</th>
                            <th>&nbsp;&nbsp;&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

                        for($i=0; $i<$count; $i++){
                            $j=$i+1;
                            echo
                                "<tr>
                                                <td>&nbsp;{$j}</td>
                                                <td>&nbsp;{$db_result[$i]->c_name}</td>
                                                <td>&nbsp;{$db_result[$i]->c_company}</td>
                                                <td>&nbsp;{$db_result[$i]->c_phone}</td>
                                                <td>&nbsp;{$db_result[$i]->c_email}</td>
                                                <td>"."<input name='checkbox[]' type='checkbox' id='checkbox[]' class='box' data-toggle='modal' data-target='#myModal2' value={$db_result[$i]->id}>"."</td>
		                                        </tr>\n";
                        }
                        ?>

                        </tbody>
                    </table>
                </form>
            </div>
        </div>

    </div><!--layout ends-->


</div>
<!--<div style="z-index: -1;">
<?php
/*echo "<table  class='modal-header table table-striped' style='alignment:center; font-size: small;width: 100%'>
    <col width='10'>
    <col width='40'>
    <col width='220'>
    <col width='220'>
    <col width='220'>
    <col width='220'>
    <col width='220'>
    <col width='220'>
    <thead>
    <tr>
        <th></th>
        <th>#</th>
        <th>NAME</th>
        <th>COMPANY</th>
        <th>EMAIL</th>
        <th>CONTACT No.</th>
        <th></th>
    </tr>
    </thead>
    <tbody>";




    for ($i=0;$i<$ccount;$i++) {
        $j = $i + 1;


        echo "

    <tr>

        <td style='height:10px;'></td>
        <td style='height:10px;'>{$j}</td>
        <td style='height:10px;'>{$cresult[$i]->c_name}</td>
        <td style='height:10px;'>{$cresult[$i]->c_company}</td>
        <td style='height:10px;'>{$cresult[$i]->c_email}</td>
        <td style='height:10px;'>{$cresult[$i]->c_phone}</td>
        <td style='height:10px;'><a href='#' id='delete'>Delete</a> </td>
    </tr>";
        }
    echo "</tbody>
</table>";
 */?>
    </div>-->
<!-- end gallery -->
<br><br><br><br><br>
<section class="newsletter" >
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
            <!--<div class="col-md-4 col-sm-5 hidden-xs" > <img src="../../public/images/newsletter-image.png" alt="Image" class="image"> </div>-->
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end newsletter -->
<?php include'../templates/footer.php';?>

<a href="#" class="cd-top"></a>
<script language="javascript">
    function validate()
    {
        var chks = document.getElementsByName('checkbox[]');
        var hasChecked = false;
        for (var i = 0; i < chks.length; i++)
        {
            if (chks[i].checked)
            {
                hasChecked = true;
                break;
            }
        }
        if (hasChecked == false)
        {
            alert("Please select at least one.");
            return false;
        }
        return true;
    }
</script>
</body>
</html>