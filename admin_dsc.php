<?php
// session_start();

$error_message="";
$diocese_name="";
require 'connect.php';


$dio=mysqli_query($db,"SELECT * FROM diocese ORDER BY diocese_name");
$scool=mysqli_query($db,"SELECT school.school_id,school.school_name,diocese.diocese_name 
       FROM school
       JOIN diocese
       ON school.diocese_id=diocese.diocese_id");

$count_query=mysqli_query($db,"SELECT COUNT(diocese_id) FROM diocese");
$dio_count=mysqli_fetch_row($count_query);


if(isset($_POST['diocese_submit']))
  {
    $diocese_name= $_POST['dioname'];
    $query_dio="SELECT * FROM diocese WHERE diocese_name='$diocese_name'";
    $res_dio=mysqli_query($db,$query_dio);
    
    if (mysqli_num_rows($res_dio) > 0 ) {

      $error_message = "Sorry... Diocese name already listed";  
    }

    else{

      $query_add="INSERT INTO diocese (diocese_name) VALUES ('$diocese_name')";
      $result_add=mysqli_query($db,$query_add);
      echo "<script>
      alert('Successfully Added.');
      window.location.href='admin_diocese_list.php';
      </script>";
    }

  }
  ?>