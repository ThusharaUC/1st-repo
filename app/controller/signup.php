<?php

include '../core/init.php';
include '../models/dbConfig.php';
$db=DB::getInstance();

if ((isset($_POST['email']))&& ($_POST['email']!="")){
    $id = $_POST['client_ID'];
    $u_email=$_POST['email'];
    $pwd=$_POST['password'];
    $re_pwd = $_POST['repassword'];

    $new_pwd = password_hash($pwd, PASSWORD_DEFAULT);

    $sql = "INSERT INTO login(c_id,u_name,password) VALUES ('$id','$u_email','$new_pwd')";
    $db->query($sql);
    header('Refresh: 3 ; url=../view/home.php');

}