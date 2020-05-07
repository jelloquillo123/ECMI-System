<?php
require 'school_authentication.php';
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

$taken_query=mysqli_query($db,"SELECT COUNT(student.stud_id) FROM student WHERE student.t_stat='Taken' AND student.school_id='$scn[2]'");
$taken_total=mysqli_fetch_row($taken_query);

$not_taken_query=mysqli_query($db,"SELECT COUNT(student.stud_id) FROM student WHERE student.t_stat='Not taken' AND student.school_id='$scn[2]'");
$nt_total=mysqli_fetch_row($not_taken_query);
$sum_query=mysqli_query($db,"SELECT COUNT(student.stud_id) FROM student WHERE student.school_id='$scn[2]'");
$total_stud=mysqli_fetch_row($sum_query);

$school=$scn[2];

$total=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school'");
$tot=mysqli_fetch_row($total);

//query 
for($x=1;$x<=10;$x++){ // change FOR params for grade level coverage
	for($y=1;$y<=4;$y++){
		$question_num_val = "pre_test.question_".$y;
		//query
		${'q_g'.$x.'q'.$y.'a'}=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='$x' AND $question_num_val='a'");
		${'q_g'.$x.'q'.$y.'b'}=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='$x' AND $question_num_val='b'");
		${'q_g'.$x.'q'.$y.'c'}=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='$x' AND $question_num_val='c'");
		${'q_g'.$x.'q'.$y.'d'}=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='$x' AND $question_num_val='d'");
		${'q_g'.$x.'q'.$y.'e'}=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='$x' AND $question_num_val='e'");
		//fetch
		${'g'.$x.'q'.$y.'a'}=mysqli_fetch_row(${'q_g'.$x.'q'.$y.'a'});
		${'g'.$x.'q'.$y.'b'}=mysqli_fetch_row(${'q_g'.$x.'q'.$y.'b'});
		${'g'.$x.'q'.$y.'c'}=mysqli_fetch_row(${'q_g'.$x.'q'.$y.'c'});
		${'g'.$x.'q'.$y.'d'}=mysqli_fetch_row(${'q_g'.$x.'q'.$y.'d'});
		${'g'.$x.'q'.$y.'e'}=mysqli_fetch_row(${'q_g'.$x.'q'.$y.'e'});
	}
	for($y=5;$y<=9;$y++){
		$question_num_val = "pre_test.question_".$y;
		${'q_g'.$x.'q'.$y.'a'}=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='$x' AND $question_num_val='a'");
		${'q_g'.$x.'q'.$y.'b'}=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='$x' AND $question_num_val='b'");
		${'q_g'.$x.'q'.$y.'c'}=mysqli_query($db,"SELECT count('stud_id') FROM student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND student.g_level='$x' AND $question_num_val='c'");
		${'g'.$x.'q'.$y.'a'}=mysqli_fetch_row(${'q_g'.$x.'q'.$y.'a'});
		${'g'.$x.'q'.$y.'b'}=mysqli_fetch_row(${'q_g'.$x.'q'.$y.'b'});
		${'g'.$x.'q'.$y.'c'}=mysqli_fetch_row(${'q_g'.$x.'q'.$y.'c'});
	}
}

//TOTAL FOR QUESTIONS 1-4
for($x=1;$x<=4;$x++){
	$question_no = "question_".$x;
	//query
	${"q_question".$x."A"} = mysqli_query($db,"SELECT COUNT($question_no) FROM pre_test JOIN student ON pre_test.stud_id = student.stud_id WHERE student.school_id='$school' AND $question_no='a'");
	${"q_question".$x."B"} = mysqli_query($db,"SELECT COUNT($question_no) FROM pre_test JOIN student ON pre_test.stud_id = student.stud_id WHERE student.school_id='$school' AND $question_no='b'");
	${"q_question".$x."C"} = mysqli_query($db,"SELECT COUNT($question_no) FROM pre_test JOIN student ON pre_test.stud_id = student.stud_id WHERE student.school_id='$school' AND $question_no='c'");
	${"q_question".$x."D"} = mysqli_query($db,"SELECT COUNT($question_no) FROM pre_test JOIN student ON pre_test.stud_id = student.stud_id WHERE student.school_id='$school' AND $question_no='d'");
	${"q_question".$x."E"} = mysqli_query($db,"SELECT COUNT($question_no) FROM pre_test JOIN student ON pre_test.stud_id = student.stud_id WHERE student.school_id='$school' AND $question_no='e'");
	//fetch
	${"question".$x."A"}=mysqli_fetch_row(${"q_question".$x."A"});
	${"question".$x."B"}=mysqli_fetch_row(${"q_question".$x."B"});
	${"question".$x."C"}=mysqli_fetch_row(${"q_question".$x."C"});
	${"question".$x."D"}=mysqli_fetch_row(${"q_question".$x."D"});
	${"question".$x."E"}=mysqli_fetch_row(${"q_question".$x."E"});
}

