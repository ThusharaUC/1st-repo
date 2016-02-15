<?php
/**
 * Created by PhpStorm.
 * User: Thush
 * Date: 2/10/2016
 * Time: 7:50 PM
 */
include '../core/init.php';
include '../models/dbConfig.php';
$db=DB::getInstance();
$pwd="sidath@1212";
$pw=password_hash($pwd, PASSWORD_DEFAULT);
echo $pw;
echo "<br>";
$q= "SELECT * FROM login WHERE u_name='Admin'";
$re=$db->query($q)->result();
echo password_verify($pwd,$re[0]->password);
