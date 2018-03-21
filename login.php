<?php
session_start();
require 'connect.php';

$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
if(isset($_POST['submit'])){

    $username = ($_SESSION['username']);
    $password = ($_SESSION['password']);
    $account = mysqli_query($db,"SELECT user_id FROM account WHERE BINARY username = '$username' AND BINARY pword = '$password'");
    $userid = mysqli_fetch_row($account);
    if ($userid[0]==1){
        echo "<script>
        alert('You are now logged in.');
        window.location.href='admin_main.php';
        </script>";
    }
    else if ($userid[0]==2){
      echo "<script>
      alert('You are now logged in.');
      window.location.href='school_main.php';
      </script>";
  }
  else if ($userid[0]==3){
      echo "<script>
      alert('You are now logged in.');
      window.location.href='student.php';
      </script>";
  }
  else{
    session_destroy();
    echo "<script>
    alert('Wrong username or password.');
    window.location.href='index.php';
    </script>";
}
}

?>