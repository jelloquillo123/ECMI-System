<?php  
 require 'connect.php'; 
 $output = '';
$syear = $_POST['year'];
$stat = $_POST['status'];
$b; $c;
if($syear==''){
    $b = "SELECT `year` FROM `student` GROUP BY `year`";
}
else{
	$b = "SELECT `year` FROM `student` WHERE `year`=$syear";
}
if($stat==''){
    $c="SELECT `t_stat` FROM `student`";
}
else{
    $c = "SELECT `t_stat` FROM `student` WHERE `t_stat`='$stat'";
}
 if(isset($_POST["glevel"]))  
 {  
     
      if($_POST["glevel"] != '')  
      { 
          $grade = $_POST["glevel"];
           $sql = "SELECT student.stud_id,student.lname,student.fname,student.mname,school.school_name,student.g_level,
                  student.gender,student.age,account.username,account.pword 
                  FROM student
                  JOIN school
                  ON student.school_id=school.school_id
                  JOIN account
                  ON student.account_id=account.account_id
                  WHERE student.g_level=".$grade." AND `t_stat` IN (".$c.") AND `year` IN (".$b.")";  
      }
      else  
      {  
           $sql = "SELECT student.stud_id,student.lname,student.fname,student.mname,school.school_name,student.g_level,
                  student.gender,student.age,account.username,account.pword 
                  FROM student
                  JOIN school
                  ON student.school_id=school.school_id
                  JOIN account
                  ON student.account_id=account.account_id
                  WHERE `t_stat` IN (".$c.") AND `year` IN (".$b.")";  
      }  
      $result = mysqli_query($db, $sql);  
    
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
                  <th>School</th>
                  <th>Grade Level</th>
                  <th>Gender</th>
                  <th>Age</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
    <tbody>


    
    <?php

      while($row = mysqli_fetch_row($result))  
      {  
           $output .= '<tr>
                      <td>'.$row[0].'</td>
                       <td>'.$row[1].'</td>
                      <td>'.$row[2].'</td>
                      <td>'.$row[3].'</td>
                      <td>'.$row[4].'</td>
                      <td>'.$row[5].'</td>
                      <td>'.$row[6].'</td>
                      <td>'.$row[7].'</td>
                      <td>'.$row[8].'</td>
                      
                      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a href="edit_students_admin.php?id='.$row[0].'">
                        <button class="btn btn-success btn-md" data-title="Edit" data-toggle="modal" data-target="#edit" name="edit"><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                        <td>
                          <button onclick="del('.$row[0].')" class="btn btn-danger btn-md" data-title="Delete" data-toggle="modal" data-target="#delete" name="delete"><span class="glyphicon glyphicon-trash"></span></button></td>
                        <tr>';  
      } 
      echo $output; 
     echo "</tbody>";
     
 }  

 ?> 
        </tbody>
    </table>
    
      <script type="text/javascript">
            $("#studenttb").footable();
          </script>
    
</body>
</html>


