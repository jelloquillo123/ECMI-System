<?php
  session_start();
  require 'connect.php';

$id=$_GET['id'];

$query= mysqli_query($db,"SELECT account.account_id FROM account JOIN coordinator ON account.account_id=coordinator.account_id WHERE coordinator.school_id='$id'");
$res=mysqli_fetch_row($query);
$acc_id=$res[0];

//deleting the row from table
$result = mysqli_query($db, "DELETE FROM school WHERE school_id='$id'");
$result1 = mysqli_query($db, "DELETE FROM account WHERE account_id='$acc_id'");
$result2 = mysqli_query($db, "DELETE FROM coordinator WHERE school_id='$id'");

if ($result && $result1 && $result2){
	echo "<script>
        alert('Successfully Deleted.');
        window.location.href='admin_schools_list.php';
        </script>";	
}


?>
