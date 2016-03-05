<?php include'../templates/head.php'; ?>
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
                <h2 class="title">ADD NEW PROJECT</h2>
                <ol class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li class="active">Add Project</li>
                </ol>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>


    <div class="modal-header">
        <h4 class="">Add New Project</h4>
    </div>
    <!-- end modal-header -->
    <div class="modal-body">
        <form action="../controller/new-project.php" id='signupform'  enctype="multipart/form-data" method="post">
            <div class="col-lg-12 col-sm-12">
                <div class="col-lg-1 col-sm-1"></div>
            <div class="col-lg-4 col-sm-4">
            <div class="form-group">
                <div id="suggest">Project Name<br />
                    <input type="text" placeholder="Project Name" name="p-name" id="project" ><!--onkeyup="suggest(this.value);"                                  onblur="fill();" />
                    <div class="searchBox" id="search" style="display: none;">
                        <div class="suggestionList" id="searchList"> &nbsp; </div>
                    </div>-->
                </div>
            </div>
            <!-- end form-group -->
            <div class="form-group">
                <label>Client Name</label>
                <input type="text" placeholder="Client Name" name="c-name">
            </div>
            <div class="form-group">
                <label>Client Company</label>
                <input type="text" placeholder="Client Company" name="c-company">
            </div>
            <div class="form-group">
                <label>Project Value</label>
                <input type="number" placeholder="Project Value" name="p-value">
            </div>
            <div class="form-group">
                <label>Project Duration</label>
                <input type="text" placeholder="Duration (By Month)" name="p-duration">
            </div>

            </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="form-group">
                        <label>Project Type</label>
                        <label>
                            <select class='type' name="type" required>
                                <option value="">[-Select type-]</option>
                                <option value="Road & Highways"> Road & Highways</option>
                                <option value="Building">Building</option>
                                <option value="Renovation">Renovation</option>
                                <option value="Water Supply" >Water Supply & Drainge Systems</option>
                                <option value="Paving Blocks" >Paving blocks</option>
                                <option value="Other">Other</option>
                            </select>
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Select image to upload:</label>
                        <div class="upload" ><input class="btn btn-warning" type="file" name="files[]" onchange="readURL(this)" /></div>
                        Note: Supported image format: .jpeg, .jpg, .png, .gif<br><br>
                        <img id="blah" src="../../public/images/default.jpg" style="border: 1px solid black" alt="your image" />
                    </div>
                </div>
                    <!-- end form-group -->
                    <div class="col-lg-3 col-sm-3">
                        <div class="form-group">
                            <label>Progress</label>
                            <input type="number" placeholder="Progress" name="progress">
                        </div>
                        <div class="form-group">
                            <label>Project Location</label>
                            <input type="text" placeholder="Project Location" name="p-location">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" placeholder="Description" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <button id='btn-signup' type="submit" >Save</button>
                        </div>
                    </div>
            </div>
            <!-- end form-group -->
        </form>
    </div>
            <!-- end modal-body ->
        </div>
        <!-- end modal-content ->
    </div>
    <!-- end modal-dialog ->
</div>-->
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
<?php include'../templates/footer.php';?>