//TOTAL FOR QUESTIONS 5-9
for($x=5;$x<=9;$x++){
	$question_no = "question_".$x;
	//query
	${"q_question".$x."A"} = mysqli_query($db,"SELECT COUNT($question_no) FROM pre_test JOIN student ON pre_test.stud_id = student.stud_id WHERE student.school_id='$school' AND $question_no='a'");
	${"q_question".$x."B"} = mysqli_query($db,"SELECT COUNT($question_no) FROM pre_test JOIN student ON pre_test.stud_id = student.stud_id WHERE student.school_id='$school' AND $question_no='b'");
	${"q_question".$x."C"} = mysqli_query($db,"SELECT COUNT($question_no) FROM pre_test JOIN student ON pre_test.stud_id = student.stud_id WHERE student.school_id='$school' AND $question_no='c'");

	//fetch
	${"question".$x."A"}=mysqli_fetch_row(${"q_question".$x."A"});
	${"question".$x."B"}=mysqli_fetch_row(${"q_question".$x."B"});
	${"question".$x."C"}=mysqli_fetch_row(${"q_question".$x."C"});
}

////////////////////////////////////////////////MODIFY FROM THIS PART/////////////////////////////////////////////////////////////////////

$cu=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id 
	where student.school_id='$school'");
$cu1=mysqli_fetch_row($cu);
$totm=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where school_id='$school' AND gender='Male'");
$totm1=mysqli_fetch_row($totm);
$totf=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE school_id='$school' AND gender='Female'");
$totf1=mysqli_fetch_row($totf);


//BASELINE RESULTS DATA 

//total
$pdf_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='nanay'");
$pdf2=mysqli_fetch_row($pdf_2);

$psm_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='tatay' ");
$psm1=mysqli_fetch_row($psm_1);


$pnr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='pareho' ");

$pnr1=mysqli_fetch_row($pnr_1);

$lbm_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'");

$lbm1=mysqli_fetch_row($lbm_1);

$sbm_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'");

$sbm1=mysqli_fetch_row($sbm_1);

$cnr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS' ");
$cnr1=mysqli_fetch_row($cnr_1);

$eur_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU' ");
$eur1=mysqli_fetch_row($eur_1);


$nar_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA' ");

$nar1=mysqli_fetch_row($nar_1);

$ocr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'");

$ocr1=mysqli_fetch_row($ocr_1);

$otr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code NOT IN('AS', 'EU', 'NA', 'OC') ");
$otr1=mysqli_fetch_row($otr_1);

$ytr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='1'");

$ytr1=mysqli_fetch_row($ytr_1);

$yrr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='2'");

$yrr1=mysqli_fetch_row($yrr_1);

$yer_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='3'");

$yer1=mysqli_fetch_row($yer_1);


$yqr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='4'");

$yqr1=mysqli_fetch_row($yqr_1);

$ywr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='5'");

$ywr1=mysqli_fetch_row($ywr_1);


