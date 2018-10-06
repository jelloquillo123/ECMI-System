<?php
require 'admin_authentication.php';
$error_message="";
$acount="";

if (isset($_POST['reset_btn'])){
$pass_input=$_POST['pass_word'];
$pass_query=mysqli_query($db,"SELECT account.pword FROM account WHERE account.account_id='$acc_id'");
$pass_fetch=mysqli_fetch_row($pass_query);
$pass_word=$pass_fetch[0];

if (password_verify($pass_input,$pass_word)){
	$arch_count=mysqli_query($db,"SELECT archive_id FROM student_archive");
	$batch_name=date("Ymd");
	$batch_date=date("Y-m-d");
	$batch_query=mysqli_query($db,"INSERT INTO batch (batch_num,date) VALUES('$batch_name','$batch_date')");
	$stud_query=mysqli_query($db,"SELECT * FROM student");

	while ($stud=mysqli_fetch_assoc($stud_query)) {
		$q_studid=$stud['stud_id'];
		$q_fname=$stud['fname'];
		$q_mname=$stud['mname'];
		$q_lname=$stud['lname'];
		$q_glevel=$stud['g_level'];
		$q_schoolid=$stud['school_id'];
		$q_gender=$stud['gender'];
		$q_age=$stud['age'];
		$q_email=$stud['email'];
		$q_tstat=$stud['t_stat'];

		while ($a_count=mysqli_fetch_assoc($arch_count)) {
			$acount=$a_count['archive_id'];
		}
		$acount=$acount+1;

		$pat_query=mysqli_query($db,"SELECT * FROM pre_test WHERE stud_id='$q_studid'");

		if (mysqli_num_rows($pat_query) == 1){
			$fetch=mysqli_fetch_assoc($pat_query);
			$q_q1=$fetch['question_1'];
			$q_q2=$fetch['question_2'];
			$q_q3=$fetch['question_3'];
			$q_q4=$fetch['question_4'];
			$q_q5=$fetch['question_5'];
			$q_q6=$fetch['question_6'];
			$q_q7=$fetch['question_7'];
			$q_q8=$fetch['question_8'];
			$q_q9=$fetch['question_9'];

			$data_query=mysqli_query($db,"INSERT INTO student_archive (archive_id,stud_id,fname,mname,lname,g_level,school_id,gender,age,email,t_stat,batch_num,q1,q2,q3,q4,q5,q6,q7,q8,q9) VALUES ('$acount','$q_studid','$q_fname','$q_mname','$q_lname','$q_glevel','$q_schoolid','$q_gender','$q_age','$q_email','$q_tstat','$batch_name','$q_q1','$q_q2','$q_q3','$q_q4','$q_q5','$q_q6','$q_q7','$q_q8','$q_q9')");
		}

		else {
			$data_query=mysqli_query($db,"INSERT INTO student_archive (archive_id,stud_id,fname,mname,lname,g_level,school_id,gender,age,email,t_stat,batch_num) VALUES ('$acount','$q_studid','$q_fname','$q_mname','$q_lname','$q_glevel','$q_schoolid','$q_gender','$q_age','$q_email','$q_tstat','$batch_name')");
		}

		
		$del_query=mysqli_query($db,"DELETE FROM student WHERE stud_id='$q_studid'");
	}



}
else{
	$error_message="Wrong Password!";
}

	
}
?>