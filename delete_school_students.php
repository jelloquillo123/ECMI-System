<?php
require 'school_authentication.php';
  require 'connect.php';

$id=$_GET['id'];
//deleting the row from table
$result2 = mysqli_query($db, "DELETE a,s FROM account a JOIN student s ON a.account_id=s.account_id WHERE s.stud_id='$id'");
if ($result2){
	echo "<script>
	        alert('Successfully Deleted.');
	        window.location.href='school_students.php';
	      </script>";
}
else {
	echo "<script>
	        alert('Error Deleting Record.');
	        window.location.href='school_students.php';
	      </script>";	
}

?>