//fetch for data per grade level Baseline
for($x=1;$x<=10;$x++){
	//query
	${"gr".$x}=mysqli_query($db,"SELECT count('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND g_level='$x'"); // number of Grade 1
	${"ge".$x."m"}=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school'AND g_level='$x' AND gender='Male'"); // number of Male per Grade Level
	${"ge".$x."f"}=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' AND g_level='$x' AND gender='Female'");
	${"pd_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='$x' "); //nanay
	${"ps_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='$x' "); //tatay
	${"pn_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='$x' "); //pareho
	${"lb_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='$x' "); //landbased
	${"sb_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='$x' "); //seabased
	${"cn_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='$x' "); //AS continent
	${"eu_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='$x' "); //EU continent
	${"na_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='$x' "); //NA continent
	${"oc_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='$x' "); //OC continent
	${"ot_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code NOT IN('AS', 'EU', 'NA', 'OC') AND student.g_level='$x'"); //Other Continents
	${"yt_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='$x' "); //years stay 1
	${"yr_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='$x' "); //years stay 2
	${"ye_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='$x' "); //years stay 3
	${"yq_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='$x' "); //years stay 4
	${"yw_".$x}=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='$x' "); //years stay 5+


	//fetch
	${"jr".$x}=mysqli_fetch_row(${"gr".$x}); // number of Grade level students
	${"gen".$x}=mysqli_fetch_row(${"ge".$x."m"}); // number of Male Grade level students
	${"gef".$x}=mysqli_fetch_row(${"ge".$x."f"}); // number of Female Grade level students
	${"pp".$x}=mysqli_fetch_row(${"pd_".$x}); //nanay
	${"ps".$x}=mysqli_fetch_row(${"ps_".$x}); //tatay
	${"pn".$x}=mysqli_fetch_row(${"pn_".$x}); //pareho
	${"lb".$x}=mysqli_fetch_row(${"lb_".$x}); //landbased
	${"sb".$x}=mysqli_fetch_row(${"sb_".$x}); //seabased
	${"cn".$x}=mysqli_fetch_row(${"cn_".$x}); //AS continent
	${"eu".$x}=mysqli_fetch_row(${"eu_".$x}); //EU continent
	${"na".$x}=mysqli_fetch_row(${"na_".$x}); //EU continent
	${"oc".$x}=mysqli_fetch_row(${"oc_".$x}); //OC continent
	${"ot".$x}=mysqli_fetch_row(${"ot_".$x}); //Other continents
	${"yt".$x}=mysqli_fetch_row(${"yt_".$x}); //years stay 1
	${"yr".$x}=mysqli_fetch_row(${"yr_".$x}); //years stay 2
	${"ye".$x}=mysqli_fetch_row(${"ye_".$x}); //years stay 3
	${"yq".$x}=mysqli_fetch_row(${"yq_".$x}); //years stay 4
	${"yw".$x}=mysqli_fetch_row(${"yw_".$x}); //years stay 5+

}


//grade level
// $gr1=mysqli_query($db,"SELECT count('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND g_level='1'");
// $gr2=mysqli_query($db,"SELECT count('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND g_level='2'");
// $gr3=mysqli_query($db,"SELECT count('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND g_level='3'");
// $gr4=mysqli_query($db,"SELECT count('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id WHERE student.school_id='$school' AND g_level='4'");
// $gr5=mysqli_query($db,"SELECT count('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' and g_level='5'");
// $gr6=mysqli_query($db,"SELECT count('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' and g_level='6'");
// $gr7=mysqli_query($db,"SELECT count('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' and g_level='7'");
// $gr8=mysqli_query($db,"SELECT count('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' and g_level='8'");
// $gr9=mysqli_query($db,"SELECT count('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' and g_level='9'");
// $gr10=mysqli_query($db,"SELECT count('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' and g_level='10'");

//gender
// $ge1m=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school'AND g_level='1' AND gender='Male'");
// $ge2m=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school'AND g_level='2' AND gender='Male'");
// $ge3m=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school'AND g_level='3' AND gender='Male'");
// $ge4m=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school'AND g_level='4' AND gender='Male'");
// $ge5m=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school'AND g_level='5' AND gender='Male'");
// $ge6m=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school'AND g_level='6' AND gender='Male'");
// $ge7m=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school'AND g_level='7' AND gender='Male'");
// $ge8m=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school'AND g_level='8' AND gender='Male'");
// $ge9m=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school'AND g_level='9' AND gender='Male'");
// $ge10m=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' AND g_level='10' AND gender='Male'");

