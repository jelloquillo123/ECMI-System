<?php
// session_start();
require 'connect.php';
$dio=mysqli_query($db,"SELECT * FROM diocese ORDER BY diocese_name");
$scool=mysqli_query($db,"SELECT school.school_id,school.school_name,diocese.diocese_name 
       FROM school
       JOIN diocese
       ON school.diocese_id=diocese.diocese_id");
if(isset($_POST['diocese_submit']))
  {
     $school=mysqli_query($db,"SELECT school_id from school");
    $d1 = $_POST['dioname'];
     mysqli_query($db, "INSERT INTO diocese (diocese_name) 
       VALUES ('$d1')");
     header("Location:admin_main.php");
  }
  ?>