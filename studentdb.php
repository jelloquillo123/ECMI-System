<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'student_authentication.php';
$username = ($_SESSION['username']);

$pts=mysqli_query($db,"SELECT pre_test.stud_id FROM pre_test
    JOIN student
    ON student.stud_id=pre_test.stud_id
    JOIN account
    ON student.account_id=account.account_id
    WHERE account.username='$username'");
$stud=mysqli_query($db,"SELECT stud_id,fname,mname,lname,g_level,gender,age
FROM student
JOIN account
ON student.account_id=account.account_id
WHERE account.username='$username'");
$stud_det=mysqli_fetch_row($stud);
$studid=$stud_det[0];
$pts1=mysqli_fetch_row($pts);
$pts2=$pts1[0];
?>