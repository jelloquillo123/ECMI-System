<?php  
require 'connect.php';
require 'school_studentsdb.php';
//session_start();
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
$stud=mysqli_query($db,"SELECT stud_id,lname,fname,mname,g_level,gender,age,account_id,email,t_stat
  FROM student WHERE school_id='$school'");
$output = '';
$print = '';
$cunt = 0;


if(isset($_POST["glevels"]))  
{  

  if($_POST["glevels"] != '')  
  { 
    $grade = $_POST["glevels"];
    $sql = "SELECT student.stud_id,student.lname,student.fname,student.mname,student.g_level,student.gender,student.age,account.account_id,student.email,student.t_stat
    FROM student
    JOIN account
    ON student.account_id=account.account_id
    WHERE student.g_level=".$grade." AND student.school_id=".$school;  
  }
  else  
  {  
   $sql = "SELECT student.stud_id,student.lname,student.fname,student.mname,student.g_level,student.gender,student.age,account.account_id,student.email,student.t_stat
   FROM student
   JOIN account
   ON student.account_id=account.account_id
   WHERE student.g_level=".$grade." AND student.school_id=".$school; 
 }  
 $result = mysqli_query($db, $sql); 

$num_rows = mysqli_num_rows($result);  
 
 ?>
 <!DOCTYPE html>
 <head>
 </head>
 <body>
  <table class="table table-hover tablecenter" data-paging="true" data-sorting="true" data-filtering="true" id="studenttb" style="background-color:#fff;">
    <thead>
      <tr>
        <th>Student ID</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Grade Level</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Parents Email</th>
        <th>Test status</th>
        <th>Feedback</th>
        <th>Profile</th>
        <th>Delete</th>
        <th>Reset</th>
      </tr>
    </thead>
    <tbody>





      <?php


      while($row = mysqli_fetch_row($result))  
      {  
      $output .= '<tr>
       <th>'.$row[0].'</th>
       <th>'.$row[1].'</th>
       <th>'.$row[2].'</th>
       <th>'.$row[3].'</th>
       <th>'.$row[4].'</th>
       <th>'.$row[5].'</th>
       <th>'.$row[6].'</th>
       <th>'.$row[8].'</th>
       <th>'.$row[9].'</th>
       
       <td align="center"><a href="feedback.php?id='.$row[0].'"><button class="btn btn-primary btn-md" name="feedback" title="Feedback"><span class="glyphicon glyphicon-comment"></span></button></a></td>

       <td><p data-placement="top" data-toggle="tooltip" title="Profile"><a href="edit_students_school.php?id='.$row[0].'">
       <button class="btn btn-success btn-md" data-title="Edit" data-toggle="modal" data-target="#edit" name="edit"><span class="glyphicon glyphicon-user"></span></button></a></p></td>

       <td>
       <button onclick="del('.$row[0].')" class="btn btn-danger btn-md" data-title="Delete" data-toggle="modal" data-target="#delete" name="delete" title="Delete"><span class="glyphicon glyphicon-trash"></span></button></td>

       <td><a href="resetpw.php?id='.$row[7].'">
       <button class="btn btn-warning btn-md" data-title="passreset" data-toggle="modal" data-target="#passreset" name="passreset" title="Reset"><span class="glyphicon glyphicon-refresh"></span></button></a></td>
       </tr>';  

      $print .= '<tr>
       <th>'.$row[0].'</th>
       <th>'.$row[1].'</th>
       <th>'.$row[2].'</th>
       <th>'.$row[3].'</th>
       <th>'.$row[4].'</th>
       <th>'.$row[5].'</th>
       <th>'.$row[6].'</th>
       <th>'.$row[8].'</th>
       <th>'.$row[9].'</th>
       </tr>';
       $cunt = $cunt + 1;
     } 
     echo $output; 
     echo "</tbody>";
     $_SESSION['output'] = $print;
      $_SESSION['studcount'] = $num_rows;
   } 




   ?> 
 </tbody>
</table>

<script type="text/javascript">
 $("#studenttb").footable();
</script>

</body>
</html>


