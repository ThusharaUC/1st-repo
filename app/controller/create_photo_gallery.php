<?php

extract($_POST);
$error=array();
$extension=array("jpeg","jpg","png","gif","JPEG","JPG","PNG","GIF");
$txtGalleryName="";
if (!file_exists("../../public/images/photo_gallery/".$txtGalleryName)) {
    mkdir("../../public/images/photo_gallery/".$txtGalleryName, 0777, true);
}
echo $_FILES["files"]["tmp_name"][0];
foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
{
    $file_name=$_FILES["files"]["name"][$key];
    $file_tmp=$_FILES["files"]["tmp_name"][$key];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
    if(in_array($ext,$extension))
    {
        if(!file_exists("../../public/images/photo_gallery/".$txtGalleryName."/".$file_name))
        {
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../../public/images/photo_gallery/".$txtGalleryName."/".$file_name);
            $pathname="../../public/images/photo_gallery/".$txtGalleryName."/".$file_name;
            echo $pathname;
        }
        else
        {
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            move_uploaded_file($file_tmp=$_FILES["files"]["tmp_name"][$key],"../../public/images/photo_gallery/".$txtGalleryName."/".$newFileName);
            $pathname="../../public/images/photo_gallery/".$txtGalleryName."/".$newFileName;
            echo $pathname;
        }
    }
    else
    {
        array_push($error,"$file_name, ");
    }
}
?>