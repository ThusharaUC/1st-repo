<?php
/**
 * Created by Thush
**/

require_once '../core/init.php';
require_once '../models/dbConfig.php';
$db = DB::getInstance();

$name = $_POST['c-name'];
$tel = $_POST['c-tel'];
$company=  $_POST['c-company'];
$email = $_POST['c-email'];

// attempt insert query execution
$sql = "INSERT INTO client ( c_name, c_phone, c_company, c_email) VALUES ('$name', '$tel', '$company', '$email')";
$db->query($sql);
    header('location:../view/clientlist.php');

?>;