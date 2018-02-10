<?php
  session_start();
  require 'connect.php';

$id=$_GET['id'];
//deleting the row from table
$result = mysqli_query($db, "DELETE FROM student WHERE stud_id='$id'");
echo "<script>
        alert('Successfully Deleted.');
        window.location.href='school_students.php';
        </script>";

?>
