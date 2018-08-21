<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'admin_authentication.php';
require 'connect.php';
require 'admin_baseline_reports_printdb.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>
  </title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style>
  table, th, td {
  border: 1px solid black;
  }
  </style>

</head>
<body onload="prints();">

  <div class="container-fluid">
    <div class="row" style="padding-top: 20px;">
        <div class="col-lg-12">
            <div class="table-responsive">
              <div style="padding-bottom: 20px;">
                <h2>Baseline Data Summary Results</h2>
                <h4>Diocese of <?php echo $dio_details[1]; ?></h4>   
              </div>
                <table class="table table-hover table-bordered" style="background-color: #fff; text-align: center;">
                    <tr>
                      <th rowspan="2">SCHOOL</th>
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

                    while($school=mysqli_fetch_row($school_sql))
                    {   

                      $info1_sql=mysqli_query($db,"SELECT COUNT(stud_id) as 'all', 
                        (SELECT COUNT(*) FROM pre_test f INNER JOIN student d ON f.stud_id = d.stud_id WHERE d.school_id='$school[0]' AND d.gender='Male') as 'male',
                        (SELECT COUNT(*) FROM pre_test f INNER JOIN student d ON f.stud_id = d.stud_id WHERE d.school_id='$school[0]' AND d.gender='Female') as 'female',
                        (SELECT COUNT(*) FROM pre_test f INNER JOIN student d ON f.stud_id = d.stud_id WHERE d.school_id='$school[0]'),

                        (SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'tatay' AND d.school_id = '$school[0]') as 'tatay',
                        (SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'nanay' AND d.school_id = '$school[0]') as 'nanay',
                        (SELECT COUNT(a.parent_who) FROM parent a INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE a.parent_who = 'pareho' AND d.school_id = '$school[0]') as 'pareho',

                        (SELECT COUNT(*) FROM parent a INNER JOIN job b ON b.job_id = a.job_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.job_based = 'LB' AND d.school_id = '$school[0]') as 'LB',
                        (SELECT COUNT(*) FROM parent a INNER JOIN job b ON b.job_id = a.job_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.job_based = 'SB' AND d.school_id = '$school[0]') as 'SB',

                        (SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'AS' AND d.school_id = '$school[0]') as 'AS',
                        (SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'EU' AND d.school_id = '$school[0]') as 'EU',
                        (SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'NA' AND d.school_id = '$school[0]') as 'NA',
                        (SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code = 'OC' AND d.school_id = '$school[0]') as 'OC',
                        (SELECT COUNT(*) FROM parent a INNER JOIN country b ON b.country_id = a.country_id INNER JOIN family c ON c.parent_id = a.parent_id JOIN student d ON d.fam_id = c.fam_id WHERE b.cont_code NOT IN('AS', 'EU', 'NA', 'OC') AND d.school_id = '$school[0]') as 'OTHERS',

                        (SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE     a.years_stay = '1' AND d.school_id = '$school[0]') as '1st',
                        (SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE     a.years_stay = '2' AND d.school_id = '$school[0]') as '2nd',
                        (SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE     a.years_stay = '3'AND d.school_id = '$school[0]') as '3rd',
                        (SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE 
                        a.years_stay = '4' AND d.school_id = '$school[0]') as '4th',
                        (SELECT COUNT(*) FROM parent a  INNER JOIN family c ON c.parent_id = a.parent_id INNER JOIN student d ON d.fam_id = c.fam_id WHERE 
                        a.years_stay = '5' AND d.school_id = '$school[0]') as '5th'

                        FROM parent a
                        JOIN family b ON b.parent_id = a.parent_id
                        JOIN student d ON d.fam_id = b.fam_id
                        WHERE d.school_id='$school[0]'");
                    $info1=mysqli_fetch_row($info1_sql);

                    echo "<tr>
                    <td>".$school[1]."</td>
                    <td>".$info1[3]."</td>
                    <td>".$info1[1]."</td>
                    <td>".$info1[2]."</td>
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
                    <td>".$info1[17]."</td>
                    <td>".$info1[18]."</td>
                    </tr>";  
                    }

                    echo "<tr>
                    <td><b>TOTAL:</b> </td>
                    <td><b>".$info[3]."</b></td>
                    <td><b>".$info[1]."</b></td>
                    <td><b>".$info[2]."</b></td>
                    <td><b>".$info[4]."</b></td>
                    <td><b>".$info[5]."</b></td>
                    <td><b>".$info[6]."</b></td>
                    <td><b>".$info[7]."</b></td>
                    <td><b>".$info[8]."</b></td>
                    <td><b>".$info[9]."</b></td>
                    <td><b>".$info[10]."</b></td>
                    <td><b>".$info[11]."</b></td>
                    <td><b>".$info[12]."</b></td>
                    <td><b>".$info[13]."</b></td>
                    <td><b>".$info[14]."</b></td>
                    <td><b>".$info[15]."</b></td>
                    <td><b>".$info[16]."</b></td>
                    <td><b>".$info[17]."</b></td>
                    <td><b>".$info[18]."</b></td>
                    </tr>"; 
                    ?>  
                </table>

            </div>
        </div>
    </div>
  </div>

<script>
function prints(){
  window.print();

}
</script>


</body>
</html>






