<?php

require 'connect.php';

require 'admin_reportdb.php';

?>

<script>
function prints(){
  window.print();

}

</script>


<html>
<head></head>
<body onload = "prints();">
<div class="well">
              <h3 align="center">Significant Findings</h3><hr>
              <div class="row">
                <div class="col-md-offset-1 col-md-3">
                  <div id="gendertable"></div>
                </div>
                <div class="col-md-3">
                  <div id="country"></div>
                </div>
                <div class="col-md-3">
                  <div id="yearsofstay"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-offset-1 col-md-3">
                  <div id="parent"></div>
                </div>
                <div class="col-md-3">
                  <div id="parentjob"></div>
                </div>
              </div>

              <h3 align="center">Basic Interpretation</h3><hr>
              <div class="row">
                <div class="col-md-10">
                  <h4>
                    <?php

                    $an=$info[1]/$info[3];
                    $an1=$an*100;

                    $ansa=$info[2]/$info[3];
                    $ansa1=$ansa*100;

                    $ptot=$info[4]+$info[5];
                    $pans=$info[4]/$ptot;
                    $pans1=$pans*100;

                    $pansa=$info[5]/$ptot;
                    $pansa1=$pansa*100;

                    $asia="ASIA".$info[9];
                    $europe="EUROPE".$info[10];
                    $na="NORTH AMERICA".$info[11];
                    $oceania="OCENIA".$info[12];
                    $others="OTHERS".$info[13];
                        /*$cntry = array($info[9],$info[10],$info[11],$info[12],$info[13]);
                        sort($cntry,  SORT_NUMERIC);
                        foreach ($cntry as $key => $val) {
                            echo "cntry[" . $key . "] = " . $val . "\n";
                        }
                        */

                        if($info[1]>$info[2])
                        {
                          echo "1. Male ANAK OFW HAS THE HIGHEST PERCENTAGE enrolled with ";
                          echo number_format((float)$an1, 2, '.', ''); 
                          echo "%";
                        }
                        else
                        {

                          echo "1. Female ANAK OFW HAS THE HIGHEST PERCENTAGE enrolled with ";
                          echo number_format((float)$ansa1, 2, '.', '');
                          echo "%";
                        }
                        ?>
                      </h4>
                    </div>
                  </div>
                  <?php
                  $ptot=$info[4]+$info[5];
                  $pans=$info[4]/$ptot;
                  $pans1=$pans*100;

                  $pansa=$info[5]/$ptot;
                  $pansa1=$pansa*100;

                  $asia=$info[9];
                  $europe=$info[10];
                  $na=$info[11];
                  $oceania=$info[12];
                  $others=$info[13];





                  $cntry = array($info[9],$info[10],$info[11],$info[12],$info[13]);
                  sort($cntry,  SORT_NUMERIC);
// foreach ($cntry as $key => $val) {
//     echo "cntry[" . $key . "] = " . $val . "\n";
// }

                  $ctot=$asia+$europe+$na+$oceania+$others;
                  $ctotal=($cntry[4]/$ctot)*100;
                  $ctotal1=($cntry[3]/$ctot)*100;




                  $ott=$info[14];
                  $fts=$info[15];
                  $stt=$info[16];
                  $etf=$info[17];
                  $saa=$info[17];

                  $range = array($info[14],$info[15],$info[16],$info[17],$info[18]);
                  sort($range,  SORT_NUMERIC);
/*foreach ($range as $key => $val) {
    echo "range[" . $key . "] = " . $val . "\n";
  }*/

  $rtot=$ott+$fts+$stt+$etf+$saa;
  $rtotal=($range[4]/$rtot)*100;
  $rtotal1=($range[3]/$rtot)*100;




  ?>






<!-- <h4 align="center">SUMMARY REPORT</h4>
<p align="center"> 1.
<?php


if($info[1]>$info[2])
{
echo "Male ANAK OFW HAS THE HIGHEST PERCENTAGE enrolled with ";
echo number_format((float)$an1, 2, '.', ''); 
}
else
{

echo "Female ANAK OFW HAS THE HIGHEST PERCENTAGE enrolled with ";
echo number_format((float)$ansa1, 2, '.', '');

}




?> -->

