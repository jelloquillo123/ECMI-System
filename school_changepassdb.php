<?php
$sch=mysqli_query($db,"SELECT school.school_name,diocese.diocese_name,school.school_id,account.account_id
FROM school
INNER JOIN diocese
ON school.diocese_id=diocese.diocese_id
INNER JOIN coordinator
ON school.school_id=coordinator.school_id
INNER JOIN account
ON coordinator.account_id=account.account_id
WHERE account.username='$username'");
$scn=mysqli_fetch_row($sch);
$pass_query=mysqli_query($db,"SELECT account.pword FROM account WHERE account.account_id='$scn[3]'");
$pass_verify=mysqli_fetch_row($pass_query);
$passcheck=$pass_verify[0];
$id=$_GET['id'];
$error_message="";
$error_message_same="";



if(isset($_POST['submit']))
{

  $opword=$_POST['opword'];
  $npword=$_POST['npword'];
  $cpword=$_POST['cpword'];

  if (password_verify($opword,$passcheck)){
    if($npword==$cpword){
      $hash_pass=password_hash($npword, PASSWORD_DEFAULT);
       mysqli_query($db,"UPDATE account 
      SET pword='$hash_pass'
      WHERE account_id='$id'");
          echo "<script>
          alert('Successfully Changed Password.');
          window.location.href='school_students.php';
          </script>";
    }
    else{
      $error_message_same="New password doesn't match!";
    }
  }

  else{

    $error_message="Old password doesn't match!";
  }
}
?>