<?php
require 'connect.php';
$username=$_SESSION['username'];
$sch=mysqli_query($db,"SELECT school.school_id,school.school_name,diocese.diocese_name
FROM school
INNER JOIN diocese
ON school.diocese_id=diocese.diocese_id
INNER JOIN coordinator
ON school.school_id=coordinator.school_id
INNER JOIN account
ON coordinator.account_id=account.account_id
WHERE account.username='$username'");
$id=$_GET['id'];
if(isset($_POST['submit']))
{
  $u1 = $_POST['clname'];
  $u2 = $_POST['cfname'];
  $u3 = $_POST['cmname'];
  $u4 = $_POST['cuname'];
  $u6 = $_POST['cdio'];
  $u7 = $_POST['nsch'];
  $u8 = $_POST['coor_cnum'];
  $u9 = $_POST['coor_email'];
  mysqli_query($db,"UPDATE coordinator
    SET lname='$u1', fname='$u2', mname='$u3'
    WHERE school_id='$id'");
  mysqli_query($db,"UPDATE account
    INNER JOIN coordinator
    ON account.account_id=coordinator.account_id
    SET username='$u4'
    WHERE school_id='$id'");
  mysqli_query($db,"UPDATE school
    SET school_name='$u7', diocese_id='$u6',contact_num='$u8',contact_email='$u9'
    WHERE school_id='$id'");
        echo "<script>
        alert('Successfully Updated.');
        window.location.href='admin_schools_list.php';
        </script>";
}

//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT school.school_id,school.school_name,coordinator.fname,coordinator.mname,coordinator.lname,account.username,account.pword,diocese.diocese_name,diocese.diocese_id,school.contact_num,school.contact_email
FROM coordinator 
INNER JOIN school 
ON coordinator.school_id=school.school_id
INNER JOIN account
ON coordinator.account_id=account.account_id
INNER JOIN diocese
ON school.diocese_id=diocese.diocese_id
WHERE coordinator.school_id=$id"); 

while($scn=mysqli_fetch_row($result))
{
$nsc=$scn[1];
$fname=$scn[2];
$mname=$scn[3];
$lname=$scn[4];
$usrnm=$scn[5];
$psswrd=$scn[6];
$dionm=$scn[7];
$dioid=$scn[8];
$coor_cnum=$scn[9];
$coor_email=$scn[10];
}
?>