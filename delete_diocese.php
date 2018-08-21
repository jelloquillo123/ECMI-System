<?php
require 'admin_authentication.php';
  require 'connect.php';

$id=$_GET['id'];
//deleting the row from table
$result = mysqli_query($db, "DELETE FROM diocese WHERE diocese_id='$id'");
if ($result){
	echo "<script>
        alert('Successfully Deleted.');
        window.location.href='admin_diocese_list.php';
        </script>";	
}


?>