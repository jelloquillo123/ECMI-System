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

// $sch=mysqli_query($db,"SELECT school.school_name,diocese.diocese_name,school.school_id
// FROM school
// INNER JOIN diocese
// ON school.diocese_id=diocese.diocese_id
// INNER JOIN coordinator
// ON school.school_id=coordinator.school_id
// INNER JOIN account
// ON coordinator.account_id=account.account_id
// WHERE account.username='$username'");
// $scn=mysqli_fetch_row($sch);

// $school=$scn[2];



// $total=mysqli_query($db,"SELECT count('school_id') from student where school_id='1'");
// //grade level
// $gr1=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='1'");
// $gr2=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='2'");
// $gr3=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='3'");
// $gr4=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='4'");
// $gr5=mysqli_query($db,"SELECT count('school_id') from student where school_id='$school' and g_level='5'");
// $gr6=mysqli_query($db,"SELECT count('school_id') from student where school_id='$school' and g_level='6'");
// $gr7=mysqli_query($db,"SELECT count('school_id') from student where school_id='$school' and g_level='7'");
// $gr8=mysqli_query($db,"SELECT count('school_id') from student where school_id='$school' and g_level='8'");
// $gr9=mysqli_query($db,"SELECT count('school_id') from student where school_id='$school' and g_level='9'");
// $gr10=mysqli_query($db,"SELECT count('school_id') from student where school_id='$school' and g_level='10'");

// //gender
// // $ge1m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='1' AND gender='Male'");
// // $ge2m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='2' AND gender='Male'");
// // $ge3m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='3' AND gender='Male'");
// // $ge4m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='4' AND gender='Male'");
// // $ge5m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='5' AND gender='Male'");
// // $ge6m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='6' AND gender='Male'");
// // $ge7m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='7' AND gender='Male'");
// // $ge8m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='8' AND gender='Male'");
// // $ge9m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='9' AND gender='Male'");
// // $ge10m=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='10' AND gender='Male'");

// for ($i=1; $i<11 ; $i++ )
// 	$gem=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='$i' AND gender='Male'");


// $ge1f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='1' AND gender='Female'");
// $ge2f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='2' AND gender='Female'");
// $ge3f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='3' AND gender='Female'");
// $ge4f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='4' AND gender='Female'");
// $ge5f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='5' AND gender='Female'");
// $ge6f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='6' AND gender='Female'");
// $ge7f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='7' AND gender='Female'");
// $ge8f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='8' AND gender='Female'");
// $ge9f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='9' AND gender='Female'");
// $ge10f=mysqli_query($db,"SELECT count('school_id') FROM student WHERE school_id='$school' AND g_level='10' AND gender='Female'");

// //PAT ans



// // fetch g_level
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

// $cu=mysqli_query($db,"SELECT COUNT(stud_id) FROM student WHERE school_id='$school'");
// $cu1=mysqli_fetch_row($cu);
// $totm=mysqli_query($db,"SELECT COUNT(stud_id) FROM student WHERE school_id='$school' AND gender='Male'");
// $totm1=mysqli_fetch_row($totm);
// $totf=mysqli_query($db,"SELECT COUNT(stud_id) FROM student WHERE school_id='$school' AND gender='Female'");
// $totf1=mysqli_fetch_row($totf);

// //total
// $pdf_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='nanay'");
// $pdf2=mysqli_fetch_row($pdf_2);

// $psm_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='tatay' ");
// $psm1=mysqli_fetch_row($psm_1);


// $pnr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='pareho' ");

// $pnr1=mysqli_fetch_row($pnr_1);

// $lbm_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'");

// $lbm1=mysqli_fetch_row($lbm_1);

// $sbm_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'");

// $sbm1=mysqli_fetch_row($sbm_1);

// $cnr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS' ");
// $cnr1=mysqli_fetch_row($cnr_1);

// $eur_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU' ");
// $eur1=mysqli_fetch_row($eur_1);


// $nar_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA' ");

// $nar1=mysqli_fetch_row($nar_1);

// $ocr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'");

// $ocr1=mysqli_fetch_row($ocr_1);