// $ge1f=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' AND g_level='1' AND gender='Female'");
// $ge2f=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' AND g_level='2' AND gender='Female'");
// $ge3f=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' AND g_level='3' AND gender='Female'");
// $ge4f=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' AND g_level='4' AND gender='Female'");
// $ge5f=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' AND g_level='5' AND gender='Female'");
// $ge6f=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' AND g_level='6' AND gender='Female'");
// $ge7f=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' AND g_level='7' AND gender='Female'");
// $ge8f=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' AND g_level='8' AND gender='Female'");
// $ge9f=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' AND g_level='9' AND gender='Female'");
// $ge10f=mysqli_query($db,"SELECT COUNT('pre_test.stud_id') from student INNER JOIN pre_test ON student.stud_id=pre_test.stud_id where student.school_id='$school' AND g_level='10' AND gender='Female'");

//PAT ans



// fetch g_level
// $jr1=mysqli_fetch_row($gr1);
// $jr2=mysqli_fetch_row($gr2);
// $jr3=mysqli_fetch_row($gr3);
// $jr4=mysqli_fetch_row($gr4);
// $jr5=mysqli_fetch_row($gr5);
// $jr6=mysqli_fetch_row($gr6);
// $jr7=mysqli_fetch_row($gr7);
// $jr8=mysqli_fetch_row($gr8);
// $jr9=mysqli_fetch_row($gr9);
// $jr10=mysqli_fetch_row($gr10);
// $tot=mysqli_fetch_row($total);

// //fetch gender
// $gen1=mysqli_fetch_row($ge1m);
// $gen2=mysqli_fetch_row($ge2m);
// $gen3=mysqli_fetch_row($ge3m);
// $gen4=mysqli_fetch_row($ge4m);
// $gen5=mysqli_fetch_row($ge5m);
// $gen6=mysqli_fetch_row($ge6m);
// $gen7=mysqli_fetch_row($ge7m);
// $gen8=mysqli_fetch_row($ge8m);
// $gen9=mysqli_fetch_row($ge9m);
// $gen10=mysqli_fetch_row($ge10m);

// $gen11=mysqli_fetch_row($ge1f);
// $gen12=mysqli_fetch_row($ge2f);
// $gen13=mysqli_fetch_row($ge3f);
// $gen14=mysqli_fetch_row($ge4f);
// $gen15=mysqli_fetch_row($ge5f);
// $gen16=mysqli_fetch_row($ge6f);
// $gen17=mysqli_fetch_row($ge7f);
// $gen18=mysqli_fetch_row($ge8f);
// $gen19=mysqli_fetch_row($ge9f);
// $gen20=mysqli_fetch_row($ge10f);

//nanay


// $pd_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='1' ");
// $pd_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='2' ");
// $pd_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='3' ");
// $pd_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='4' ");
// $pd_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='5' ");
// $pd_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='6' ");
// $pd_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='7' ");
// $pd_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='8' ");
// $pd_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='9' ");
// $pd_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='10' ");


// $pp1=mysqli_fetch_row($pd_1);
// $pp2=mysqli_fetch_row($pd_2);
// $pp3=mysqli_fetch_row($pd_3);
// $pp4=mysqli_fetch_row($pd_4);
// $pp5=mysqli_fetch_row($pd_5);
// $pp6=mysqli_fetch_row($pd_6);
// $pp7=mysqli_fetch_row($pd_7);
// $pp8=mysqli_fetch_row($pd_8);
// $pp9=mysqli_fetch_row($pd_9);
// $pp10=mysqli_fetch_row($pd_10);

//tatay
// $ps_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='1' ");
// $ps_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='2' ");
// $ps_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='3' ");
// $ps_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='4' ");
// $ps_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='5' ");
// $ps_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='6' ");
// $ps_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='7' ");
// $ps_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='8' ");
// $ps_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='9' ");
// $ps_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='10' ");


// $ps1=mysqli_fetch_row($ps_1);
// $ps2=mysqli_fetch_row($ps_2);
// $ps3=mysqli_fetch_row($ps_3);
// $ps4=mysqli_fetch_row($ps_4);
// $ps5=mysqli_fetch_row($ps_5);
// $ps6=mysqli_fetch_row($ps_6);
// $ps7=mysqli_fetch_row($ps_7);
// $ps8=mysqli_fetch_row($ps_8);
// $ps9=mysqli_fetch_row($ps_9);
// $ps10=mysqli_fetch_row($ps_10);

