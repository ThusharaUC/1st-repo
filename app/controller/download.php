
<?php
$FileName = $_GET['file'];  // the name of the file that is downloaded
$FilePath = "../../public/";  // the folder of the file that is downloaded , you can put the file in a folder on the server just for more order

$size = filesize($FilePath . $FileName) ;
header("Content-Type: application/force-download; name=\"". $FileName ."\"");
header("Content-Transfer-Encoding: binary");
header("Content-Length: ". $size ."");
header("Content-Disposition: attachment; filename=\"". $FileName ."\"");
header("Expires: 0");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
echo (readfile($FilePath . $FileName));
?>
