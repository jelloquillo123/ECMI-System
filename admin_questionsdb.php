<?php
require 'admin_authentication.php';
if(isset($_POST['submit'])){
$qt1=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='1' ");
$qs1=mysqli_fetch_row($qt1);

$qt2=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='2' ");
$qs2=mysqli_fetch_row($qt2);

$qt3=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='3' ");
$qs3=mysqli_fetch_row($qt3);

$qt4=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='4' ");
$qs4=mysqli_fetch_row($qt4);

$qt5=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='5' ");
$qs5=mysqli_fetch_row($qt5);

$qt6=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='6' ");
$qs6=mysqli_fetch_row($qt6);

$qt7=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='7' ");
$qs7=mysqli_fetch_row($qt7);

$qt8=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='8' ");
$qs8=mysqli_fetch_row($qt8);

$qt9=mysqli_query($db,"SELECT questions.question,choices.a,choices.b,choices.c,choices.d FROM questions INNER JOIN choices ON questions.q_id=choices.q_id WHERE questions.gr_group='$_POST[grdlvl]' AND questions.q_num='9' ");
$qs9=mysqli_fetch_row($qt9);
}
?>