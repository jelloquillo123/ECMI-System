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

?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="css/dropdowns-enhancement.min.css" rel="stylesheet">

    <!--External CSS-->
    <link rel="stylesheet" type="text/css" href="stylesdbms.css">
</head>

<body onload = "prints();">

      <div class="table-responsive">
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-5">
      <p style="font-size: 20px; font-weight: bold;"><?php echo $scn[0]; ?> </p>
      </div>
      <div class="col-md-offset-1 col-md-5">
      <p style="font-size: 20px; font-weight: bold;">Diocese of <?php echo $scn[1];  ?> </p>
      </div>
      </div>
</div>
        <table class="table table-hover table-bordered" style="margin-top: 30px; background-color:#fff;">
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
        <th>16+</th>
      </tr>
    
      <?php 
for($i=1;$i<11;$i++)
{

   $infosql=mysqli_query($db,"SELECT COUNT(stud_id) as 'all', 
(SELECT COUNT(*) FROM student WHERE school_id='$school' AND g_level='$i' AND gender='Male') as 'male',
(SELECT COUNT(*) FROM student WHERE school_id='$school' AND g_level='$i' AND gender='Female') as 'female',

(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'nanay' AND d.g_level = '$i' AND d.school_id = '$school') as 'nanay',
(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'tatay' AND d.g_level = '$i' AND d.school_id = '$school') as 'tatay',
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

(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'nanay' AND d.school_id = '$school') as 'nanay',
(SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'tatay' AND d.school_id = '$school') as 'tatay',
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

      </table>
    </div>
    </body>
