<?php
/**
 * Created by PhpStorm.
 * User: Thush
 * Date: 2/10/2016
 * Time: 7:04 PM
 */

include '../models/dbConfig.php';
include '../core/init.php';
include '../templates/head.php';
$db=DB::getInstance();

if(isset($_POST['username'])) {
    $username		= $_POST["username"];
    $password		= $_POST["password"];

    $result = $db->query("SELECT * FROM login WHERE u_name= '$username'")->result();
    $userRow=$db->query("SELECT * FROM login WHERE u_name= '$username'")->count();


    if($userRow > 0){
        if(password_verify($password,$result[0]->password)){
            $_SESSION['new_user'] = $result[0]->u_name;
            echo '<body class="col-sm-12" style="background-color:rgba(0,0,0,.4) ">
<div  class="log"><h3 class="log-text">LOGIN SUCCESS</h3></div>
</body>
';
            header('Refresh: 2 ; url= '.$_SERVER["HTTP_REFERER"]);
            return true;
        }
    }

    else{
        echo '<body class="col-sm-12" style="background-color:rgba(0,0,0,.4) ">
<div  class="log"><h3 class="log-text">LOGIN FAIL</h3></div>
</body>
';
        header('Refresh: 2 ; url=../view/home.php');
    }


}

?>;