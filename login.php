<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require 'connect.php';


if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql_account="SELECT * FROM account WHERE username = '$username'";
  $res_account=mysqli_query($db, $sql_account);

  $account_fetch=mysqli_fetch_row($res_account);
  
  $hash=$account_fetch[1];

  
    if (password_verify($password,$hash)){


      $_SESSION['username'] = $_POST['username'];

            if ($account_fetch[2]==1){
              $_SESSION['access']= "admin_level";
              echo "<script>
              alert('You are now logged in.');
              window.location.href='admin_schools_list.php';
              </script>";
            }

            else if ($account_fetch[2]==2){
              $_SESSION['access']= "school_level";
              echo "<script>
              alert('You are now logged in.');
              window.location.href='school_students.php';
              </script>";
            }

            else if ($account_fetch[2]==3){
              $_SESSION['access']= "stud_level";
              echo "<script>
              alert('You are now logged in.');
              window.location.href='student.php';
              </script>";
            }

            

    }
    else {
              session_destroy();
              echo "<script>
              alert('Wrong username or password.');
              window.location.href='index.php';
              </script>";
            }
 
}


?>