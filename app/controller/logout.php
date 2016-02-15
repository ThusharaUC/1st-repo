<?php
/**
 * Created by Thush
 * Date: 2/10/2016
 * Time: 7:17 PM
 */

include '../templates/head.php';
unset($_SESSION['new_user']);
$_SESSION['new_user'] = "";
session_destroy();

if ($_SESSION['new_user']=="") {
    echo '<body class="col-sm-12" style="background-color:rgba(0,0,0,.4) ">
<div  class="log"><h3 class="log-text">LOGOUT SUCCESS</h3></div>
</body>
';
    header('Refresh: 2 ; url=../../index.php');
}
?>
