<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'school_authentication.php';
require 'connect.php';
require 'school_reportsdb.php';
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
    <div class="row">
      <div class="col-lg-12">
        <h2>Baseline Data Summary Results</h2>
        <h4><?php echo $scn[0]; ?></h4>
        <h4>Diocese of <?php echo $scn[1]; ?></h4>

          <div class="table-responsive" style="padding-top: 15px;">
            <table class="table table-hover table-bordered" style="background-color:#fff; text-align: center;">
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
              <tr>
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
                <td>GRADE 10</td>
                <td><?php echo $jr10[0];  ?></td>
                <td><?php echo $gen10[0];  ?></td>
                <td><?php echo $gen20[0];  ?></td>
                <td><?php echo $pp10[0]; ?></td>
                <td><?php echo $ps10[0]; ?></td>
                <td><?php echo $pn10[0]; ?></td>
                <td><?php echo $lb10[0]; ?></td>
                <td><?php echo $sb10[0]; ?></td>
                <td><?php echo $cn10[0]; ?></td>
                <td><?php echo $eu10[0]; ?></td>
                <td><?php echo $na10[0]; ?></td>
                <td><?php echo $oc10[0]; ?></td>
                <td><?php echo $ot10[0]; ?></td>
                <td><?php echo $yt10[0]; ?></td>
                <td><?php echo $yr10[0]; ?></td>
                <td><?php echo $ye10[0]; ?></td>
                <td><?php echo $yq10[0]; ?></td>
                <td><?php echo $yw10[0]; ?></td>
              </tr>

              <tr style="font-weight: bold;">
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
              </tr>
            </table>
            <h5><b>Total of Students taken PAT: <?php echo $taken_total[0]; ?></b></h5>
            <h5><b>Total of Students not yet taken PAT: <?php echo $nt_total[0]; ?></b></h5>             
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






