<?php
require 'student_authentication.php';
$username = ($_SESSION['username']);

  $stud=mysqli_query($db,"SELECT student.stud_id,student.fname,student.mname,student.lname,student.g_level,student.gender,student.age,student.fam_id
  FROM student 
  JOIN account
  ON student.account_id=account.account_id
  WHERE account.username='$username'");
  $stud_det=mysqli_fetch_row($stud);
  $cou=mysqli_query($db,"SELECT country_id,country_name FROM country");
  $par=mysqli_query($db,"SELECT job_id,job_name FROM job");
  
   



  if(isset($_POST['submit']))
  {
    $v1 = $_POST['q1'];
    $v2 = $_POST['q2'];
    $v3 = $_POST['q3'];
    $v4 = $_POST['q4'];
    $v5 = $_POST['q5'];
    $v6 = $_POST['q6'];
    $v7 = $_POST['q7'];
    $v8 = $_POST['q8'];
    $v9 = $_POST['q9'];
    $p1 = $_POST['parent'];
    $p2 = $_POST['country'];
    $p3 = $_POST['work'];
    $p4 = $_POST['duration'];
    $p5 = $_POST['when'];
   


//$st=mysqli_query($db,"SELECT stud_id FROM student 
//JOIN account
//ON student.account_id=account.account_id WHERE username='$username'");



$d=mysqli_fetch_row($st);

$pare=mysqli_query($db,"SELECT parent_id FROM parent");
while($pp=mysqli_fetch_assoc($pare))
    {
      $pares=$pp['parent_id'];
    }

      $pares=$pares+1;
  $fam_c=mysqli_query($db,"SELECT fam_id FROM family");  
  while($fam_co=mysqli_fetch_assoc($fam_c))
  {

    $fam_cou=$fam_co['fam_id'];

  }

$fam_cou=$fam_cou+1;




    mysqli_query($db,"INSERT INTO parent
    (parent_who,country_id,job_id,years_stay,parent_when)
    VALUES ('$p1','$p2','$p3','$p4','$p5')");
    

    mysqli_query($db, "INSERT INTO pre_test 
    (stud_id,question_1,question_2,question_3,question_4,question_5,question_6,question_7,question_8,question_9) 
    VALUES ('$stud_det[0]','$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v9')");
    
    //mali na to
     mysqli_query($db, "INSERT INTO family (fam_id,parent_id)
        VALUES ('$stud_det[7]','$pares')");

     mysqli_query($db,"UPDATE student SET fam_id='$fam_cou' WHERE stud_id='$stud_det[0]'  ");

     mysqli_query($db,"UPDATE student SET t_stat='Taken' WHERE stud_id='$stud_det[0]' ");

    

    header("Location:student.php");
  }
?>