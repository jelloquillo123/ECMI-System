<?php
require 'admin_authentication.php';
$user_name=$_SESSION['username'];
$admin_name_query = "SELECT admin.fname , admin.mname , admin.lname, account.account_id FROM admin JOIN account ON admin.account_id = account.account_id WHERE account.username = '$user_name'";
$admin_name_res=mysqli_query($db,$admin_name_query);
$admin_name_fetch= mysqli_fetch_row($admin_name_res);

$admin_fname=$admin_name_fetch[0];
$admin_mname=$admin_name_fetch[1];
$admin_lname=$admin_name_fetch[2];
$acc_id=$admin_name_fetch[3];

$admin_name= $admin_fname." ".$admin_lname;

?>