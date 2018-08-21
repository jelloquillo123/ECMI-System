<?php
require 'admin_authentication.php';
require 'connect.php';

$id=$_GET['id'];
//deleting the row from table

$result2 = mysqli_query($db, "DELETE a,ad FROM account a JOIN admin ad ON a.account_id=ad.account_id WHERE ad.admin_id='$id'");

if ($result2){
	echo "<script>
        alert('Successfully Deleted.');
        window.location.href='admin_list.php';
        </script>";	
}


?>