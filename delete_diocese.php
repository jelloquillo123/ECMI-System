<?php
  session_start();
  require 'connect.php';

$id=$_GET['id'];
//deleting the row from table
$result = mysqli_query($db, "DELETE FROM diocese WHERE diocese_id='$id'");
if ($result){
	echo "<script>
        alert('Successfully Deleted.');
        window.location.href='admin_main.php';
        </script>";	
}


?>