// $otr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='1' AND country.cont_code='AF'OR country.cont_code='AN' OR country.cont_code='SA' ");
// $otr1=mysqli_fetch_row($otr_1);

// $ytr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='1'");

// $ytr1=mysqli_fetch_row($ytr_1);

// $yrr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='2'");

// $yrr1=mysqli_fetch_row($yrr_1);

// $yer_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='3'");

// $yer1=mysqli_fetch_row($yer_1);


// $yqr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='4'");

// $yqr1=mysqli_fetch_row($yqr_1);

// $ywr_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='5'");

// $ywr1=mysqli_fetch_row($ywr_1);

// //nanay
// $pd_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='1' ");
// $pd_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='2' ");
// $pd_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='3' ");
// $pd_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='4' ");
// $pd_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='5' ");
// $pd_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='6' ");
// $pd_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='7' ");
// $pd_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='8' ");
// $pd_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='9' ");
// $pd_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='nanay' AND student.g_level='10' ");


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

// //tatay
// $ps_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='1' ");
// $ps_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='2' ");
// $ps_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='3' ");
// $ps_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='4' ");
// $ps_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='5' ");
// $ps_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='6' ");
// $ps_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='7' ");
// $ps_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='8' ");
// $ps_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='9' ");
// $ps_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='tatay' AND student.g_level='10' ");


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

// //pareho
// $pn_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='1' ");
// $pn_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='2' ");
// $pn_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='3' ");
// $pn_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='4' ");
// $pn_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='5' ");
// $pn_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='6' ");
// $pn_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='7' ");
// $pn_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='8' ");
// $pn_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='9' ");
// $pn_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.parent_who='pareho' AND student.g_level='10' ");


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

// //land based sea based
// $lb_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='1' ");
// $lb_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='2' ");
// $lb_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='3' ");
// $lb_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='4' ");
// $lb_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='5' ");
// $lb_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='6' ");
// $lb_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='7' ");
// $lb_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='8' ");
// $lb_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='9' ");
// $lb_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='LB'  AND student.g_level='10' ");




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
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='1' ");
// $sb_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='2' ");
// $sb_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='3' ");
// $sb_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='4' ");
// $sb_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='5' ");
// $sb_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='6' ");
// $sb_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='7' ");
// $sb_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='8' ");
// $sb_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='9' ");
// $sb_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN job on parent.job_id=job.job_id WHERE student.school_id='$school' AND job.job_based='SB'  AND student.g_level='10' ");




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

// //country
// $cn_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='1' ");
// $cn_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='2' ");
// $cn_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='3' ");
// $cn_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='4' ");
// $cn_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='5' ");
// $cn_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='6' ");
// $cn_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='7' ");
// $cn_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='8' ");
// $cn_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='9' ");
// $cn_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='AS'  AND student.g_level='10' ");

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
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='1' ");
// $eu_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='2' ");
// $eu_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='3' ");
// $eu_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='4' ");
// $eu_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='5' ");
// $eu_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='6' ");
// $eu_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='7' ");
// $eu_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='8' ");
// $eu_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='9' ");
// $eu_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='EU'  AND student.g_level='10' ");

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
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='1' ");
// $na_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='2' ");
// $na_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='3' ");
// $na_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='4' ");
// $na_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='5' ");
// $na_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='6' ");
// $na_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='7' ");
// $na_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='8' ");
// $na_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='9' ");
// $na_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='NA'  AND student.g_level='10' ");

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
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='1' ");
// $oc_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='2' ");
// $oc_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='3' ");
// $oc_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='4' ");
// $oc_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='5' ");
// $oc_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='6' ");
// $oc_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='7' ");
// $oc_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='8' ");
// $oc_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='9' ");
// $oc_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='$school' AND country.cont_code='OC'  AND student.g_level='10' ");

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

