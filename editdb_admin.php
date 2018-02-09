<?php
require 'connect.php';
$username=$_SESSION['username'];
$sch=mysqli_query($db,"SELECT school.school_name,diocese.diocese_name,school.school_id
FROM school
INNER JOIN diocese
ON school.diocese_id=diocese.diocese_id
INNER JOIN coordinator
ON school.school_id=coordinator.school_id
INNER JOIN account
ON coordinator.account_id=account.account_id
WHERE account.username='$username'");
$scn=mysqli_fetch_row($sch);
$id=$_GET['id'];
if(isset($_POST['submit']))
{
  $u1 = $_POST['ulname'];
  $u2 = $_POST['ufname'];
  $u3 = $_POST['umname'];
  $u4 = $_POST['uglevel'];
  $u5 = $_POST['ugender'];
  mysqli_query($db,"UPDATE student 
    SET lname='$u1', fname='$u2', mname='$u3', g_level='$u4', gender='$u5'
    WHERE stud_id='$id'");
        echo "<script>
        alert('Successfully Updated.');
        window.location.href='admin_students.php';
        </script>";
}

//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM student WHERE stud_id=$id");
 
while($res = mysqli_fetch_array($result))
{
$fname=$res[1];
$mname=$res[2];
$lname=$res[3];
$g_level=$res[4];
$gender=$res[6];
}
?>