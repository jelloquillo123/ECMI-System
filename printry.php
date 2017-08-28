
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

$a1=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_1='a'");
$a2=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_1='b'");
$a3=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_1='c'");
$a4=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_1='d'");
$a5=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_1='e'");

$a6=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_2='a'");
$a7=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_2='b'");
$a8=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_2='c'");
$a9=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_2='d'");
$a10=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_2='e'");

$a11=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_3='a'");
$a12=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_3='b'");
$a13=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_3='c'");
$a14=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_3='d'");
$a15=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_3='e'");

$a16=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_4='a'");
$a17=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_4='b'");
$a18=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_4='c'");
$a19=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_4='d'");
$a20=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_4='e'");

$a21=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_5='a'");
$a22=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_5='b'");
$a23=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_5='c'");

$a24=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_6='a'");
$a25=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_6='b'");
$a26=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_6='c'");

$a27=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_7='a'");
$a28=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_7='b'");
$a29=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_7='c'");

$a30=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_8='a'");
$a31=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_8='b'");
$a32=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_8='c'");

$a33=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_9='a'");
$a34=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_9='b'");
$a35=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='4' AND pre_test.question_9='c'");





//GRADE 5

$b1=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_1='a'");
$b2=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_1='b'");
$b3=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_1='c'");
$b4=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_1='d'");
$b5=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_1='e'");

$b6=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_2='a'");
$b7=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_2='b'");
$b8=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_2='c'");
$b9=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_2='d'");
$b10=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_2='e'");

$b11=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_3='a'");
$b12=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_3='b'");
$b13=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_3='c'");
$b14=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_3='d'");
$b15=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_3='e'");

$b16=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_4='a'");
$b17=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_4='b'");
$b18=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_4='c'");
$b19=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_4='d'");
$b20=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_4='e'");

$b21=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_5='a'");
$b22=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_5='b'");
$b23=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_5='c'");

$b24=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_6='a'");
$b25=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_6='b'");
$b26=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_6='c'");

$b27=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_7='a'");
$b28=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_7='b'");
$b29=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_7='c'");

$b30=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_8='a'");
$b31=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_8='b'");
$b32=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_8='c'");

$b33=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_9='a'");
$b34=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_9='b'");
$b35=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='5' AND pre_test.question_9='c'");






//grade 6
$c1=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_1='a'");
$c2=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_1='b'");
$c3=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_1='c'");
$c4=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_1='d'");
$c5=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_1='e'");

$c6=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_2='a'");
$c7=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_2='b'");
$c8=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_2='c'");
$c9=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_2='d'");
$c10=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_2='e'");

$c11=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_3='a'");
$c12=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_3='b'");
$c13=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_3='c'");
$c14=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_3='d'");
$c15=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_3='e'");

$c16=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_4='a'");
$c17=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_4='b'");
$c18=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_4='c'");
$c19=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_4='d'");
$c20=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_4='e'");

$c21=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_5='a'");
$c22=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_5='b'");
$c23=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_5='c'");

$c24=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_6='a'");
$c25=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_6='b'");
$c26=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_6='c'");

$c27=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_7='a'");
$c28=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_7='b'");
$c29=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_7='c'");

$c30=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_8='a'");
$c31=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_8='b'");
$c32=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_8='c'");

$c33=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_9='a'");
$c34=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_9='b'");
$c35=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='6' AND pre_test.question_9='c'");




//grade 7

$d1=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_1='a'");
$d2=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_1='b'");
$d3=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_1='c'");
$d4=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_1='d'");
$d5=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_1='e'");

$d6=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_2='a'");
$d7=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_2='b'");
$d8=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_2='c'");
$d9=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_2='d'");
$d10=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_2='e'");

$d11=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_3='a'");
$d12=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_3='b'");
$d13=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_3='c'");
$d14=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_3='d'");
$d15=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_3='e'");

$d16=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_4='a'");
$d17=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_4='b'");
$d18=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_4='c'");
$d19=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_4='d'");
$d20=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_4='e'");

$d21=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_5='a'");
$d22=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_5='b'");
$d23=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_5='c'");

$d24=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_6='a'");
$d25=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_6='b'");
$d26=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_6='c'");

$d27=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_7='a'");
$d28=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_7='b'");
$d29=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_7='c'");

$d30=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_8='a'");
$d31=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_8='b'");
$d32=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_8='c'");

$d33=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_9='a'");
$d34=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_9='b'");
$d35=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='7' AND pre_test.question_9='c'");





//grade 8
$e1=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_1='a'");
$e2=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_1='b'");
$e3=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_1='c'");
$e4=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_1='d'");
$e5=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_1='e'");

$e6=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_2='a'");
$e7=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_2='b'");
$e8=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_2='c'");
$e9=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_2='d'");
$e10=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_2='e'");

$e11=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_3='a'");
$e12=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_3='b'");
$e13=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_3='c'");
$e14=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_3='d'");
$e15=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_3='e'");

$e16=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_4='a'");
$e17=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_4='b'");
$e18=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_4='c'");
$e19=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_4='d'");
$e20=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_4='e'");

$e21=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_5='a'");
$e22=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_5='b'");
$e23=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_5='c'");

$e24=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_6='a'");
$e25=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_6='b'");
$e26=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_6='c'");

$e27=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_7='a'");
$e28=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_7='b'");
$e29=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_7='c'");

$e30=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_8='a'");
$e31=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_8='b'");
$e32=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_8='c'");

$e33=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_9='a'");
$e34=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_9='b'");
$e35=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='8' AND pre_test.question_9='c'");



//grade 9

$f1=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_1='a'");
$f2=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_1='b'");
$f3=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_1='c'");
$f4=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_1='d'");
$f5=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_1='e'");

$f6=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_2='a'");
$f7=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_2='b'");
$f8=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_2='c'");
$f9=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_2='d'");
$f10=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_2='e'");

$f11=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_3='a'");
$f12=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_3='b'");
$f13=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_3='c'");
$f14=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_3='d'");
$f15=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_3='e'");

$f16=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_4='a'");
$f17=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_4='b'");
$f18=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_4='c'");
$f19=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_4='d'");
$f20=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_4='e'");

$f21=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_5='a'");
$f22=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_5='b'");
$f23=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_5='c'");

$f24=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_6='a'");
$f25=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_6='b'");
$f26=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_6='c'");

$f27=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_7='a'");
$f28=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_7='b'");
$f29=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_7='c'");

$f30=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_8='a'");
$f31=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_8='b'");
$f32=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_8='c'");

$f33=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_9='a'");
$f34=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_9='b'");
$f35=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='9' AND pre_test.question_9='c'");

// grade 10


$g1=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_1='a'");
$g2=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_1='b'");
$g3=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_1='c'");
$g4=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_1='d'");
$g5=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_1='e'");

$g6=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_2='a'");
$g7=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_2='b'");
$g8=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_2='c'");
$g9=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_2='d'");
$g10=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_2='e'");

$g11=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_3='a'");
$g12=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_3='b'");
$g13=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_3='c'");
$g14=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_3='d'");
$g15=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_3='e'");