//pareho
// $pn_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='1' ");
// $pn_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='2' ");
// $pn_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='3' ");
// $pn_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='4' ");
// $pn_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='5' ");
// $pn_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='6' ");
// $pn_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='7' ");
// $pn_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='8' ");
// $pn_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='9' ");
// $pn_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='10' ");


// $pn1=mysqli_fetch_row($pn_1);
// $pn2=mysqli_fetch_row($pn_2);
// $pn3=mysqli_fetch_row($pn_3);
// $pn4=mysqli_fetch_row($pn_4);
// $pn5=mysqli_fetch_row($pn_5);
// $pn6=mysqli_fetch_row($pn_6);
// $pn7=mysqli_fetch_row($pn_7);
// $pn8=mysqli_fetch_row($pn_8);
// $pn9=mysqli_fetch_row($pn_9);
// $pn10=mysqli_fetch_row($pn_10);

//land based sea based

// $lb_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='2' ");
// $lb_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='3' ");
// $lb_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='4' ");
// $lb_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='5' ");
// $lb_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='6' ");
// $lb_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='7' ");
// $lb_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='8' ");
// $lb_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='9' ");
// $lb_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='10' ");




// $lb1=mysqli_fetch_row($lb_1);
// $lb2=mysqli_fetch_row($lb_2);
// $lb3=mysqli_fetch_row($lb_3);
// $lb4=mysqli_fetch_row($lb_4);
// $lb5=mysqli_fetch_row($lb_5);
// $lb6=mysqli_fetch_row($lb_6);
// $lb7=mysqli_fetch_row($lb_7);
// $lb8=mysqli_fetch_row($lb_8);
// $lb9=mysqli_fetch_row($lb_9);
// $lb10=mysqli_fetch_row($lb_10);

// $sb_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='1' ");
// $sb_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='2' ");
// $sb_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='3' ");
// $sb_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='4' ");
// $sb_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='5' ");
// $sb_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='6' ");
// $sb_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='7' ");
// $sb_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='8' ");
// $sb_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='9' ");
// $sb_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='10' ");




// $sb1=mysqli_fetch_row($sb_1);
// $sb2=mysqli_fetch_row($sb_2);
// $sb3=mysqli_fetch_row($sb_3);
// $sb4=mysqli_fetch_row($sb_4);
// $sb5=mysqli_fetch_row($sb_5);
// $sb6=mysqli_fetch_row($sb_6);
// $sb7=mysqli_fetch_row($sb_7);
// $sb8=mysqli_fetch_row($sb_8);
// $sb9=mysqli_fetch_row($sb_9);
// $sb10=mysqli_fetch_row($sb_10);

//country
// $cn_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='1' ");
// $cn_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='2' ");
// $cn_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='3' ");
// $cn_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='4' ");
// $cn_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='5' ");
// $cn_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='6' ");
// $cn_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='7' ");
// $cn_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='8' ");
// $cn_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='9' ");
// $cn_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='10' ");

// $cn1=mysqli_fetch_row($cn_1);
// $cn2=mysqli_fetch_row($cn_2);
// $cn3=mysqli_fetch_row($cn_3);
// $cn4=mysqli_fetch_row($cn_4);
// $cn5=mysqli_fetch_row($cn_5);
// $cn6=mysqli_fetch_row($cn_6);
// $cn7=mysqli_fetch_row($cn_7);
// $cn8=mysqli_fetch_row($cn_8);
// $cn9=mysqli_fetch_row($cn_9);
// $cn10=mysqli_fetch_row($cn_10);

// $eu_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='1' ");
// $eu_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='2' ");
// $eu_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='3' ");
// $eu_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='4' ");
// $eu_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='5' ");
// $eu_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='6' ");
// $eu_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='7' ");
// $eu_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='8' ");
// $eu_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='9' ");
// $eu_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='10' ");

