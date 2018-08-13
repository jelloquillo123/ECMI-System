<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
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
        <h2>Pre-Awareness Test Summary Results</h2>
        <h4><?php echo $scn[0]; ?></h4>
        <h4>Diocese of <?php echo $scn[1]; ?></h4>

			  <div class="table-responsive">
			    <table class="table table-hover table-bordered" style="background-color:#fff;">
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
			        <td><?php echo $j_35[0]; ?></td>  
			        </tr>
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
			        <tr style="font-weight: bold;">
			          <th>Grand Total:</th>
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
    </div>
  </div>

<script>
function prints(){
  window.print();

}
</script>


</body>
</html>