$g16=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_4='a'");
$g17=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_4='b'");
$g18=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_4='c'");
$g19=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_4='d'");
$g20=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_4='e'");

$g21=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_5='a'");
$g22=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_5='b'");
$g23=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_5='c'");

$g24=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_6='a'");
$g25=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_6='b'");
$g26=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_6='c'");

$g27=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_7='a'");
$g28=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_7='b'");
$g29=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_7='c'");

$g30=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_8='a'");
$g31=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_8='b'");
$g32=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_8='c'");

$g33=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_9='a'");
$g34=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_9='b'");
$g35=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='10' AND pre_test.question_9='c'");


// grade 1


$h1=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_1='a'");
$h2=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_1='b'");
$h3=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_1='c'");
$h4=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_1='d'");
$h5=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_1='e'");

$h6=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_2='a'");
$h7=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_2='b'");
$h8=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_2='c'");
$h9=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_2='d'");
$h10=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_2='e'");

$h11=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_3='a'");
$h12=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_3='b'");
$h13=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_3='c'");
$h14=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_3='d'");
$h15=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_3='e'");

$h16=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_4='a'");
$h17=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_4='b'");
$h18=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_4='c'");
$h19=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_4='d'");
$h20=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_4='e'");

$h21=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_5='a'");
$h22=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_5='b'");
$h23=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_5='c'");

$h24=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_6='a'");
$h25=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_6='b'");
$h26=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_6='c'");

$h27=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_7='a'");
$h28=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_7='b'");
$h29=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_7='c'");

$h30=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_8='a'");
$h31=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_8='b'");
$h32=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_8='c'");

$h33=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_9='a'");
$h34=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_9='b'");
$h35=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='1' AND pre_test.question_9='c'");


// grade 2


$i1=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_1='a'");
$i2=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_1='b'");
$i3=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_1='c'");
$i4=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_1='d'");
$i5=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_1='e'");

$i6=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_2='a'");
$i7=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_2='b'");
$i8=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_2='c'");
$i9=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_2='d'");
$i10=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_2='e'");

$i11=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_3='a'");
$i12=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_3='b'");
$i13=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_3='c'");
$i14=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_3='d'");
$i15=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_3='e'");

$i16=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_4='a'");
$i17=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_4='b'");
$i18=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_4='c'");
$i19=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_4='d'");
$i20=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_4='e'");

$i21=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_5='a'");
$i22=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_5='b'");
$i23=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_5='c'");

$i24=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_6='a'");
$i25=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_6='b'");
$i26=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_6='c'");

$i27=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_7='a'");
$i28=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_7='b'");
$i29=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_7='c'");

$i30=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_8='a'");
$i31=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_8='b'");
$i32=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_8='c'");

$i33=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_9='a'");
$i34=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_9='b'");
$i35=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='2' AND pre_test.question_9='c'");



// grade 3


$j1=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_1='a'");
$j2=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_1='b'");
$j3=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_1='c'");
$j4=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_1='d'");
$j5=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_1='e'");

$j6=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_2='a'");
$j7=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_2='b'");
$j8=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_2='c'");
$j9=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_2='d'");
$j10=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_2='e'");

$j11=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_3='a'");
$j12=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_3='b'");
$j13=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_3='c'");
$j14=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_3='d'");
$j15=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_3='e'");

$j16=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_4='a'");
$j17=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_4='b'");
$j18=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_4='c'");
$j19=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_4='d'");
$j20=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_4='e'");

$j21=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_5='a'");
$j22=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_5='b'");
$j23=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_5='c'");

$j24=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_6='a'");
$j25=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_6='b'");
$j26=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_6='c'");

$j27=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_7='a'");
$j28=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_7='b'");
$j29=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_7='c'");

$j30=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_8='a'");
$j31=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_8='b'");
$j32=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_8='c'");

$j33=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_9='a'");
$j34=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_9='b'");
$j35=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='3' AND pre_test.question_9='c'");


//grade 4 fetch
$a_1=mysqli_fetch_row($a1);
$a_2=mysqli_fetch_row($a2);
$a_3=mysqli_fetch_row($a3);
$a_4=mysqli_fetch_row($a4);
$a_5=mysqli_fetch_row($a5);
$a_6=mysqli_fetch_row($a6);
$a_7=mysqli_fetch_row($a7);
$a_8=mysqli_fetch_row($a8);
$a_9=mysqli_fetch_row($a9);
$a_10=mysqli_fetch_row($a10);
$a_11=mysqli_fetch_row($a11);
$a_12=mysqli_fetch_row($a12);
$a_13=mysqli_fetch_row($a13);
$a_14=mysqli_fetch_row($a14);
$a_15=mysqli_fetch_row($a15);
$a_16=mysqli_fetch_row($a16);
$a_17=mysqli_fetch_row($a17);
$a_18=mysqli_fetch_row($a18);
$a_19=mysqli_fetch_row($a19);
$a_20=mysqli_fetch_row($a20);
$a_21=mysqli_fetch_row($a21);
$a_22=mysqli_fetch_row($a22);
$a_23=mysqli_fetch_row($a23);
$a_24=mysqli_fetch_row($a24);
$a_25=mysqli_fetch_row($a25);
$a_26=mysqli_fetch_row($a26);
$a_27=mysqli_fetch_row($a27);
$a_28=mysqli_fetch_row($a28);
$a_29=mysqli_fetch_row($a29);
$a_30=mysqli_fetch_row($a30);
$a_31=mysqli_fetch_row($a31);
$a_32=mysqli_fetch_row($a32);
$a_33=mysqli_fetch_row($a33);
$a_34=mysqli_fetch_row($a34);
$a_35=mysqli_fetch_row($a35);

//grade 5 fetch
$b_1=mysqli_fetch_row($b1);
$b_2=mysqli_fetch_row($b2);
$b_3=mysqli_fetch_row($b3);
$b_4=mysqli_fetch_row($b4);
$b_5=mysqli_fetch_row($b5);
$b_6=mysqli_fetch_row($b6);
$b_7=mysqli_fetch_row($b7);
$b_8=mysqli_fetch_row($b8);
$b_9=mysqli_fetch_row($b9);
$b_10=mysqli_fetch_row($b10);
$b_11=mysqli_fetch_row($b11);
$b_12=mysqli_fetch_row($b12);
$b_13=mysqli_fetch_row($b13);
$b_14=mysqli_fetch_row($b14);
$b_15=mysqli_fetch_row($b15);
$b_16=mysqli_fetch_row($b16);
$b_17=mysqli_fetch_row($b17);
$b_18=mysqli_fetch_row($b18);
$b_19=mysqli_fetch_row($b19);
$b_20=mysqli_fetch_row($b20);
$b_21=mysqli_fetch_row($b21);
$b_22=mysqli_fetch_row($b22);
$b_23=mysqli_fetch_row($b23);
$b_24=mysqli_fetch_row($b24);
$b_25=mysqli_fetch_row($b25);
$b_26=mysqli_fetch_row($b26);
$b_27=mysqli_fetch_row($b27);
$b_28=mysqli_fetch_row($b28);
$b_29=mysqli_fetch_row($b29);
$b_30=mysqli_fetch_row($b30);
$b_31=mysqli_fetch_row($b31);
$b_32=mysqli_fetch_row($b32);
$b_33=mysqli_fetch_row($b33);
$b_34=mysqli_fetch_row($b34);
$b_35=mysqli_fetch_row($b35);

