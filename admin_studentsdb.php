<?php
// $username = ($_SESSION['username']);
$to=mysqli_query($db,"SELECT student.stud_id,student.lname,student.fname,student.mname,school.school_name,student.g_level,
  student.gender,student.age,account.username,account.pword 
  FROM student
  JOIN school
  ON student.school_id=school.school_id
  JOIN account
  ON student.account_id=account.account_id");
$total_studentq=mysqli_query($db,"SELECT COUNT(student.stud_id)FROM student");
$total_student=mysqli_fetch_row($total_studentq);
?>