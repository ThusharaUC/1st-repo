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
                    <h2 class="title">UPDATE PROJECT</h2>
                    <ol class="breadcrumb">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="projects.php">Project</a></li>
                        <li class="active">Update Project</li>
                    </ol>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>


    <div class="modal-header">
        <h4 class="">Update Project</h4>
    </div>
    <!-- end modal-header -->
    <div class="modal-body">
        <form action="../controller/old-project.php" id='signupform'  enctype="multipart/form-data" method="post">
            <div class="col-lg-12 col-md-12">
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-4 col-md-4">
                    <div class="form-group">
                        <div id="suggest">Project Name<br />
                            <input type="text" placeholder="Project Name" name="p-name" id="project" autocomplete="off" onkeyup="suggest(this.value);"                                  onblur="fill();" />
                            <div class="searchBox display_box" id="search" style="display: none;">
                                <div class="suggestionList" id="searchList"> &nbsp; <br></div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Progress</label>
                        <input type="number" placeholder="Progress" name="progress">
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label>Select image to upload:(one or more)</label>
                        <div class="upload" ><input class="btn btn-warning" type="file" name="files[]" onchange="readURL(this)" multiple/></div>
                        Note: Supported image format: .jpeg, .jpg, .png, .gif<br><br>
                        <img id="blah" src="../../public/images/default.jpg" style="border: 1px solid black" alt="your image" />
                    </div>
                </div>
                <!-- end form-group -->
                <div class="col-lg-1 col-md-1">
                    <div class="form-group">
                        <button id='btn-signup' type="submit" >Save</button>
                    </div>
                </div>
            </div>
            <!-- end form-group -->
        </form>
    </div>
    <!-- end modal-body -->

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
    <script>
        function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET","../controller/load-db.php?q="+str,true);
                xmlhttp.send();
            }
        };
    </script>

<?php include'../templates/footer.php';?>