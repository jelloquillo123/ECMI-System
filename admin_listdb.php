<?php
require 'admin_authentication.php';
$admin_name_query = "SELECT admin.fname,admin.mname,admin.lname,admin.admin_id,account.username,account.account_id FROM admin JOIN account ON admin.account_id = account.account_id";
$admin_name_res=mysqli_query($db,$admin_name_query);

?>