//grade 6 fetch
$c_1=mysqli_fetch_row($c1);
$c_2=mysqli_fetch_row($c2);
$c_3=mysqli_fetch_row($c3);
$c_4=mysqli_fetch_row($c4);
$c_5=mysqli_fetch_row($c5);
$c_6=mysqli_fetch_row($c6);
$c_7=mysqli_fetch_row($c7);
$c_8=mysqli_fetch_row($c8);
$c_9=mysqli_fetch_row($c9);
$c_10=mysqli_fetch_row($c10);
$c_11=mysqli_fetch_row($c11);
$c_12=mysqli_fetch_row($c12);
$c_13=mysqli_fetch_row($c13);
$c_14=mysqli_fetch_row($c14);
$c_15=mysqli_fetch_row($c15);
$c_16=mysqli_fetch_row($c16);
$c_17=mysqli_fetch_row($c17);
$c_18=mysqli_fetch_row($c18);
$c_19=mysqli_fetch_row($c19);
$c_20=mysqli_fetch_row($c20);
$c_21=mysqli_fetch_row($c21);
$c_22=mysqli_fetch_row($c22);
$c_23=mysqli_fetch_row($c23);
$c_24=mysqli_fetch_row($c24);
$c_25=mysqli_fetch_row($c25);
$c_26=mysqli_fetch_row($c26);
$c_27=mysqli_fetch_row($c27);
$c_28=mysqli_fetch_row($c28);
$c_29=mysqli_fetch_row($c29);
$c_30=mysqli_fetch_row($c30);
$c_31=mysqli_fetch_row($c31);
$c_32=mysqli_fetch_row($c32);
$c_33=mysqli_fetch_row($c33);
$c_34=mysqli_fetch_row($c34);
$c_35=mysqli_fetch_row($c35);

//grade 7 fetch
$d_1=mysqli_fetch_row($d1);
$d_2=mysqli_fetch_row($d2);
$d_3=mysqli_fetch_row($d3);
$d_4=mysqli_fetch_row($d4);
$d_5=mysqli_fetch_row($d5);
$d_6=mysqli_fetch_row($d6);
$d_7=mysqli_fetch_row($d7);
$d_8=mysqli_fetch_row($d8);
$d_9=mysqli_fetch_row($d9);
$d_10=mysqli_fetch_row($d10);
$d_11=mysqli_fetch_row($d11);
$d_12=mysqli_fetch_row($d12);
$d_13=mysqli_fetch_row($d13);
$d_14=mysqli_fetch_row($d14);
$d_15=mysqli_fetch_row($d15);
$d_16=mysqli_fetch_row($d16);
$d_17=mysqli_fetch_row($d17);
$d_18=mysqli_fetch_row($d18);
$d_19=mysqli_fetch_row($d19);
$d_20=mysqli_fetch_row($d20);
$d_21=mysqli_fetch_row($d21);
$d_22=mysqli_fetch_row($d22);
$d_23=mysqli_fetch_row($d23);
$d_24=mysqli_fetch_row($d24);
$d_25=mysqli_fetch_row($d25);
$d_26=mysqli_fetch_row($d26);
$d_27=mysqli_fetch_row($d27);
$d_28=mysqli_fetch_row($d28);
$d_29=mysqli_fetch_row($d29);
$d_30=mysqli_fetch_row($d30);
$d_31=mysqli_fetch_row($d31);
$d_32=mysqli_fetch_row($d32);
$d_33=mysqli_fetch_row($d33);
$d_34=mysqli_fetch_row($d34);
$d_35=mysqli_fetch_row($d35);

//grade 8
$e_1=mysqli_fetch_row($e1);
$e_2=mysqli_fetch_row($e2);
$e_3=mysqli_fetch_row($e3);
$e_4=mysqli_fetch_row($e4);
$e_5=mysqli_fetch_row($e5);
$e_6=mysqli_fetch_row($e6);
$e_7=mysqli_fetch_row($e7);
$e_8=mysqli_fetch_row($e8);
$e_9=mysqli_fetch_row($e9);
$e_10=mysqli_fetch_row($e10);
$e_11=mysqli_fetch_row($e11);
$e_12=mysqli_fetch_row($e12);
$e_13=mysqli_fetch_row($e13);
$e_14=mysqli_fetch_row($e14);
$e_15=mysqli_fetch_row($e15);
$e_16=mysqli_fetch_row($e16);
$e_17=mysqli_fetch_row($e17);
$e_18=mysqli_fetch_row($e18);
$e_19=mysqli_fetch_row($e19);
$e_20=mysqli_fetch_row($e20);
$e_21=mysqli_fetch_row($e21);
$e_22=mysqli_fetch_row($e22);
$e_23=mysqli_fetch_row($e23);
$e_24=mysqli_fetch_row($e24);
$e_25=mysqli_fetch_row($e25);
$e_26=mysqli_fetch_row($e26);
$e_27=mysqli_fetch_row($e27);
$e_28=mysqli_fetch_row($e28);
$e_29=mysqli_fetch_row($e29);
$e_30=mysqli_fetch_row($e30);
$e_31=mysqli_fetch_row($e31);
$e_32=mysqli_fetch_row($e32);
$e_33=mysqli_fetch_row($e33);
$e_34=mysqli_fetch_row($e34);
$e_35=mysqli_fetch_row($e35);

//grade 9
$f_1=mysqli_fetch_row($f1);
$f_2=mysqli_fetch_row($f2);
$f_3=mysqli_fetch_row($f3);
$f_4=mysqli_fetch_row($f4);
$f_5=mysqli_fetch_row($f5);
$f_6=mysqli_fetch_row($f6);
$f_7=mysqli_fetch_row($f7);
$f_8=mysqli_fetch_row($f8);
$f_9=mysqli_fetch_row($f9);
$f_10=mysqli_fetch_row($f10);
$f_11=mysqli_fetch_row($f11);
$f_12=mysqli_fetch_row($f12);
$f_13=mysqli_fetch_row($f13);
$f_14=mysqli_fetch_row($f14);
$f_15=mysqli_fetch_row($f15);
$f_16=mysqli_fetch_row($f16);
$f_17=mysqli_fetch_row($f17);
$f_18=mysqli_fetch_row($f18);
$f_19=mysqli_fetch_row($f19);
$f_20=mysqli_fetch_row($f20);
$f_21=mysqli_fetch_row($f21);
$f_22=mysqli_fetch_row($f22);
$f_23=mysqli_fetch_row($f23);
$f_24=mysqli_fetch_row($f24);
$f_25=mysqli_fetch_row($f25);
$f_26=mysqli_fetch_row($f26);
$f_27=mysqli_fetch_row($f27);
$f_28=mysqli_fetch_row($f28);
$f_29=mysqli_fetch_row($f29);
$f_30=mysqli_fetch_row($f30);
$f_31=mysqli_fetch_row($f31);
$f_32=mysqli_fetch_row($f32);
$f_33=mysqli_fetch_row($f33);
$f_34=mysqli_fetch_row($f34);
$f_35=mysqli_fetch_row($f35);

