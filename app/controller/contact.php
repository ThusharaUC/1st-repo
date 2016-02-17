<?php
/**
 * Created by Thush
 * Date: 2/16/2016
 * Time: 12:24 PM
 */
include '../templates/head.php';
include'../models/dbConfig.php';
include '../core/init.php';
$db=DB::getInstance();

if (isset($_POST['name'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $sub=$_POST['subject'];
    $msg=$_POST['message'];

    $query="INSERT INTO feedback (name,email,mobile,topic,message) VALUES ('$name','$email','$phone','$sub','$msg')";
    $res=$db->query($query);
    echo '<body class="col-sm-12" style="background-color:rgba(0,0,0,.4) ">
<div  class="log"><h3 class="log-text">MESSAGE SUBMITTED</h3></div>
</body>
';
    header('Refresh: 1 ; url= '.$_SERVER["HTTP_REFERER"]);
}
else{echo '<body class="col-sm-12" style="background-color:rgba(0,0,0,.4) ">
<div  class="log"><h4 class="log-text">Oops..! Somthing went wrong </h3></div>
</body>
';
    header('Refresh: 2 ; url= '.$_SERVER["HTTP_REFERER"]);
}