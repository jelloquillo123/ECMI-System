<script>
function prints(){
	window.print();

}
</script>
<style>
table, th, td {
	border: 1px solid black;
}
</style>

<?php
    session_start();
    require 'connect.php';
$to=mysqli_query($db,"SELECT student.stud_id,student.lname,student.fname,student.mname,school.school_name,student.g_level,
student.gender,student.age,account.username,account.pword 
FROM student
JOIN school
ON student.school_id=school.school_id
JOIN account
ON student.account_id=account.account_id");
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="css/dropdowns-enhancement.min.css" rel="stylesheet">

    <!--External CSS-->
    <link rel="stylesheet" type="text/css" href="stylesdbms.css">
</head>

<body onload = "prints();">

<div class="table-responsive">
  <table class="table table-hover" style="background-color:#fff;">
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
  </tr>
</thead>
  <tr>
  <?php
  while($to1=mysqli_fetch_row($to)){
  ?>
    <th><?php echo $to1[0];?></th>
    <td><?php echo $to1[1];?></td>
    <td><?php echo $to1[2];?></td>
    <td><?php echo $to1[3];?></td>
    <td><?php echo $to1[4];?></td>
    <td><?php echo $to1[5];?></td>
    <td><?php echo $to1[6];?></td>
    <td><?php echo $to1[7];?></td>
    <td><?php echo $to1[8];?></td>
    <td><?php echo $to1[9];?></td>
    
  </tr>
  <?php
    }
  ?>
</table>
</div>
</body>