</p>
<div class="row">
  <div class="col-md-offset-2 col-md-6 col-md-offset-4">
    <div class="input-field" align="center">


    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-offset-2 col-md-6 col-md-offset-4">
    <div class="input-field" align="center">



    </div>
  </div>
</div>
<h4>
  <p align="center">
    <div class="row">
      <div class="col-md-10">

        <?php
        if ($cntry[4]==$asia)
        {


          echo "2. ASIA is the top area of destination with ";
          echo number_format((float)$ctotal, 2, '.', '');
          echo "% ";


        }

        else if($cntry[4]==$europe)
        {

          echo "2. EUROPE is the top area of destination with ";
          echo number_format((float)$ctotal, 2, '.', '');
          echo "% ";


        }
        else if($cntry[4]==$na)
        {
         echo "2. NOTRH AMERICA is the top area of destination with ";
         echo number_format((float)$ctotal, 2, '.', '');
         echo "% ";   
       }
       else if($cntry[4]==$oceania)
       {

        echo "2. OCEANIA is the top area of destination with ";
        echo number_format((float)$ctotal, 2, '.', '');
        echo "% ";


      }

      else if($cntry[4]==$others)
      {

        echo "2. OTHERS(not on the main continents) is the top area of destination with ";
        echo number_format((float)$ctotal, 2, '.', '');
        echo "% ";


      }



      if ($cntry[3]==$asia)
      {


        echo "followed by ASIA with ";
        echo number_format((float)$ctotal1, 2, '.', '');
        echo "%.";


      }

      else if($cntry[3]==$europe)
      {

        echo "followed by EUROPE with ";
        echo number_format((float)$ctotal1, 2, '.', '');
        echo "%.";

      }


      else if($cntry[3]==$na)
      {
       echo "followed by NORTH AMERICA with ";
       echo number_format((float)$ctotal1, 2, '.', '');
       echo "%.";


     }

     else if($cntry[3]==$oceania)
     {

      echo "followed by OCEANIA with ";
      echo number_format((float)$ctotal1, 2, '.', ''); 
      echo "%.";
    }

    else if($cntry[3]==$others)
    {

      echo "followed by OTHERS with ";
      echo number_format((float)$ctotal1, 2, '.', '');
      echo "%.";


    }


    ?>



  </p>
  <div class="row">
    <div class="col-md-offset-2 col-md-6 col-md-offset-4">
      <div class="input-field" align="center">
      </div>
    </div>
  </div>
  <br />
  <?php
  if ($range[4]==$ott)
  {
    if($info[4]>$info[5])
    {  
      echo "3. Mother WORKING ABROAD IS THE HIGHEST with ";
      echo number_format((float)$pans1, 2, '.', '');
      echo "% than Father with ";
      echo number_format((float)$pansa1, 2, '.', '');
      echo "%";
    }
    else
    {

     echo "3. Father WORKING ABROAD IS THE HIGHEST with ";
     echo number_format((float)$pansa1, 2, '.', '');
     echo "% than Mother with ";
     echo number_format((float)$pans1, 2, '.', '');
     echo "%";


   }
   ?>
   <p align="center">
    <div class="row">
      <div class="col-md-10">
       <br/>
       <?php
       echo "4. ONE to THREE is the top years of stay of the parent abroad with ";
       echo number_format((float)$rtotal, 2, '.', '');
       echo "% ";


     }

     else if($range[4]==$fts)
     {

      echo "4. FOUR to SIX is the top years of stay of the parent abroad with ";
      echo number_format((float)$rtotal, 2, '.', '');
      echo "% ";


    }
    else if($range[4]==$stt)
    {
     echo "4. SEVEN to TEN is the top years of stay of the parent abroad with ";
     echo number_format((float)$rtotal, 2, '.', '');
     echo "% ";   
   }
   else if($range[4]==$etf)
   {

    echo "4. ELEVEN to FIFTEEN is the top years of stay of the parent abroad with ";
    echo number_format((float)$rtotal, 2, '.', '');
    echo "% ";


  }

  else if($range[4]==$saa)
  {

    echo "4. SIXTEEN and ABOVE is the top years of stay of the parent abroad with ";
    echo number_format((float)$rtotal, 2, '.', '');
    echo "% ";


  }

  ?>




</p>
</h4>
</div>
</body>
</html>