// $ot_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='1' AND country.cont_code='AF'OR country.cont_code='AN' OR country.cont_code='SA'AND student.g_level='1' ");
// $ot_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='1' AND country.cont_code='AF'OR country.cont_code='AN' OR country.cont_code='SA'AND student.g_level='2' ");
// $ot_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='1' AND country.cont_code='AF'OR country.cont_code='AN' OR country.cont_code='SA'AND student.g_level='3' ");
// $ot_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='1' AND country.cont_code='AF'OR country.cont_code='AN' OR country.cont_code='SA'AND student.g_level='4' ");
// $ot_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='1' AND country.cont_code='AF'OR country.cont_code='AN' OR country.cont_code='SA'AND student.g_level='5' ");
// $ot_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='1' AND country.cont_code='AF'OR country.cont_code='AN' OR country.cont_code='SA'AND student.g_level='6' ");
// $ot_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='1' AND country.cont_code='AF'OR country.cont_code='AN' OR country.cont_code='SA'AND student.g_level='7' ");
// $ot_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='1' AND country.cont_code='AF'OR country.cont_code='AN' OR country.cont_code='SA'AND student.g_level='8' ");
// $ot_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='1' AND country.cont_code='AF'OR country.cont_code='AN' OR country.cont_code='SA'AND student.g_level='9' ");
// $ot_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id INNER JOIN country on parent.country_id=country.country_id INNER JOIN continent on country.cont_code=continent.cont_code WHERE student.school_id='1' AND country.cont_code='AF'OR country.cont_code='AN' OR country.cont_code='SA'AND student.g_level='10' ");

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

// $yt_1=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='1' ");
// $yt_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='2' ");
// $yt_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='3' ");
// $yt_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='4' ");
// $yt_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='5' ");
// $yt_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='6' ");
// $yt_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='7' ");
// $yt_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='8' ");
// $yt_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='9' ");
// $yt_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='1' AND student.g_level='10' ");



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
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='1' ");
// $yr_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='2' ");
// $yr_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='3' ");
// $yr_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='4' ");
// $yr_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='5' ");
// $yr_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='6' ");
// $yr_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='7' ");
// $yr_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='8' ");
// $yr_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='9' ");
// $yr_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='2' AND student.g_level='10' ");



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
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='1' ");
// $ye_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='2' ");
// $ye_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='3' ");
// $ye_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='4' ");
// $ye_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='5' ");
// $ye_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='6' ");
// $ye_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='7' ");
// $ye_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='8' ");
// $ye_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='9' ");
// $ye_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='3' AND student.g_level='10' ");



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
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='1' ");
// $yq_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='2' ");
// $yq_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='3' ");
// $yq_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='4' ");
// $yq_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='5' ");
// $yq_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='6' ");
// $yq_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='7' ");
// $yq_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='8' ");
// $yq_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='9' ");
// $yq_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='4' AND student.g_level='10' ");



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
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='1' ");
// $yw_2=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='2' ");
// $yw_3=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='3' ");
// $yw_4=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='4' ");
// $yw_5=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='5' ");
// $yw_6=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='6' ");
// $yw_7=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='7' ");
// $yw_8=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='8' ");
// $yw_9=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 
// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='9' ");

//$yw_10=mysqli_query($db,"SELECT COUNT(parent_who) FROM parent 


// INNER JOIN family ON parent.parent_id=family.parent_id INNER JOIN student ON student.fam_id=family.fam_id WHERE student.school_id='$school' AND parent.years_stay='5' AND student.g_level='10' ");



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

<body onload = "">

      <div class="table-responsive">
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
        <table class="table table-hover table-bordered" style="background-color:#fff;">
      <tr>
        <th rowspan="2">GRADE/YEAR LEVEL</th>
        <th colspan="3">Number of SDO</th>
        <th colspan="5">SDO Parents Category</th>
        <th colspan="5">Country</th>
        <th colspan="5">Years of Stay Overseas</th>
      </tr>
      <tr>
      	<th>Total</th>
        <th>Male</th>
        <th>Female</th>
        <th>Mother</th>
        <th>Father</th>
        <th>Both</th>
        <th>LB</th>
        <th>SB</th>
        <th>Asia</th>
        <th>Europe</th>
        <th>North America</th>
        <th>Oceania</th>
        <th>Others</th>
        <th>1-3</th>
        <th>4-6</th>
        <th>7-10</th>
        <th>11-15</th>
        <th>16-20</th>
      </tr>
    
      <?php 