// $eu1=mysqli_fetch_row($eu_1);
// $eu2=mysqli_fetch_row($eu_2);
// $eu3=mysqli_fetch_row($eu_3);
// $eu4=mysqli_fetch_row($eu_4);
// $eu5=mysqli_fetch_row($eu_5);
// $eu6=mysqli_fetch_row($eu_6);
// $eu7=mysqli_fetch_row($eu_7);
// $eu8=mysqli_fetch_row($eu_8);
// $eu9=mysqli_fetch_row($eu_9);
// $eu10=mysqli_fetch_row($eu_10);

// $na_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='1' ");
// $na_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='2' ");
// $na_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='3' ");
// $na_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='4' ");
// $na_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='5' ");
// $na_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='6' ");
// $na_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='7' ");
// $na_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='8' ");
// $na_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='9' ");
// $na_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='10' ");

// $na1=mysqli_fetch_row($na_1);
// $na2=mysqli_fetch_row($na_2);
// $na3=mysqli_fetch_row($na_3);
// $na4=mysqli_fetch_row($na_4);
// $na5=mysqli_fetch_row($na_5);
// $na6=mysqli_fetch_row($na_6);
// $na7=mysqli_fetch_row($na_7);
// $na8=mysqli_fetch_row($na_8);
// $na9=mysqli_fetch_row($na_9);
// $na10=mysqli_fetch_row($na_10);


// $oc_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='1' ");
// $oc_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='2' ");
// $oc_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='3' ");
// $oc_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='4' ");
// $oc_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='5' ");
// $oc_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='6' ");
// $oc_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='7' ");
// $oc_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='8' ");
// $oc_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='9' ");
// $oc_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='10' ");

// $oc1=mysqli_fetch_row($oc_1);
// $oc2=mysqli_fetch_row($oc_2);
// $oc3=mysqli_fetch_row($oc_3);
// $oc4=mysqli_fetch_row($oc_4);
// $oc5=mysqli_fetch_row($oc_5);
// $oc6=mysqli_fetch_row($oc_6);
// $oc7=mysqli_fetch_row($oc_7);
// $oc8=mysqli_fetch_row($oc_8);
// $oc9=mysqli_fetch_row($oc_9);
// $oc10=mysqli_fetch_row($oc_10);

// $ot_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code NOT IN('AS', 'EU', 'NA', 'OC') AND student.g_level='1'");


// $ot_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND  country.cont_code NOT IN('AS', 'EU', 'NA', 'OC') AND student.g_level='2'");


// $ot_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND  country.cont_code NOT IN('AS', 'EU', 'NA', 'OC') AND student.g_level='3'");


// $ot_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND  country.cont_code NOT IN('AS', 'EU', 'NA', 'OC') AND student.g_level='4' ");
// $ot_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code NOT IN('AS', 'EU', 'NA', 'OC')AND student.g_level='5' ");
// $ot_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code NOT IN('AS', 'EU', 'NA', 'OC')AND student.g_level='6' ");
// $ot_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code NOT IN('AS', 'EU', 'NA', 'OC')AND student.g_level='7' ");
// $ot_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code NOT IN('AS', 'EU', 'NA', 'OC')AND student.g_level='8' ");
// $ot_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code NOT IN('AS', 'EU', 'NA', 'OC')AND student.g_level='9' ");
// $ot_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code NOT IN('AS', 'EU', 'NA', 'OC')AND student.g_level='10' ");

// $ot1=mysqli_fetch_row($ot_1);
// $ot2=mysqli_fetch_row($ot_2);
// $ot3=mysqli_fetch_row($ot_3);
// $ot4=mysqli_fetch_row($ot_4);
// $ot5=mysqli_fetch_row($ot_5);
// $ot6=mysqli_fetch_row($ot_6);
// $ot7=mysqli_fetch_row($ot_7);
// $ot8=mysqli_fetch_row($ot_8);
// $ot9=mysqli_fetch_row($ot_9);
// $ot10=mysqli_fetch_row($ot_10);


/////////////////////////////////////// RESUME HERE ///////////////////////////////////////////////////////////////////////////////////////

// $yt_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='1' ");
// $yt_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='2' ");
// $yt_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='3' ");
// $yt_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='4' ");
// $yt_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='5' ");
// $yt_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='6' ");
// $yt_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='7' ");
// $yt_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='8' ");
// $yt_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='9' ");
// $yt_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='10' ");



