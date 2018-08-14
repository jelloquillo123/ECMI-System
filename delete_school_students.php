<?php
  session_start();
  require 'connect.php';

$id=$_GET['id'];
//deleting the row from table
$result2 = mysqli_query($db, "DELETE a,s FROM account a JOIN student s ON a.account_id=s.account_id WHERE s.stud_id='$id'");
echo "<script>
        alert('Successfully Deleted.');
        window.location.href='school_students.php';
      </script>";

?>
