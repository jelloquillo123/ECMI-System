 <?php
  session_start();
  require 'connect.php';
  require 'school_maindb.php';
?>


<script>
function prints(){
  window.print();

}

</script>

<!DOCTYPE html>
<html>
<head>
</head>
<body onload="prints()";>



 <div class="row">
          <div class="col-md-offset-2 col-md-8">
            <div class="well">
             
              <h3 align="center">SUMMARY REPORT</h3>
              <p align="left" style="font-size:18px;">



                <?php

                $resm=($totm1[0]/$cu1[0])*100;
                $resf=($totf1[0]/$cu1[0]) *100;

                $g1_c_galit=$s1[0];
                $g1_c_masaya=$s2[0];
                $g1_c_malungkot=$s3[0];
                $g1_c_walangn=$s4[0];

                $g2_c_walang_trabaho=$s24[0];
                $g2_c_maliit_kita=$s25[0];
                $g2_c_penitisyon=$s26[0];


                $g3_c_asia=$cnr1[0];
                $g3_c_eur=$eur1[0];
                $g3_c_nar=$nar1[0];
                $g3_c_ocr=$ocr1[0];
                $g3_c_otr=$otr1[0];


                $g4_c_ytr=$ytr1[0];
                $g4_c_yrr=$yrr1[0];
                $g4_c_yer=$yer1[0];
                $g4_c_yqr=$yqr1[0];
                $g4_c_ywr=$ywr1[0];


                $g5_c_video_chat=$s16[0];
                $g5_c_sulat=$s17[0];
                $g5_c_telepono=$s18[0];
                $g5_c_cellphone=$s19[0];

                $g6_c_maganda=$s21[0];
                $g6_c_dimaganda=$s22[0];
                $g6_c_padala=$s23[0];
                $g6_c_umuwi=$s24[0];

                $g7_c_oo=$s30[0];
                $g7_c_hindi=$s31[0];
                $g7_c_di_tiyak=$s32[0];

                $g8_c_galit=$s6[0];
                $g8_c_masaya=$s7[0];
                $g8_c_malungkot=$s8[0];
                $g8_c_walangn=$s9[0];

                $g9_c_oo=$s33[0];
                $g9_c_hindi=$s34[0];
                $g9_c_di_tiyak=$s35[0];


                $g_1_sort= array($s1[0],$s2[0],$s3[0],$s4[0]);
                sort($g_1_sort,  SORT_NUMERIC);

                $g_2_sort= array($s24[0],$s25[0],$s26[0]);
                sort($g_2_sort,  SORT_NUMERIC);

                $g_3_sort= array($cnr1[0],$eur1[0],$nar1[0],$ocr1[0],$otr1[0]);
                sort($g_3_sort,  SORT_NUMERIC);

                $g_4_sort= array($ytr1[0],$yrr1[0],$yer1[0],$yqr1[0],$ywr1[0]);
                sort($g_4_sort,  SORT_NUMERIC); 

                $g_5_sort= array($s16[0],$s17[0],$s18[0],$s19[0]);
                sort($g_5_sort,  SORT_NUMERIC); 

                $g_6_sort= array($s21[0],$s22[0],$s23[0],$s24[0]);
                sort($g_6_sort,  SORT_NUMERIC); 

                $g_7_sort= array($s30[0],$s31[0],$s32[0]);
                sort($g_7_sort,  SORT_NUMERIC); 

                $g_8_sort= array($s6[0],$s7[0],$s8[0],$s9[0]);
                sort($g_8_sort,  SORT_NUMERIC);

                $g_9_sort= array($s33[0],$s34[0],$s35[0]);
                sort($g_9_sort,  SORT_NUMERIC); 




                echo "Most of the respondents are ";
                if ($resm > $resf)
                {


                 echo "MALE students. Many answered that they ";


               }

               else{ 

                 echo "FEMALE students. Many answered that they ";

               }


               if($g_1_sort[3] == $g1_c_galit )
               {

                echo "are mad when their parents' ";

              } 

              else if($g_1_sort[3] == $g1_c_masaya )
              {

                echo "are happy when their parents' ";

              }

              else if($g_1_sort[3] == $g1_c_malungkot )
              {

                echo "are sad when their parents' ";

              }

              else if($g_1_sort[3] == $g1_c_walangn )
              {

                echo "they dont feel anything when their parents' ";

              }



              if($g_2_sort[2] ==$g2_c_walang_trabaho)
              {

                echo "dont have a job offer here in the philippines and decided to leave and work to a country that belongs to the continent of ";


              }

              else if($g_2_sort[2] ==$g2_c_maliit_kita)
              {

                echo "do not earned much here in the philippines and decided to leave and work to a country that belongs to the continent of ";


              }

              else if($g_2_sort[2] ==$g2_c_penitisyon)
              {

                echo "relatives petitioned for them and decided to leave and work to a country that belongs to the continent of ";


              }


              if($g_3_sort[4] ==$g3_c_asia)
              {



                echo "Asia for ";

              }

              else if($g_3_sort[4] ==$g3_c_eur)
              {



                echo "Europe for ";

              }


              else if($g_3_sort[4] ==$g3_c_nar)
              {



                echo "North America for ";

              }

              else if($g_3_sort[4] ==$g3_c_ocr)
              {



                echo "Oceania for ";

              }


              else if($g_3_sort[4] ==$g3_c_otr)
              {



                echo "Antartica for ";

              }


              if($g_4_sort[4] == $g4_c_ytr)
              {


               echo "one to three years. ";

             }
             else if($g_4_sort[4] == $g4_c_yrr)
             {


               echo "four to six years. ";

             }
             else if($g_4_sort[4] == $g4_c_yer)
             {


               echo "seven to ten years. ";

             }
             else if($g_4_sort[4] == $g4_c_yqr)
             {


               echo "eleven to fifteen years. ";

             }

             else if($g_4_sort[4] == $g4_c_ywr)
             {


               echo "sixteen years and above. ";

             }





             if ($g_5_sort[3]==$g5_c_video_chat)
             {


              echo "The top means of their communication is through video chatting, ";


            }

            else if ($g_5_sort[3]==$g5_c_sulat)
            {


              echo "The top means of their communication is through snail mail, ";


            }

            else if ($g_5_sort[3]==$g5_c_telepono)
            {


              echo "The top means of their communication is through a telephone call, ";


            }


            else if ($g_5_sort[3]==$g5_c_cellphone)
            {


              echo "The top means of their communication is through mobile phone call, ";


            }


            if ($g_6_sort[3] == $g6_c_maganda)
            {


              echo"most of them tell their parents good news about their family status and studies.";


            }


            else if ($g_6_sort[3] == $g6_c_dimaganda)
            {


              echo"most of them tell their parents a not so good news about their family status and studies.";


            }


            else if ($g_6_sort[3] == $g6_c_padala)
            {


              echo"most of them tell their parents that they need additional financial support.";


            }

            else if ($g_6_sort[3] == $g6_c_umuwi)
            {


              echo"most of them tell their parents that they want him/her to go back here in the Philippines.";


            }


            if($g_7_sort[2] == $g7_c_oo)
            {


              echo " They are aware of the status of their parents abroad and when they will go back.";

            }
            if($g_7_sort[2] == $g7_c_hindi)
            {


              echo " They are not aware of the status of their parents abroad and when they will go back. ";

            }
            if($g_7_sort[2] == $g7_c_di_tiyak)
            {


              echo " They are unsure of the status of their parents abroad and when they will go back. ";

            }


            if ($g_8_sort[3] == $g8_c_galit )
            {


              echo "Based on the results, the respondents are angry when their parent/s get back home.";

            }

            if ($g_8_sort[3] == $g8_c_masaya )
            {


              echo "Based on the results, the respondents are happy when their parent/s get back home.";

            }

            if ($g_8_sort[3] == $g8_c_malungkot )
            {


              echo "Based on the results, the respondents are sad when their parent/s get back home.";

            }

            if ($g_8_sort[3] == $g8_c_walangn )
            {


              echo "Based on the results, the respondents felt neutral when their parent/s get back home.";

            }


            if($g_9_sort[2] == $g9_c_oo)
            {


              echo " And lastly if they were given a chance to work abroad they will accept it.";
            }

            if($g_9_sort[2] == $g9_c_hindi)
            {


              echo " And lastly if they were given a chance to work abroad they will not accept it.";
            }

            if($g_9_sort[2] == $g9_c_di_tiyak)
            {


              echo " And lastly if they were given a chance to work abroad they were unsure about it.";
            }


            ?>



          </div>
        </div>
      </div>


</body>
</html>