<?php
/**
 * Created by Thush
 */
include '../core/init.php';
include '../models/dbConfig.php';
include '../templates/head.php';
$db=DB::getInstance();
echo $_POST['p-name'];
if (isset($_POST['p-name'])) {
    $p_name = $_POST['p-name'];
    $c_name = $_POST['c-name'];
    $compnay = $_POST['c-company'];
    $value = $_POST['p-value'];
    $type = $_POST['type'];
    $duration = $_POST['p-duration'];
    $progress = $_POST['progress'];
    $locat = $_POST['p-location'];
    extract($_POST);
    $error=array();
    $extension=array("jpeg","jpg","png","gif","JPEG","JPG","PNG","GIF");
    $txtGalleryName=str_replace(" ","_",$p_name);
    if (!file_exists("../../public/images/photo_gallery/".$txtGalleryName)) {
        mkdir("../../public/images/photo_gallery/".$txtGalleryName, 0777, true);
    }
    echo $_FILES["files"]["tmp_name"][0];
    foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
    {
        $nfile_name=$_FILES["files"]["name"][$key];
        $file_name=str_replace(" ","_",$nfile_name);
        $nfile_tmp=$_FILES["files"]["tmp_name"][$key];
        $file_tmp=str_replace(" ","_",$nfile_tmp);
        $ext=pathinfo($file_name,PATHINFO_EXTENSION);
        if(in_array($ext,$extension))
        {
            if(!file_exists("../../public/images/photo_gallery/".$txtGalleryName."/".$file_name))
            {
                move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../../public/images/photo_gallery/".$txtGalleryName."/".$file_name);
                $path_name="/photo_gallery/".$txtGalleryName."/".$file_name;
                $path=str_replace(" ","_",$path_name);
            }
            else
            {
                $filename=basename($file_name,$ext);
                $newFileName=$filename.time().".".$ext;
                move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../../public/images/photo_gallery/".$txtGalleryName."/".$newFileName);
                $path_name="/photo_gallery/".$txtGalleryName."/".$newFileName;
                $path=str_replace(" ","_",$path_name);
            }
        }
        else
        {
            array_push($error,"$file_name, ");
        }
    }


    $query = "INSERT IGNORE INTO projects(p_name,p_client,c_company,p_type, p_value,p_period, p_photo, progress) VALUES ('$p_name','$c_name','$compnay','$type','$value','$duration','$path','$progress','$locat')";
    $result=$db->query($query);
    echo '<body class="col-sm-12" style="background-color:rgba(0,0,0,.4) ">
<div  class="log"><h3 class="log-text">PROJECT ADDED</h3></div>
</body>
';
    header('Refresh: 2 ; url= '.$_SERVER["HTTP_REFERER"]);
}
else{
    echo '<body class="col-sm-12" style="background-color:rgba(0,0,0,.4) ">
<div  class="log"><h3 class="log-text">PROJECT NOT ADDED</h3></div>
</body>
';
    header('Refresh: 2 ; url= '.$_SERVER["HTTP_REFERER"]);
}