for($i=1;$i<11;$i++)
{

   $infosql=mysqli_query($db,"SELECT COUNT(stud_id) as 'all', 
(SELECT COUNT(*) FROM student WHERE school_id='$school' AND g_level='$i' AND gender='Male') as 'male',
(SELECT COUNT(*) FROM student WHERE school_id='$school' AND g_level='$i' AND gender='Female') as 'female',

(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'tatay' AND d.g_level = '$i' AND d.school_id = '$school') as 'tatay',
(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'nanay' AND d.g_level = '$i' AND d.school_id = '$school') as 'nanay',
(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'pareho' AND d.g_level = '$i' AND d.school_id = '$school') as 'pareho',

(SELECT COUNT(*) FROM parent a INNER JOIN job b ON b.job_id = a.job_id INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE b.job_based = 'LB' AND d.g_level = '$i' AND d.school_id = '$school') as 'LB',
(SELECT COUNT(*) FROM parent a INNER JOIN job b ON b.job_id = a.job_id INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE b.job_based = 'SB' AND d.g_level = '$i' AND d.school_id = '$school') as 'SB',

(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'AS' AND d.g_level = '$i' AND d.school_id = '$school') as 'AS',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'EU' AND d.g_level = '$i' AND d.school_id = '$school') as 'EU',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'NA' AND d.g_level = '$i' AND d.school_id = '$school') as 'NA',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'OC' AND d.g_level = '$i' AND d.school_id = '$school') as 'OC',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code NOT IN('AS', 'EU', 'NA', 'OC') AND d.g_level = '$i' AND d.school_id = '$school') as 'OTHERS',

(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE     a.years_stay = '1' AND d.g_level = '$i' AND d.school_id = '$school') as '1st',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE 	   a.years_stay = '2' AND d.g_level = '$i' AND d.school_id = '$school') as '2nd',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE     a.years_stay = '3' AND d.g_level = '$i' AND d.school_id = '$school') as '3rd',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE 
    a.years_stay = '4' AND d.g_level = '$i' AND d.school_id = '$school') as '4th',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE 
    a.years_stay = '5' AND d.g_level = '$i' AND d.school_id = '$school') as '5th'

FROM parent a
INNER JOIN family b ON b.parent_id = a.parent_id
INNER JOIN student d ON d.fam_id = b.fam_id
WHERE d.g_level = '$i' AND d.school_id='$school' ");
   
 $info=mysqli_fetch_row($infosql);



 echo "<tr>
       <td>Grade ".$i."</td>
       <td>".$info[0]."</td>
       <td>".$info[1]."</td>
        <td>".$info[2]."</td>
       <td>".$info[3]."</td>
       <td>".$info[4]."</td>
       <td>".$info[5]."</td>
       <td>".$info[6]."</td>
       <td>".$info[7]."</td>
       <td>".$info[8]."</td>
       <td>".$info[9]."</td>
       <td>".$info[10]."</td>
       <td>".$info[11]."</td>
       <td>".$info[12]."</td>
       <td>".$info[13]."</td>
       <td>".$info[14]."</td>
       <td>".$info[15]."</td>
       <td>".$info[16]."</td>
       <td>".$info[17]."</td>";




}

$info1_sql=mysqli_query($db,"SELECT COUNT(stud_id) as 'all', 
(SELECT COUNT(*) FROM student WHERE school_id='$school' AND gender='Male') as 'male',
(SELECT COUNT(*) FROM student WHERE school_id='$school' AND gender='Female') as 'female',

(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'tatay' AND d.school_id = '$school') as 'tatay',
(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'nanay' AND d.school_id = '$school') as 'nanay',
(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'pareho' AND d.school_id = '$school') as 'pareho',

(SELECT COUNT(*) FROM parent a INNER JOIN job b ON b.job_id = a.job_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.job_based = 'LB' AND d.school_id = '$school') as 'LB',
(SELECT COUNT(*) FROM parent a INNER JOIN job b ON b.job_id = a.job_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.job_based = 'SB' AND d.school_id = '$school') as 'SB',

(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'AS' AND d.school_id = '$school') as 'AS',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'EU' AND d.school_id = '$school') as 'EU',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'NA' AND d.school_id = '$school') as 'NA',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'OC' AND d.school_id = '$school') as 'OC',
(SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code NOT IN('AS', 'EU', 'NA', 'OC') AND d.school_id = '$school') as 'OTHERS',

