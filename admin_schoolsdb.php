<?php
session_start();
require 'connect.php';
$dio=mysqli_query($db,"SELECT * FROM diocese ORDER BY diocese_name");
$scool=mysqli_query($db,"SELECT school.school_id,school.school_name,diocese.diocese_name 
       FROM school
       JOIN diocese
       ON school.diocese_id=diocese.diocese_id");
if(isset($_POST['submit']))
  {
    $s1 = $_POST['nschool'];
    $s2 = $_POST['diocese'];
    $s3 = $_POST['uname'];
    $s4 = $_POST['pword'];
    $s5 = $_POST['coor_fname'];
    $s6 = $_POST['coor_mname'];
    $s7 = $_POST['coor_lname'];
    $school=mysqli_query($db,"SELECT school_id from school");
   // $school1=mysqli_fetch_row($school);

    while($r=mysqli_fetch_assoc($school))
    {
      $schid=$r['school_id'];
    }

    $coord=mysqli_query($db,"SELECT account_id from account");
    //$coord1=mysqli_fetch_row($coord);

    while($s=mysqli_fetch_assoc($coord))
    {
      $coordid=$s['account_id'];
    }

    $schid=$schid+1;
    $coordid=$coordid+1;

     mysqli_query($db, "INSERT INTO school (school_name,diocese_id) 
       VALUES ('$s1','$s2')");
     mysqli_query($db,"INSERT INTO account (username,pword,user_id,account_id) 
       VALUES ('$s3','$s4','2','$coordid')");
     mysqli_query($db,"INSERT INTO coordinator (fname,mname,lname,school_id,account_id) 
       VALUES ('$s5','$s6','$s7','$schid','$coordid')" );
     header("Location:admin_main.php");
  }
  ?>