//grade 10
$g_1=mysqli_fetch_row($g1);
$g_2=mysqli_fetch_row($g2);
$g_3=mysqli_fetch_row($g3);
$g_4=mysqli_fetch_row($g4);
$g_5=mysqli_fetch_row($g5);
$g_6=mysqli_fetch_row($g6);
$g_7=mysqli_fetch_row($g7);
$g_8=mysqli_fetch_row($g8);
$g_9=mysqli_fetch_row($g9);
$g_10=mysqli_fetch_row($g10);
$g_11=mysqli_fetch_row($g11);
$g_12=mysqli_fetch_row($g12);
$g_13=mysqli_fetch_row($g13);
$g_14=mysqli_fetch_row($g14);
$g_15=mysqli_fetch_row($g15);
$g_16=mysqli_fetch_row($g16);
$g_17=mysqli_fetch_row($g17);
$g_18=mysqli_fetch_row($g18);
$g_19=mysqli_fetch_row($g19);
$g_20=mysqli_fetch_row($g20);
$g_21=mysqli_fetch_row($g21);
$g_22=mysqli_fetch_row($g22);
$g_23=mysqli_fetch_row($g23);
$g_24=mysqli_fetch_row($g24);
$g_25=mysqli_fetch_row($g25);
$g_26=mysqli_fetch_row($g26);
$g_27=mysqli_fetch_row($g27);
$g_28=mysqli_fetch_row($g28);
$g_29=mysqli_fetch_row($g29);
$g_30=mysqli_fetch_row($g30);
$g_31=mysqli_fetch_row($g31);
$g_32=mysqli_fetch_row($g32);
$g_33=mysqli_fetch_row($g33);
$g_34=mysqli_fetch_row($g34);
$g_35=mysqli_fetch_row($g35);

//grade 1
$h_1=mysqli_fetch_row($h1);
$h_2=mysqli_fetch_row($h2);
$h_3=mysqli_fetch_row($h3);
$h_4=mysqli_fetch_row($h4);
$h_5=mysqli_fetch_row($h5);
$h_6=mysqli_fetch_row($h6);
$h_7=mysqli_fetch_row($h7);
$h_8=mysqli_fetch_row($h8);
$h_9=mysqli_fetch_row($h9);
$h_10=mysqli_fetch_row($h10);
$h_11=mysqli_fetch_row($h11);
$h_12=mysqli_fetch_row($h12);
$h_13=mysqli_fetch_row($h13);
$h_14=mysqli_fetch_row($h14);
$h_15=mysqli_fetch_row($h15);
$h_16=mysqli_fetch_row($h16);
$h_17=mysqli_fetch_row($h17);
$h_18=mysqli_fetch_row($h18);
$h_19=mysqli_fetch_row($h19);
$h_20=mysqli_fetch_row($h20);
$h_21=mysqli_fetch_row($h21);
$h_22=mysqli_fetch_row($h22);
$h_23=mysqli_fetch_row($h23);
$h_24=mysqli_fetch_row($h24);
$h_25=mysqli_fetch_row($h25);
$h_26=mysqli_fetch_row($h26);
$h_27=mysqli_fetch_row($h27);
$h_28=mysqli_fetch_row($h28);
$h_29=mysqli_fetch_row($h29);
$h_30=mysqli_fetch_row($h30);
$h_31=mysqli_fetch_row($h31);
$h_32=mysqli_fetch_row($h32);
$h_33=mysqli_fetch_row($h33);
$h_34=mysqli_fetch_row($h34);
$h_35=mysqli_fetch_row($h35);

//grade 2
$i_1=mysqli_fetch_row($i1);
$i_2=mysqli_fetch_row($i2);
$i_3=mysqli_fetch_row($i3);
$i_4=mysqli_fetch_row($i4);
$i_5=mysqli_fetch_row($i5);
$i_6=mysqli_fetch_row($i6);
$i_7=mysqli_fetch_row($i7);
$i_8=mysqli_fetch_row($i8);
$i_9=mysqli_fetch_row($i9);
$i_10=mysqli_fetch_row($i10);
$i_11=mysqli_fetch_row($i11);
$i_12=mysqli_fetch_row($i12);
$i_13=mysqli_fetch_row($i13);
$i_14=mysqli_fetch_row($i14);
$i_15=mysqli_fetch_row($i15);
$i_16=mysqli_fetch_row($i16);
$i_17=mysqli_fetch_row($i17);
$i_18=mysqli_fetch_row($i18);
$i_19=mysqli_fetch_row($i19);
$i_20=mysqli_fetch_row($i20);
$i_21=mysqli_fetch_row($i21);
$i_22=mysqli_fetch_row($i22);
$i_23=mysqli_fetch_row($i23);
$i_24=mysqli_fetch_row($i24);
$i_25=mysqli_fetch_row($i25);
$i_26=mysqli_fetch_row($i26);
$i_27=mysqli_fetch_row($i27);
$i_28=mysqli_fetch_row($i28);
$i_29=mysqli_fetch_row($i29);
$i_30=mysqli_fetch_row($i30);
$i_31=mysqli_fetch_row($i31);
$i_32=mysqli_fetch_row($i32);
$i_33=mysqli_fetch_row($i33);
$i_34=mysqli_fetch_row($i34);
$i_35=mysqli_fetch_row($i35);

//grade 3
$j_1=mysqli_fetch_row($j1);
$j_2=mysqli_fetch_row($j2);
$j_3=mysqli_fetch_row($j3);
$j_4=mysqli_fetch_row($j4);
$j_5=mysqli_fetch_row($j5);
$j_6=mysqli_fetch_row($j6);
$j_7=mysqli_fetch_row($j7);
$j_8=mysqli_fetch_row($j8);
$j_9=mysqli_fetch_row($j9);
$j_10=mysqli_fetch_row($j10);
$j_11=mysqli_fetch_row($j11);
$j_12=mysqli_fetch_row($j12);
$j_13=mysqli_fetch_row($j13);
$j_14=mysqli_fetch_row($j14);
$j_15=mysqli_fetch_row($j15);
$j_16=mysqli_fetch_row($j16);
$j_17=mysqli_fetch_row($j17);
$j_18=mysqli_fetch_row($j18);
$j_19=mysqli_fetch_row($j19);
$j_20=mysqli_fetch_row($j20);
$j_21=mysqli_fetch_row($j21);
$j_22=mysqli_fetch_row($j22);
$j_23=mysqli_fetch_row($j23);
$j_24=mysqli_fetch_row($j24);
$j_25=mysqli_fetch_row($j25);
$j_26=mysqli_fetch_row($j26);
$j_27=mysqli_fetch_row($j27);
$j_28=mysqli_fetch_row($j28);
$j_29=mysqli_fetch_row($j29);
$j_30=mysqli_fetch_row($j30);
$j_31=mysqli_fetch_row($j31);
$j_32=mysqli_fetch_row($j32);
$j_33=mysqli_fetch_row($j33);
$j_34=mysqli_fetch_row($j34);
$j_35=mysqli_fetch_row($j35);