(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE     a.years_stay = '1' AND d.school_id = '$school') as '1st',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE 	   a.years_stay = '2' AND d.school_id = '$school') as '2nd',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE     a.years_stay = '3'AND d.school_id = '$school') as '3rd',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE 
    a.years_stay = '4' AND d.school_id = '$school') as '4th',
(SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE 
    a.years_stay = '5' AND d.school_id = '$school') as '5th'

FROM parent a
JOIN family b ON b.parent_id = a.parent_id
JOIN student d ON d.fam_id = b.fam_id
WHERE d.school_id='$school' ");

$info1=mysqli_fetch_row($info1_sql);




 echo "<tr>
       <td>GRAND TOTAL</td>
       <td>".$info1[0]."</td>
       <td>".$info1[1]."</td>
        <td>".$info1[2]."</td>
       <td>".$info1[3]."</td>
       <td>".$info1[4]."</td>
       <td>".$info1[5]."</td>
       <td>".$info1[6]."</td>
       <td>".$info1[7]."</td>
       <td>".$info1[8]."</td>
       <td>".$info1[9]."</td>
       <td>".$info1[10]."</td>
       <td>".$info1[11]."</td>
       <td>".$info1[12]."</td>
       <td>".$info1[13]."</td>
       <td>".$info1[14]."</td>
       <td>".$info1[15]."</td>
       <td>".$info1[16]."</td>
       <td>".$info1[17]."</td>";




      ?>






      <!-- <tr>
        <td>GRADE 1</td>
        <td><?php echo $jr1[0];  ?></td>
        <td><?php echo $gen1[0];  ?></td>
        <td><?php echo $gen11[0];  ?></td>
        <td><?php echo $pp1[0]; ?></td>
        <td><?php echo $ps1[0]; ?></td>
        <td><?php echo $pn1[0]; ?></td>
        <td><?php echo $lb1[0]; ?></td>
        <td><?php echo $sb1[0]; ?></td>
        <td><?php echo $cn1[0]; ?></td>
        <td><?php echo $eu1[0]; ?></td>
        <td><?php echo $na1[0]; ?></td>
        <td><?php echo $oc1[0]; ?></td>
        <td><?php echo $ot1[0]; ?></td>
        <td><?php echo $yt1[0]; ?></td>
        <td><?php echo $yr1[0]; ?></td>
        <td><?php echo $ye1[0]; ?></td>
        <td><?php echo $yq1[0]; ?></td>
        <td><?php echo $yw1[0]; ?></td>
      </tr>
      <tr>
        <td>GRADE 2</td>
        <td><?php echo $jr2[0];  ?></td>
        <td><?php echo $gen2[0];  ?></td>
        <td><?php echo $gen12[0];  ?></td>
        <td><?php echo $pp2[0]; ?></td>
        <td><?php echo $ps2[0]; ?></td>
        <td><?php echo $pn2[0]; ?></td>
        <td><?php echo $lb2[0]; ?></td>
        <td><?php echo $sb2[0]; ?></td>
        <td><?php echo $cn2[0]; ?></td>
        <td><?php echo $eu2[0]; ?></td>
        <td><?php echo $na2[0]; ?></td>
        <td><?php echo $oc2[0]; ?></td>
        <td><?php echo $ot2[0]; ?></td>
        <td><?php echo $yt2[0]; ?></td>
        <td><?php echo $yr2[0]; ?></td>
        <td><?php echo $ye2[0]; ?></td>
        <td><?php echo $yq2[0]; ?></td>
        <td><?php echo $yw2[0]; ?></td>
      </tr>
      <tr>
        <td>GRADE 3</td>
        <td><?php echo $jr3[0];  ?></td>
        <td><?php echo $gen3[0];  ?></td>
        <td><?php echo $gen13[0];  ?></td>
        <td><?php echo $pp3[0]; ?></td>
        <td><?php echo $ps3[0]; ?></td>
        <td><?php echo $pn3[0]; ?></td>
        <td><?php echo $lb3[0]; ?></td>
        <td><?php echo $sb3[0]; ?></td>
        <td><?php echo $cn3[0]; ?></td>
        <td><?php echo $eu3[0]; ?></td>
        <td><?php echo $na3[0]; ?></td>
        <td><?php echo $oc3[0]; ?></td>
        <td><?php echo $ot3[0]; ?></td>
        <td><?php echo $yt3[0]; ?></td>
        <td><?php echo $yr3[0]; ?></td>
        <td><?php echo $ye3[0]; ?></td>
        <td><?php echo $yq3[0]; ?></td>
        <td><?php echo $yw3[0]; ?></td>
      </tr>
      <tr>
        <td>GRADE 4</td>
        <td><?php echo $jr4[0];  ?></td>
        <td><?php echo $gen4[0];  ?></td>
        <td><?php echo $gen14[0];  ?></td>
        <td><?php echo $pp4[0]; ?></td>
        <td><?php echo $ps4[0]; ?></td>
        <td><?php echo $pn4[0]; ?></td>
        <td><?php echo $lb4[0]; ?></td>
        <td><?php echo $sb4[0]; ?></td>
        <td><?php echo $cn4[0]; ?></td>
        <td><?php echo $eu4[0]; ?></td>
        <td><?php echo $na4[0]; ?></td>
        <td><?php echo $oc4[0]; ?></td>
        <td><?php echo $ot4[0]; ?></td>
        <td><?php echo $yt4[0]; ?></td>
        <td><?php echo $yr4[0]; ?></td>
        <td><?php echo $ye4[0]; ?></td>
        <td><?php echo $yq4[0]; ?></td>
        <td><?php echo $yw4[0]; ?></td>
      </tr>
      <tr>
        <td>GRADE 5</td>
        <td><?php echo $jr5[0];  ?></td>
        <td><?php echo $gen5[0];  ?></td>
        <td><?php echo $gen15[0];  ?></td>
        <td><?php echo $pp5[0]; ?></td>
        <td><?php echo $ps5[0]; ?></td>
        <td><?php echo $pn5[0]; ?></td>
        <td><?php echo $lb5[0]; ?></td>
        <td><?php echo $sb5[0]; ?></td>
        <td><?php echo $cn5[0]; ?></td>
        <td><?php echo $eu5[0]; ?></td>
        <td><?php echo $na5[0]; ?></td>
        <td><?php echo $oc5[0]; ?></td>
        <td><?php echo $ot5[0]; ?></td>
        <td><?php echo $yt5[0]; ?></td>
        <td><?php echo $yr5[0]; ?></td>
        <td><?php echo $ye5[0]; ?></td>
        <td><?php echo $yq5[0]; ?></td>
        <td><?php echo $yw5[0]; ?></td>
      </tr>
      <tr>
        <td>GRADE 6</td>
        <td><?php echo $jr6[0];  ?></td>
        <td><?php echo $gen6[0];  ?></td>
        <td><?php echo $gen16[0];  ?></td>
        <td><?php echo $pp6[0]; ?></td>
        <td><?php echo $ps6[0]; ?></td>
        <td><?php echo $pn6[0]; ?></td>
        <td><?php echo $lb6[0]; ?></td>
        <td><?php echo $sb6[0]; ?></td>
        <td><?php echo $cn6[0]; ?></td>
        <td><?php echo $eu6[0]; ?></td>
        <td><?php echo $na6[0]; ?></td>
        <td><?php echo $oc6[0]; ?></td>
        <td><?php echo $ot6[0]; ?></td>
        <td><?php echo $yt6[0]; ?></td>
        <td><?php echo $yr6[0]; ?></td>
        <td><?php echo $ye6[0]; ?></td>
        <td><?php echo $yq6[0]; ?></td>
        <td><?php echo $yw6[0]; ?></td>
      </tr>
      <tr>
        <td>GRADE 7</td>
        <td><?php echo $jr7[0];  ?></td>
        <td><?php echo $gen7[0];  ?></td>
        <td><?php echo $gen17[0];  ?></td>
        <td><?php echo $pp7[0]; ?></td>
        <td><?php echo $ps7[0]; ?></td>
        <td><?php echo $pn7[0]; ?></td>
        <td><?php echo $lb7[0]; ?></td>
        <td><?php echo $sb7[0]; ?></td>
        <td><?php echo $cn7[0]; ?></td>
        <td><?php echo $eu7[0]; ?></td>
        <td><?php echo $na7[0]; ?></td>
        <td><?php echo $oc7[0]; ?></td>
        <td><?php echo $ot7[0]; ?></td>
        <td><?php echo $yt7[0]; ?></td>
        <td><?php echo $yr7[0]; ?></td>
        <td><?php echo $ye7[0]; ?></td>
        <td><?php echo $yq7[0]; ?></td>
        <td><?php echo $yw7[0]; ?></td>
      </tr>
      <tr>
        <td>GRADE 8</td>
        <td><?php echo $jr8[0];  ?></td>
        <td><?php echo $gen8[0];  ?></td>
        <td><?php echo $gen18[0];  ?></td>
        <td><?php echo $pp8[0]; ?></td>
        <td><?php echo $ps8[0]; ?></td>
        <td><?php echo $pn8[0]; ?></td>
        <td><?php echo $lb8[0]; ?></td>
        <td><?php echo $sb8[0]; ?></td>
        <td><?php echo $cn8[0]; ?></td>
        <td><?php echo $eu8[0]; ?></td>
        <td><?php echo $na8[0]; ?></td>
        <td><?php echo $oc8[0]; ?></td>
        <td><?php echo $ot8[0]; ?></td>
        <td><?php echo $yt8[0]; ?></td>
        <td><?php echo $yr8[0]; ?></td>
        <td><?php echo $ye8[0]; ?></td>
        <td><?php echo $yq8[0]; ?></td>
        <td><?php echo $yw8[0]; ?></td>
      </tr>
      <tr>
        <td>GRADE 9</td>
        <td><?php echo $jr9[0];  ?></td>
        <td><?php echo $gen9[0];  ?></td>
        <td><?php echo $gen19[0];  ?></td>
        <td><?php echo $pp9[0]; ?></td>
        <td><?php echo $ps9[0]; ?></td>
        <td><?php echo $pn9[0]; ?></td>
        <td><?php echo $lb9[0]; ?></td>
        <td><?php echo $sb9[0]; ?></td>
        <td><?php echo $cn9[0]; ?></td>
        <td><?php echo $eu9[0]; ?></td>
        <td><?php echo $na9[0]; ?></td>
        <td><?php echo $oc9[0]; ?></td>
        <td><?php echo $ot9[0]; ?></td>
        <td><?php echo $yt9[0]; ?></td>
        <td><?php echo $yr9[0]; ?></td>
        <td><?php echo $ye9[0]; ?></td>
        <td><?php echo $yq9[0]; ?></td>
        <td><?php echo $yw9[0]; ?></td>
      </tr>
      <tr>

      <tr>
        <th>GRAND TOTAL</th>
        <td><?php echo $cu1[0];?></td>
        <td><?php echo $totm1[0];?></td>
        <td><?php echo $totf1[0];?></td>
        <td><?php echo $pdf2[0];?></td>
        <td><?php echo $psm1[0];?></td>
        <td><?php echo $pnr1[0];?></td>
        <td><?php echo $lbm1[0];?></td>
        <td><?php echo $sbm1[0];?></td>
        <td><?php echo $cnr1[0];?></td>
        <td><?php echo $eur1[0];?></td>
        <td><?php echo $nar1[0];?></td>
        <td><?php echo $ocr1[0];?></td>
        <td><?php echo $otr1[0];?></td>
        <td><?php echo $ytr1[0];?></td>
        <td><?php echo $yrr1[0];?></td>
        <td><?php echo $yer1[0];?></td>
        <td><?php echo $yqr1[0];?></td>
        <td><?php echo $ywr1[0];?></td>
      </tr> -->
      </table>
    </div>
    </body>
