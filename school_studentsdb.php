<?php
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
  $school=$scn[2];
  $stud=mysqli_query($db,"SELECT stud_id,lname,fname,mname,g_level,gender,age,account_id
  FROM student WHERE school_id='$school'");


if(isset($_POST['submit']))
  {
    $n0 = $_POST['studnum'];
    $n1 = $_POST['lname'];
    $n2 = $_POST['fname'];
    $n3 = $_POST['mname'];
    $n6 = $_POST['glevel'];
    $n7 = $_POST['gender'];
    $n8 = $_POST['bdate'];
    
     
 $studi=mysqli_query($db,"SELECT account_id from account");
    

    while($s=mysqli_fetch_assoc($studi))
    {
      $stuid=$s['account_id'];
    }

      $stuid=$stuid+1;
     
     $today = date("Y-m-d");
     $diff = date_diff(date_create($n8),date_create($today));
     $ag = $diff->format('%y');

     mysqli_query($db,"INSERT INTO account (username,pword,user_id)
        VALUES('$n0','$n0','3')");

     mysqli_query($db, "INSERT INTO student (stud_id,fname,lname,mname,school_id,g_level,gender,account_id,age) 
        VALUES ('$n0','$n2','$n1','$n3','$school','$n6','$n7','$stuid','$n8')");
     echo "<script>
        alert('Successfully Added a Student.');
        window.location.href='school_students.php';
        </script>";
}
?>