//question 1 total
$t1=mysqli_query($db,"SELECT COUNT(question_1) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_1='a'");

$t2=mysqli_query($db,"SELECT COUNT(question_1) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_1='b'");

$t3=mysqli_query($db,"SELECT COUNT(question_1) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_1='c'");

$t4=mysqli_query($db,"SELECT COUNT(question_1) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_1='d'");

$t5=mysqli_query($db,"SELECT COUNT(question_1) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_1='e'");

//question_2
$t6=mysqli_query($db,"SELECT COUNT(question_2) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_2='a'");

$t7=mysqli_query($db,"SELECT COUNT(question_2) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_2='b'");

$t8=mysqli_query($db,"SELECT COUNT(question_2) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_2='c'");

$t9=mysqli_query($db,"SELECT COUNT(question_2) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_2='d'");

$t10=mysqli_query($db,"SELECT COUNT(question_2) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_2='e'");


//question_3
$t11=mysqli_query($db,"SELECT COUNT(question_3) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_3='a'");

$t12=mysqli_query($db,"SELECT COUNT(question_3) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_3='b'");

$t13=mysqli_query($db,"SELECT COUNT(question_3) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_3='c'");

$t14=mysqli_query($db,"SELECT COUNT(question_3) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_3='d'");

$t15=mysqli_query($db,"SELECT COUNT(question_3) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_3='e'");

//question_4

$t16=mysqli_query($db,"SELECT COUNT(question_4) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_4='a'");

$t17=mysqli_query($db,"SELECT COUNT(question_4) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_4='b'");

$t18=mysqli_query($db,"SELECT COUNT(question_4) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_4='c'");

$t19=mysqli_query($db,"SELECT COUNT(question_4) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_4='d'");

$t20=mysqli_query($db,"SELECT COUNT(question_4) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_4='e'");

//question_5

$t21=mysqli_query($db,"SELECT COUNT(question_5) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_5='a'");

$t22=mysqli_query($db,"SELECT COUNT(question_5) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_5='b'");

$t23=mysqli_query($db,"SELECT COUNT(question_5) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_5='c'");

//question_6
$t24=mysqli_query($db,"SELECT COUNT(question_6) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_6='a'");

$t25=mysqli_query($db,"SELECT COUNT(question_6) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_6='b'");

$t26=mysqli_query($db,"SELECT COUNT(question_6) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_6='c'");

//question_7
$t27=mysqli_query($db,"SELECT COUNT(question_7) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_7='a'");

$t28=mysqli_query($db,"SELECT COUNT(question_7) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_7='b'");

$t29=mysqli_query($db,"SELECT COUNT(question_7) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_7='c'");

//question_8
$t30=mysqli_query($db,"SELECT COUNT(question_8) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_4='a'");

$t31=mysqli_query($db,"SELECT COUNT(question_8) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_8='b'");

$t32=mysqli_query($db,"SELECT COUNT(question_8) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_8='c'");

//question 9

$t33=mysqli_query($db,"SELECT COUNT(question_9) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_9='a'");

$t34=mysqli_query($db,"SELECT COUNT(question_9) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_9='b'");

