<?php
$user_name=$_SESSION['username'];
$admin_name_query = "SELECT coordinator.fname , coordinator.mname , coordinator.lname FROM coordinator JOIN account ON coordinator.account_id = account.account_id WHERE account.username = '$user_name'";
$admin_name_res=mysqli_query($db,$admin_name_query);
$admin_name_fetch= mysqli_fetch_row($admin_name_res);

$coor_fname=$admin_name_fetch[0];
$coor_mname=$admin_name_fetch[1];
$coor_lname=$admin_name_fetch[2];

$coor_name= $coor_fname." ".$coor_lname;

$username = ($_SESSION['username']);
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


?>