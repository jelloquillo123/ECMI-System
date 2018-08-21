<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'admin_authentication.php';
require 'connect.php';
$error_message="";
$error_message_uname="";
$name_school="";
$coor_fname="";
$coor_mname="";
$coor_lname="";
$uname="";
$coor_cnum="";
$coor_email="";

$dio=mysqli_query($db,"SELECT * FROM diocese ORDER BY diocese_name");
$scool=mysqli_query($db,"SELECT school.school_id,school.school_name,diocese.diocese_name,school.contact_num,school.contact_email FROM school JOIN diocese ON school.diocese_id=diocese.diocese_id");

$school_count=mysqli_query($db,"SELECT COUNT(school_id) FROM school");
$scount_fetch=mysqli_fetch_row($school_count);
$scount=$scount_fetch[0];



if(isset($_POST['submit_add']))
  {
    $name_school = $_POST['nschool'];
    $diocese_id = $_POST['diocese'];
    $uname = $_POST['uname'];
    $coor_fname = $_POST['coor_fname'];
    $coor_mname = $_POST['coor_mname'];
    $coor_lname = $_POST['coor_lname'];
    $coor_cnum = $_POST['coor_cnum'];
    $coor_email = $_POST['coor_email'];

    $school_name_query="SELECT * FROM school WHERE school_name = '$name_school' ";
    $school_name_res=mysqli_query($db,$school_name_query);

    $user_name_query="SELECT account.username FROM account JOIN coordinator ON account.account_id=coordinator.account_id JOIN school ON coordinator.school_id=school.school_id WHERE account.username='$uname'";
    $user_name_res=mysqli_query($db,$user_name_query);

    if (mysqli_num_rows($school_name_res) > 0) {

      $error_message = "Sorry... School name already listed";  
    }
    elseif(mysqli_num_rows($user_name_res)>0) {
      $error_message_uname ="Sorry... Username already used";
    }

    else {

      $school=mysqli_query($db,"SELECT school_id FROM school");

      while($r=mysqli_fetch_assoc($school))
      {
        $schid=$r['school_id'];
      }

      $coord=mysqli_query($db,"SELECT account_id FROM account");
      //$coord1=mysqli_fetch_row($coord);

      while($s=mysqli_fetch_assoc($coord))
      {
        $coordid=$s['account_id'];
      }

      $schid=$schid+1;
      $coordid=$coordid+1;
      $default_pass="sdofpecmi_school";
      $hash_password = password_hash($default_pass, PASSWORD_DEFAULT);

       mysqli_query($db, "INSERT INTO school (school_name,diocese_id,contact_num,contact_email) 
         VALUES ('$name_school','$diocese_id','$coor_cnum','$coor_email')");

       $verify_query=mysqli_query($db,"SELECT school_id FROM school WHERE school_name='$name_school'");
       $verify_id=mysqli_fetch_row($verify_query);
       $verified_id=$verify_id[0];

       mysqli_query($db,"INSERT INTO account (username,pword,user_id,account_id) 
         VALUES ('$uname','$hash_password','2','$coordid')");
       mysqli_query($db,"INSERT INTO coordinator (fname,mname,lname,school_id,account_id) 
         VALUES ('$coor_fname','$coor_mname','$coor_lname','$verified_id','$coordid')" );
       header("Location:admin_schools_list.php");

    }

  }
  ?>