$t35=mysqli_query($db,"SELECT COUNT(question_9) FROM pre_test
JOIN student
ON pre_test.stud_id = student.stud_id
WHERE student.school_id='$school' AND question_9='c'");









$s1=mysqli_fetch_row($t1);
$s2=mysqli_fetch_row($t2);
$s3=mysqli_fetch_row($t3);
$s4=mysqli_fetch_row($t4);
$s5=mysqli_fetch_row($t5);

$s6=mysqli_fetch_row($t6);
$s7=mysqli_fetch_row($t7);
$s8=mysqli_fetch_row($t8);
$s9=mysqli_fetch_row($t9);
$s10=mysqli_fetch_row($t10);

$s11=mysqli_fetch_row($t11);
$s12=mysqli_fetch_row($t12);
$s13=mysqli_fetch_row($t13);
$s14=mysqli_fetch_row($t14);
$s15=mysqli_fetch_row($t15);

$s16=mysqli_fetch_row($t16);
$s17=mysqli_fetch_row($t17);
$s18=mysqli_fetch_row($t18);
$s19=mysqli_fetch_row($t19);
$s20=mysqli_fetch_row($t20);

$s21=mysqli_fetch_row($t21);
$s22=mysqli_fetch_row($t22);
$s23=mysqli_fetch_row($t23);
$s24=mysqli_fetch_row($t24);
$s25=mysqli_fetch_row($t25);

$s26=mysqli_fetch_row($t26);
$s27=mysqli_fetch_row($t27);
$s28=mysqli_fetch_row($t28);
$s29=mysqli_fetch_row($t29);
$s30=mysqli_fetch_row($t30);

$s31=mysqli_fetch_row($t31);
$s32=mysqli_fetch_row($t32);
$s33=mysqli_fetch_row($t33);
$s34=mysqli_fetch_row($t34);
$s35=mysqli_fetch_row($t35);





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
<div class="container-fluid">
      <div class="row">
      <div class="col-xs-5">
      <p style="font-size: 20px; font-weight: bold;"><?php echo $scn[0];   ?> </p>
      </div>
      <div class="col-xs-offset-2 col-xs-5">
      <p style="font-size: 20px; font-weight: bold;">Diocese of <?php echo $scn[1];  ?> </p>
      </div>
      </div>
</div>
<div class="table-responsive">
  <table class="table table-hover table-bordered" style="background-color:#fff; font-family: roboto;">
  <tr>
    <th rowspan="3">GRADE/YEAR LEVEL</th>
    <th colspan="35">Questionnaires Number</th>
  </tr>
  <tr>
    <th colspan="5">PAT Question 1</th>
    <th colspan="5">PAT Question 2</th>
    <th colspan="5">PAT Question 3</th>
    <th colspan="5">PAT Question 4</th>
    <th colspan="3">PAT Question 5</th>
    <th colspan="3">PAT Question 6</th>
    <th colspan="3">PAT Question 7</th>
    <th colspan="3">PAT Question 8</th>
    <th colspan="3">PAT Question 9</th>
  </tr>
  <tr>
    <!--Question1-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <!--Question2-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <!--Question3-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <!--Question4-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
    <th>e</th>
    <!--Question5-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <!--Question6-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <!--Question7-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <!--Question8-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <!--Question9-->
    <th>a</th>
    <th>b</th>
    <th>c</th>
  </tr>
   <tr>
    <th>GRADE 1</th>
    <td><?php echo $h_1[0]; ?></td>
    <td><?php echo $h_2[0]; ?></td>
    <td><?php echo $h_3[0]; ?></td>
    <td><?php echo $h_4[0]; ?></td>
    <td><?php echo $h_5[0]; ?></td>
    <td><?php echo $h_6[0]; ?></td>
    <td><?php echo $h_7[0]; ?></td>
    <td><?php echo $h_8[0]; ?></td>
    <td><?php echo $h_9[0]; ?></td>
    <td><?php echo $h_10[0]; ?></td>
    <td><?php echo $h_11[0]; ?></td>
    <td><?php echo $h_12[0]; ?></td>
    <td><?php echo $h_13[0]; ?></td>
    <td><?php echo $h_14[0]; ?></td>
    <td><?php echo $h_15[0]; ?></td>
    <td><?php echo $h_16[0]; ?></td>
    <td><?php echo $h_17[0]; ?></td>
    <td><?php echo $h_18[0]; ?></td>
    <td><?php echo $h_19[0]; ?></td>
    <td><?php echo $h_20[0]; ?></td>
    <td><?php echo $h_21[0]; ?></td>
    <td><?php echo $h_22[0]; ?></td>
    <td><?php echo $h_23[0]; ?></td>
    <td><?php echo $h_24[0]; ?></td>
    <td><?php echo $h_25[0]; ?></td>
    <td><?php echo $h_26[0]; ?></td>
    <td><?php echo $h_27[0]; ?></td>
    <td><?php echo $h_28[0]; ?></td>
    <td><?php echo $h_29[0]; ?></td>
    <td><?php echo $h_30[0]; ?></td>
    <td><?php echo $h_31[0]; ?></td>
    <td><?php echo $h_32[0]; ?></td>
    <td><?php echo $h_33[0]; ?></td>
    <td><?php echo $h_34[0]; ?></td>
    <td><?php echo $h_35[0]; ?></td>
  </tr>
   <tr>
    <th>GRADE 2</th>
   <td><?php echo $i_1[0]; ?></td>
    <td><?php echo $i_2[0]; ?></td>
    <td><?php echo $i_3[0]; ?></td>
    <td><?php echo $i_4[0]; ?></td>
    <td><?php echo $i_5[0]; ?></td>
    <td><?php echo $i_6[0]; ?></td>
    <td><?php echo $i_7[0]; ?></td>
    <td><?php echo $i_8[0]; ?></td>
    <td><?php echo $i_9[0]; ?></td>
    <td><?php echo $i_10[0]; ?></td>
    <td><?php echo $i_11[0]; ?></td>
    <td><?php echo $i_12[0]; ?></td>
    <td><?php echo $i_13[0]; ?></td>
    <td><?php echo $i_14[0]; ?></td>
    <td><?php echo $i_15[0]; ?></td>
    <td><?php echo $i_16[0]; ?></td>
    <td><?php echo $i_17[0]; ?></td>
    <td><?php echo $i_18[0]; ?></td>
    <td><?php echo $i_19[0]; ?></td>
    <td><?php echo $i_20[0]; ?></td>
    <td><?php echo $i_21[0]; ?></td>
    <td><?php echo $i_22[0]; ?></td>
    <td><?php echo $i_23[0]; ?></td>
    <td><?php echo $i_24[0]; ?></td>
    <td><?php echo $i_25[0]; ?></td>
    <td><?php echo $i_26[0]; ?></td>
    <td><?php echo $i_27[0]; ?></td>
    <td><?php echo $i_28[0]; ?></td>
    <td><?php echo $i_29[0]; ?></td>
    <td><?php echo $i_30[0]; ?></td>
    <td><?php echo $i_31[0]; ?></td>
    <td><?php echo $i_32[0]; ?></td>
    <td><?php echo $i_33[0]; ?></td>
    <td><?php echo $i_34[0]; ?></td>
    <td><?php echo $i_35[0]; ?></td>
  </tr>
   <tr>
    <th>GRADE 3</th>
   <td><?php echo $j_1[0]; ?></td>
    <td><?php echo $j_2[0]; ?></td>
    <td><?php echo $j_3[0]; ?></td>
    <td><?php echo $j_4[0]; ?></td>
    <td><?php echo $j_5[0]; ?></td>
    <td><?php echo $j_6[0]; ?></td>
    <td><?php echo $j_7[0]; ?></td>
    <td><?php echo $j_8[0]; ?></td>
    <td><?php echo $j_9[0]; ?></td>
    <td><?php echo $j_10[0]; ?></td>
    <td><?php echo $j_11[0]; ?></td>
    <td><?php echo $j_12[0]; ?></td>
    <td><?php echo $j_13[0]; ?></td>
    <td><?php echo $j_14[0]; ?></td>
    <td><?php echo $j_15[0]; ?></td>
    <td><?php echo $j_16[0]; ?></td>
    <td><?php echo $j_17[0]; ?></td>
    <td><?php echo $j_18[0]; ?></td>
    <td><?php echo $j_19[0]; ?></td>
    <td><?php echo $j_20[0]; ?></td>
    <td><?php echo $j_21[0]; ?></td>
    <td><?php echo $j_22[0]; ?></td>
    <td><?php echo $j_23[0]; ?></td>
    <td><?php echo $j_24[0]; ?></td>
    <td><?php echo $j_25[0]; ?></td>
    <td><?php echo $j_26[0]; ?></td>
    <td><?php echo $j_27[0]; ?></td>
    <td><?php echo $j_28[0]; ?></td>
    <td><?php echo $j_29[0]; ?></td>
    <td><?php echo $j_30[0]; ?></td>
    <td><?php echo $j_31[0]; ?></td>
    <td><?php echo $j_32[0]; ?></td>
    <td><?php echo $j_33[0]; ?></td>
    <td><?php echo $j_34[0]; ?></td>
    <td><?php echo $j_35[0]; ?></td>  </tr>
  <tr>
    <th>GRADE 4</th>
   <td><?php echo $a_1[0]; ?></td>
    <td><?php echo $a_2[0]; ?></td>
    <td><?php echo $a_3[0]; ?></td>
    <td><?php echo $a_4[0]; ?></td>
    <td><?php echo $a_5[0]; ?></td>
    <td><?php echo $a_6[0]; ?></td>
    <td><?php echo $a_7[0]; ?></td>
    <td><?php echo $a_8[0]; ?></td>
    <td><?php echo $a_9[0]; ?></td>
    <td><?php echo $a_10[0]; ?></td>
    <td><?php echo $a_11[0]; ?></td>
    <td><?php echo $a_12[0]; ?></td>
    <td><?php echo $a_13[0]; ?></td>
    <td><?php echo $a_14[0]; ?></td>
    <td><?php echo $a_15[0]; ?></td>
    <td><?php echo $a_16[0]; ?></td>
    <td><?php echo $a_17[0]; ?></td>
    <td><?php echo $a_18[0]; ?></td>
    <td><?php echo $a_19[0]; ?></td>
    <td><?php echo $a_20[0]; ?></td>
    <td><?php echo $a_21[0]; ?></td>
    <td><?php echo $a_22[0]; ?></td>
    <td><?php echo $a_23[0]; ?></td>
    <td><?php echo $a_24[0]; ?></td>
    <td><?php echo $a_25[0]; ?></td>
    <td><?php echo $a_26[0]; ?></td>
    <td><?php echo $a_27[0]; ?></td>
    <td><?php echo $a_28[0]; ?></td>
    <td><?php echo $a_29[0]; ?></td>
    <td><?php echo $a_30[0]; ?></td>
    <td><?php echo $a_31[0]; ?></td>
    <td><?php echo $a_32[0]; ?></td>
    <td><?php echo $a_33[0]; ?></td>
    <td><?php echo $a_34[0]; ?></td>
    <td><?php echo $a_35[0]; ?></td>
  </tr>
  <tr>
    <th>GRADE 5</th>
    <td><?php echo $b_1[0]; ?></td>
    <td><?php echo $b_2[0]; ?></td>
    <td><?php echo $b_3[0]; ?></td>
    <td><?php echo $b_4[0]; ?></td>
    <td><?php echo $b_5[0]; ?></td>
    <td><?php echo $b_6[0]; ?></td>
    <td><?php echo $b_7[0]; ?></td>
    <td><?php echo $b_8[0]; ?></td>
    <td><?php echo $b_9[0]; ?></td>
    <td><?php echo $b_10[0]; ?></td>
    <td><?php echo $b_11[0]; ?></td>
    <td><?php echo $b_12[0]; ?></td>
    <td><?php echo $b_13[0]; ?></td>
    <td><?php echo $b_14[0]; ?></td>
    <td><?php echo $b_15[0]; ?></td>
    <td><?php echo $b_16[0]; ?></td>
    <td><?php echo $b_17[0]; ?></td>
    <td><?php echo $b_18[0]; ?></td>
    <td><?php echo $b_19[0]; ?></td>
    <td><?php echo $b_20[0]; ?></td>
    <td><?php echo $b_21[0]; ?></td>
    <td><?php echo $b_22[0]; ?></td>
    <td><?php echo $b_23[0]; ?></td>
    <td><?php echo $b_24[0]; ?></td>
    <td><?php echo $b_25[0]; ?></td>
    <td><?php echo $b_26[0]; ?></td>
    <td><?php echo $b_27[0]; ?></td>
    <td><?php echo $b_28[0]; ?></td>
    <td><?php echo $b_29[0]; ?></td>
    <td><?php echo $b_30[0]; ?></td>
    <td><?php echo $b_31[0]; ?></td>
    <td><?php echo $b_32[0]; ?></td>
    <td><?php echo $b_33[0]; ?></td>
    <td><?php echo $b_34[0]; ?></td>
    <td><?php echo $b_35[0]; ?></td>
  </tr>
  <tr>
    <th>GRADE 6</th>
    <td><?php echo $c_1[0]; ?></td>
    <td><?php echo $c_2[0]; ?></td>
    <td><?php echo $c_3[0]; ?></td>
    <td><?php echo $c_4[0]; ?></td>
    <td><?php echo $c_5[0]; ?></td>
    <td><?php echo $c_6[0]; ?></td>
    <td><?php echo $c_7[0]; ?></td>
    <td><?php echo $c_8[0]; ?></td>
    <td><?php echo $c_9[0]; ?></td>
    <td><?php echo $c_10[0]; ?></td>
    <td><?php echo $c_11[0]; ?></td>
    <td><?php echo $c_12[0]; ?></td>
    <td><?php echo $c_13[0]; ?></td>
    <td><?php echo $c_14[0]; ?></td>
    <td><?php echo $c_15[0]; ?></td>
    <td><?php echo $c_16[0]; ?></td>
    <td><?php echo $c_17[0]; ?></td>
    <td><?php echo $c_18[0]; ?></td>
    <td><?php echo $c_19[0]; ?></td>
    <td><?php echo $c_20[0]; ?></td>
    <td><?php echo $c_21[0]; ?></td>
    <td><?php echo $c_22[0]; ?></td>
    <td><?php echo $c_23[0]; ?></td>
    <td><?php echo $c_24[0]; ?></td>
    <td><?php echo $c_25[0]; ?></td>
    <td><?php echo $c_26[0]; ?></td>
    <td><?php echo $c_27[0]; ?></td>
    <td><?php echo $c_28[0]; ?></td>
    <td><?php echo $c_29[0]; ?></td>
    <td><?php echo $c_30[0]; ?></td>
    <td><?php echo $c_31[0]; ?></td>
    <td><?php echo $c_32[0]; ?></td>
    <td><?php echo $c_33[0]; ?></td>
    <td><?php echo $c_34[0]; ?></td>
    <td><?php echo $c_35[0]; ?></td>  
    </tr>
  <tr>
    <th>GRADE 7</th>
    <td><?php echo $d_1[0]; ?></td>
    <td><?php echo $d_2[0]; ?></td>
    <td><?php echo $d_3[0]; ?></td>
    <td><?php echo $d_4[0]; ?></td>
    <td><?php echo $d_5[0]; ?></td>
    <td><?php echo $d_6[0]; ?></td>
    <td><?php echo $d_7[0]; ?></td>
    <td><?php echo $d_8[0]; ?></td>
    <td><?php echo $d_9[0]; ?></td>
    <td><?php echo $d_10[0]; ?></td>
    <td><?php echo $d_11[0]; ?></td>
    <td><?php echo $d_12[0]; ?></td>
    <td><?php echo $d_13[0]; ?></td>
    <td><?php echo $d_14[0]; ?></td>
    <td><?php echo $d_15[0]; ?></td>
    <td><?php echo $d_16[0]; ?></td>
    <td><?php echo $d_17[0]; ?></td>
    <td><?php echo $d_18[0]; ?></td>
    <td><?php echo $d_19[0]; ?></td>
    <td><?php echo $d_20[0]; ?></td>
    <td><?php echo $d_21[0]; ?></td>
    <td><?php echo $d_22[0]; ?></td>
    <td><?php echo $d_23[0]; ?></td>
    <td><?php echo $d_24[0]; ?></td>
    <td><?php echo $d_25[0]; ?></td>
    <td><?php echo $d_26[0]; ?></td>
    <td><?php echo $d_27[0]; ?></td>
    <td><?php echo $d_28[0]; ?></td>
    <td><?php echo $d_29[0]; ?></td>
    <td><?php echo $d_30[0]; ?></td>
    <td><?php echo $d_31[0]; ?></td>
    <td><?php echo $d_32[0]; ?></td>
    <td><?php echo $d_33[0]; ?></td>
    <td><?php echo $d_34[0]; ?></td>
    <td><?php echo $d_35[0]; ?></td>
  </tr>
  <tr>
    <th>GRADE 8</th>
    <td><?php echo $e_1[0]; ?></td>
    <td><?php echo $e_2[0]; ?></td>
    <td><?php echo $e_3[0]; ?></td>
    <td><?php echo $e_4[0]; ?></td>
    <td><?php echo $e_5[0]; ?></td>
    <td><?php echo $e_6[0]; ?></td>
    <td><?php echo $e_7[0]; ?></td>
    <td><?php echo $e_8[0]; ?></td>
    <td><?php echo $e_9[0]; ?></td>
    <td><?php echo $e_10[0]; ?></td>
    <td><?php echo $e_11[0]; ?></td>
    <td><?php echo $e_12[0]; ?></td>
    <td><?php echo $e_13[0]; ?></td>
    <td><?php echo $e_14[0]; ?></td>
    <td><?php echo $e_15[0]; ?></td>
    <td><?php echo $e_16[0]; ?></td>
    <td><?php echo $e_17[0]; ?></td>
    <td><?php echo $e_18[0]; ?></td>
    <td><?php echo $e_19[0]; ?></td>
    <td><?php echo $e_20[0]; ?></td>
    <td><?php echo $e_21[0]; ?></td>
    <td><?php echo $e_22[0]; ?></td>
    <td><?php echo $e_23[0]; ?></td>
    <td><?php echo $e_24[0]; ?></td>
    <td><?php echo $e_25[0]; ?></td>
    <td><?php echo $e_26[0]; ?></td>
    <td><?php echo $e_27[0]; ?></td>
    <td><?php echo $e_28[0]; ?></td>
    <td><?php echo $e_29[0]; ?></td>
    <td><?php echo $e_30[0]; ?></td>
    <td><?php echo $e_31[0]; ?></td>
    <td><?php echo $e_32[0]; ?></td>
    <td><?php echo $e_33[0]; ?></td>
    <td><?php echo $e_34[0]; ?></td>
    <td><?php echo $e_35[0]; ?></td>
  </tr>
  <tr>
  <tr>
    <th>GRADE 9</th>
    <td><?php echo $f_1[0]; ?></td>
    <td><?php echo $f_2[0]; ?></td>
    <td><?php echo $f_3[0]; ?></td>
    <td><?php echo $f_4[0]; ?></td>
    <td><?php echo $f_5[0]; ?></td>
    <td><?php echo $f_6[0]; ?></td>
    <td><?php echo $f_7[0]; ?></td>
    <td><?php echo $f_8[0]; ?></td>
    <td><?php echo $f_9[0]; ?></td>
    <td><?php echo $f_10[0]; ?></td>
    <td><?php echo $f_11[0]; ?></td>
    <td><?php echo $f_12[0]; ?></td>
    <td><?php echo $f_13[0]; ?></td>
    <td><?php echo $f_14[0]; ?></td>
    <td><?php echo $f_15[0]; ?></td>
    <td><?php echo $f_16[0]; ?></td>
    <td><?php echo $f_17[0]; ?></td>
    <td><?php echo $f_18[0]; ?></td>
    <td><?php echo $f_19[0]; ?></td>
    <td><?php echo $f_20[0]; ?></td>
    <td><?php echo $f_21[0]; ?></td>
    <td><?php echo $f_22[0]; ?></td>
    <td><?php echo $f_23[0]; ?></td>
    <td><?php echo $f_24[0]; ?></td>
    <td><?php echo $f_25[0]; ?></td>
    <td><?php echo $f_26[0]; ?></td>
    <td><?php echo $f_27[0]; ?></td>
    <td><?php echo $f_28[0]; ?></td>
    <td><?php echo $f_29[0]; ?></td>
    <td><?php echo $f_30[0]; ?></td>
    <td><?php echo $f_31[0]; ?></td>
    <td><?php echo $f_32[0]; ?></td>
    <td><?php echo $f_33[0]; ?></td>
    <td><?php echo $f_34[0]; ?></td>
    <td><?php echo $f_35[0]; ?></td>
  </tr>
  <tr>
    <th>GRADE 10</th>
    <td><?php echo $g_1[0]; ?></td>
    <td><?php echo $g_2[0]; ?></td>
    <td><?php echo $g_3[0]; ?></td>
    <td><?php echo $g_4[0]; ?></td>
    <td><?php echo $g_5[0]; ?></td>
    <td><?php echo $g_6[0]; ?></td>
    <td><?php echo $g_7[0]; ?></td>
    <td><?php echo $g_8[0]; ?></td>
    <td><?php echo $g_9[0]; ?></td>
    <td><?php echo $g_10[0]; ?></td>
    <td><?php echo $g_11[0]; ?></td>
    <td><?php echo $g_12[0]; ?></td>
    <td><?php echo $g_13[0]; ?></td>
    <td><?php echo $g_14[0]; ?></td>
    <td><?php echo $g_15[0]; ?></td>
    <td><?php echo $g_16[0]; ?></td>
    <td><?php echo $g_17[0]; ?></td>
    <td><?php echo $g_18[0]; ?></td>
    <td><?php echo $g_19[0]; ?></td>
    <td><?php echo $g_20[0]; ?></td>
    <td><?php echo $g_21[0]; ?></td>
    <td><?php echo $g_22[0]; ?></td>
    <td><?php echo $g_23[0]; ?></td>
    <td><?php echo $g_24[0]; ?></td>
    <td><?php echo $g_25[0]; ?></td>
    <td><?php echo $g_26[0]; ?></td>
    <td><?php echo $g_27[0]; ?></td>
    <td><?php echo $g_28[0]; ?></td>
    <td><?php echo $g_29[0]; ?></td>
    <td><?php echo $g_30[0]; ?></td>
    <td><?php echo $g_31[0]; ?></td>
    <td><?php echo $g_32[0]; ?></td>
    <td><?php echo $g_33[0]; ?></td>
    <td><?php echo $g_34[0]; ?></td>
    <td><?php echo $g_35[0]; ?></td>
  </tr>
    <th>Sub Total</th>
    <td><?php echo $s1[0]; ?></td>
    <td><?php echo $s2[0]; ?></td>
    <td><?php echo $s3[0]; ?></td>
    <td><?php echo $s4[0]; ?></td>
    <td><?php echo $s5[0]; ?></td>
    <td><?php echo $s6[0]; ?></td>
    <td><?php echo $s7[0]; ?></td>
    <td><?php echo $s8[0]; ?></td>
    <td><?php echo $s9[0]; ?></td>
    <td><?php echo $s10[0]; ?></td>
    <td><?php echo $s11[0]; ?></td>
    <td><?php echo $s12[0]; ?></td>
    <td><?php echo $s13[0]; ?></td>
    <td><?php echo $s14[0]; ?></td>
    <td><?php echo $s15[0]; ?></td>
    <td><?php echo $s16[0]; ?></td>
    <td><?php echo $s17[0]; ?></td>
    <td><?php echo $s18[0]; ?></td>
    <td><?php echo $s19[0]; ?></td>
    <td><?php echo $s20[0]; ?></td>
    <td><?php echo $s21[0]; ?></td>
    <td><?php echo $s22[0]; ?></td>
    <td><?php echo $s23[0]; ?></td>
    <td><?php echo $s24[0]; ?></td>
    <td><?php echo $s25[0]; ?></td>
    <td><?php echo $s26[0]; ?></td>
    <td><?php echo $s27[0]; ?></td>
    <td><?php echo $s28[0]; ?></td>
    <td><?php echo $s29[0]; ?></td>
    <td><?php echo $s30[0]; ?></td>
    <td><?php echo $s31[0]; ?></td>
    <td><?php echo $s32[0]; ?></td>
    <td><?php echo $s33[0]; ?></td>
    <td><?php echo $s34[0]; ?></td>
    <td><?php echo $s35[0]; ?></td>
    </tr>
</table>
</div>
</div>
</body>