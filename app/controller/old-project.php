<?php
/**
 * Created by Thush
 */
include '../core/init.php';
include '../models/dbConfig.php';
include '../templates/head.php';
$db=DB::getInstance();
if (isset($_POST['p-name'])) {
    $p_name = $_POST['p-name'];
    $progress = $_POST['progress'];


    extract($_POST);
    $error = array();
    $extension = array("jpeg", "jpg", "png", "gif", "JPEG", "JPG", "PNG", "GIF");
    $txtGalleryName =str_replace(" ","_",$p_name);
    if (!file_exists("../../public/images/photo_gallery/" . $txtGalleryName)) {
        mkdir("../../public/images/photo_gallery/" . $txtGalleryName, 0777, true);
    }

    foreach ($_FILES["files"]["tmp_name"] as $key => $tmp_name) {
        $nfile_name=$_FILES["files"]["name"][$key];
        $file_name=str_replace(" ","_",$nfile_name);
        $nfile_tmp=$_FILES["files"]["tmp_name"][$key];
        $file_tmp=str_replace(" ","_",$nfile_tmp);
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);
        if (in_array($ext, $extension)) {
            if (!file_exists("../../public/images/photo_gallery/" . $txtGalleryName . "/" . $file_name)) {
                move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], "../../public/images/photo_gallery/" . $txtGalleryName . "/" . $file_name);
                $path_name = "/photo_gallery/" . $txtGalleryName . "/" . $file_name;
                $query1 = "INSERT INTO photos(path) VALUES ('$path_name')";
                $res = $db->query($query1)->result();
            } else {
                $filename = basename($file_name, $ext);
                $newFileName = $filename . time() . "." . $ext;
                move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], "../../public/images/photo_gallery/" . $txtGalleryName . "/" . $newFileName);
                $path_name = "/photo_gallery/" . $txtGalleryName . "/" . $newFileName;
                $query1 = "INSERT INTO photos(path) VALUES ('$path_name')";
                $res = $db->query($query1)->result();
            }
        } else {
            array_push($error, "$file_name, ");
        }
    }


    $query = "UPDATE projects SET progress='$progress' WHERE p_name='$p_name'";
    $result=$db->query($query);
    echo '<body class="col-sm-12" style="background-color:rgba(0,0,0,.4) ">
<div  class="log"><h3 class="log-text">PROJECT UPDATED</h3></div>
</body>
';
    header('Refresh: 2 ; url= '.$_SERVER["HTTP_REFERER"]);
}else{
    echo '<body class="col-sm-12" style="background-color:rgba(0,0,0,.4) ">
<div  class="log"><h3 class="log-text">PROJECT UPDATE FAIL</h3></div>
</body>
';
    header('Refresh: 2 ; url= '.$_SERVER["HTTP_REFERER"]);
}