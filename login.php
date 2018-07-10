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
              echo "<script>
              alert('You are now logged in.');
              window.location.href='admin_dashboard.php';
              </script>";
            }

            else if ($account_fetch[2]==2){
              echo "<script>
              alert('You are now logged in.');
              window.location.href='school_main.php';
              </script>";
            }

            else if ($account_fetch[2]==3){
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