// $yt1=mysqli_fetch_row($yt_1);
// $yt2=mysqli_fetch_row($yt_2);
// $yt3=mysqli_fetch_row($yt_3);
// $yt4=mysqli_fetch_row($yt_4);
// $yt5=mysqli_fetch_row($yt_5);
// $yt6=mysqli_fetch_row($yt_6);
// $yt7=mysqli_fetch_row($yt_7);
// $yt8=mysqli_fetch_row($yt_8);
// $yt9=mysqli_fetch_row($yt_9);
// $yt10=mysqli_fetch_row($yt_10);

// $yr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='1' ");
// $yr_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='2' ");
// $yr_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='3' ");
// $yr_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='4' ");
// $yr_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='5' ");
// $yr_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='6' ");
// $yr_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='7' ");
// $yr_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='8' ");
// $yr_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='9' ");
// $yr_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='10' ");



// $yr1=mysqli_fetch_row($yr_1);
// $yr2=mysqli_fetch_row($yr_2);
// $yr3=mysqli_fetch_row($yr_3);
// $yr4=mysqli_fetch_row($yr_4);
// $yr5=mysqli_fetch_row($yr_5);
// $yr6=mysqli_fetch_row($yr_6);
// $yr7=mysqli_fetch_row($yr_7);
// $yr8=mysqli_fetch_row($yr_8);
// $yr9=mysqli_fetch_row($yr_9);
// $yr10=mysqli_fetch_row($yr_10);

// $ye_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='1' ");
// $ye_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='2' ");
// $ye_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='3' ");
// $ye_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='4' ");
// $ye_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='5' ");
// $ye_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='6' ");
// $ye_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='7' ");
// $ye_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='8' ");
// $ye_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='9' ");
// $ye_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='10' ");



// $ye1=mysqli_fetch_row($ye_1);
// $ye2=mysqli_fetch_row($ye_2);
// $ye3=mysqli_fetch_row($ye_3);
// $ye4=mysqli_fetch_row($ye_4);
// $ye5=mysqli_fetch_row($ye_5);
// $ye6=mysqli_fetch_row($ye_6);
// $ye7=mysqli_fetch_row($ye_7);
// $ye8=mysqli_fetch_row($ye_8);
// $ye9=mysqli_fetch_row($ye_9);
// $ye10=mysqli_fetch_row($ye_10);

// $yq_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='1' ");
// $yq_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='2' ");
// $yq_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='3' ");
// $yq_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='4' ");
// $yq_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='5' ");
// $yq_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='6' ");
// $yq_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='7' ");
// $yq_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='8' ");
// $yq_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='9' ");
// $yq_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='10' ");



// $yq1=mysqli_fetch_row($yq_1);
// $yq2=mysqli_fetch_row($yq_2);
// $yq3=mysqli_fetch_row($yq_3);
// $yq4=mysqli_fetch_row($yq_4);
// $yq5=mysqli_fetch_row($yq_5);
// $yq6=mysqli_fetch_row($yq_6);
// $yq7=mysqli_fetch_row($yq_7);
// $yq8=mysqli_fetch_row($yq_8);
// $yq9=mysqli_fetch_row($yq_9);
// $yq10=mysqli_fetch_row($yq_10);

// $yw_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='1' ");
// $yw_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='2' ");
// $yw_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='3' ");
// $yw_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='4' ");
// $yw_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='5' ");
// $yw_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='6' ");
// $yw_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='7' ");
// $yw_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='8' ");
// $yw_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='9' ");
// $yw_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN student ON parent.stud_id=student.stud_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='10' ");



// $yw1=mysqli_fetch_row($yw_1);
// $yw2=mysqli_fetch_row($yw_2);
// $yw3=mysqli_fetch_row($yw_3);
// $yw4=mysqli_fetch_row($yw_4);
// $yw5=mysqli_fetch_row($yw_5);
// $yw6=mysqli_fetch_row($yw_6);
// $yw7=mysqli_fetch_row($yw_7);
// $yw8=mysqli_fetch_row($yw_8);
// $yw9=mysqli_fetch_row($yw_9);
// $yw10=mysqli_fetch_row($yw_10);



?>