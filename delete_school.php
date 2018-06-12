<?php
  session_start();
  require 'connect.php';

$id=$_GET['id'];
//deleting the row from table
$result = mysqli_query($db, "DELETE FROM school WHERE school_id='$id'");
$result1 = mysqli_query($db, "DELETE FROM coordinator WHERE school_id='$id'");
if ($result && $result1){
	echo "<script>
        alert('Successfully Deleted.');
        window.location.href='admin_schools_add.php';
        </script>";	
}


?>
