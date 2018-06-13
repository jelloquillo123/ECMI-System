<?php
require 'connect.php';
$username=$_SESSION['username'];
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
$id=$_GET['id'];
if(isset($_POST['submit']))
{
  $u1 = $_POST['ulname'];
  $u2 = $_POST['ufname'];
  $u3 = $_POST['umname'];
  $u4 = $_POST['uglevel'];
  $u5 = $_POST['ugender'];
  mysqli_query($db,"UPDATE student 
    SET lname='$u1', fname='$u2', mname='$u3', g_level='$u4', gender='$u5'
    WHERE stud_id='$id'");
        echo "<script>
        alert('Successfully Updated.');
        window.location.href='school_students.php';
        </script>";
}

//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM student WHERE stud_id=$id");
 
while($res = mysqli_fetch_array($result))
{
$fname=$res[1];
$mname=$res[2];
$lname=$res[3];
$g_level=$res[4];
$gender=$res[6];
}
?>

      <?php
$sql_ans=mysqli_query($db,"SELECT * FROM pre_test INNER JOIN student ON pre_test.stud_id=student.stud_id  WHERE pre_test.stud_id='$id' ");
$ans=mysqli_fetch_row($sql_ans);

$qt1=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='1' ");
$qs1=mysqli_fetch_row($qt1);

$qt2=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='2' ");
$qs2=mysqli_fetch_row($qt2);

$qt3=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='3' ");
$qs3=mysqli_fetch_row($qt3);

$qt4=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='4' ");
$qs4=mysqli_fetch_row($qt4);

$qt5=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='5' ");
$qs5=mysqli_fetch_row($qt5);

$qt6=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='6' ");
$qs6=mysqli_fetch_row($qt6);

$qt7=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='7' ");
$qs7=mysqli_fetch_row($qt7);

$qt8=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='8' ");
$qs8=mysqli_fetch_row($qt8);

$qt9=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='1' AND questions.q_num='9' ");
$qs9=mysqli_fetch_row($qt9);



$sql_feed1=mysqli_query($db,"SELECT $ans[2] from choices WHERE gr_group='1' AND q_num='1'    ");
$feed1=mysqli_fetch_row($sql_feed1);

$sql_feed2=mysqli_query($db,"SELECT $ans[3] from choices WHERE gr_group='1' AND q_num='2'    ");
$feed2=mysqli_fetch_row($sql_feed2);

$sql_feed3=mysqli_query($db,"SELECT $ans[4] from choices WHERE gr_group='1' AND q_num='3'    ");
$feed3=mysqli_fetch_row($sql_feed3);

$sql_feed4=mysqli_query($db,"SELECT $ans[5] from choices WHERE gr_group='1' AND q_num='4'    ");
$feed4=mysqli_fetch_row($sql_feed4);

$sql_feed5=mysqli_query($db,"SELECT $ans[6] from choices WHERE gr_group='1' AND q_num='5'    ");
$feed5=mysqli_fetch_row($sql_feed5);

$sql_feed6=mysqli_query($db,"SELECT $ans[7] from choices WHERE gr_group='1' AND q_num='6'    ");
$feed6=mysqli_fetch_row($sql_feed6);

$sql_feed7=mysqli_query($db,"SELECT $ans[8] from choices WHERE gr_group='1' AND q_num='7'    ");
$feed7=mysqli_fetch_row($sql_feed7);

$sql_feed8=mysqli_query($db,"SELECT $ans[9] from choices WHERE gr_group='1' AND q_num='8'    ");
$feed8=mysqli_fetch_row($sql_feed8);

$sql_feed9=mysqli_query($db,"SELECT $ans[10] from choices WHERE gr_group='1' AND q_num='9'    ");
$feed9=mysqli_fetch_row($sql_feed9);


?>