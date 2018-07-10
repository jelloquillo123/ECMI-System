<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'connect.php';
$error_message="";
$name_school="";
$coor_fname="";
$coor_mname="";
$coor_lname="";
$uname="";

$dio=mysqli_query($db,"SELECT * FROM diocese ORDER BY diocese_name");
$scool=mysqli_query($db,"SELECT school.school_id,school.school_name,diocese.diocese_name 
       FROM school
       JOIN diocese
       ON school.diocese_id=diocese.diocese_id");
if(isset($_POST['submit']))
  {
    $name_school = $_POST['nschool'];
    $diocese_name = $_POST['diocese'];
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $coor_fname = $_POST['coor_fname'];
    $coor_mname = $_POST['coor_mname'];
    $coor_lname = $_POST['coor_lname'];

    $school=mysqli_query($db,"SELECT school_id from school");
   // $school1=mysqli_fetch_row($school);

    $school_name_query="SELECT * FROM school WHERE school_name = '$name_school' ";
    $school_name_res=mysqli_query($db,$school_name_query);
    if (mysqli_num_rows($school_name_res) > 0 ) {

      $error_message = "Sorry... School name already listed";  
    }
    else {

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
         VALUES ('$school_name','$diocese_name')");
       mysqli_query($db,"INSERT INTO account (username,pword,user_id,account_id) 
         VALUES ('$uname','$pword','2','$coordid')");
       mysqli_query($db,"INSERT INTO coordinator (fname,mname,lname,school_id,account_id) 
         VALUES ('$coor_fname','$coor_mname','$coor_lname','$schid','$coordid')" );
       header("Location:admin_schools_add.php");

    }

  }
  ?>