<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
$username = $_SESSION['username'];
$error_message="";
$n1=""; $n2=""; $n3=""; $n4=""; $n5="";
if(isset($_POST['submit']))
{
  $n1 = $_POST['lname'];
  $n2 = $_POST['fname'];
  $n3 = $_POST['mname'];
  $n4 = $_POST['uname'];
  $n5 = $_POST['pword'];
  
  $query_acc="SELECT username FROM account";
  $checkuser=mysqli_query($db,$query_acc);
  $chk=mysqli_fetch_row($checkuser);
      while($n4==$chk[0]){
      echo "<script>
        alert('Username already used!');
        window.location.href='createnew.php';
        </script>";
    }
    $cnt=mysqli_query($db,"SELECT account_id from account");
      

      while($s=mysqli_fetch_assoc($cnt))
      {
        $cunt=$s['account_id'];
      }

      $cunt=$cunt+1;
      $hash_password = password_hash($n5, PASSWORD_DEFAULT);
      mysqli_query($db,"INSERT INTO admin (fname,mname,lname,account_id)
        VALUES('$n2','$n3','$n1','$cunt')");
      mysqli_query($db,"INSERT INTO account (username,pword,user_id)
        VALUES('$n4','$hash_password','1')");
      echo "<script>
      alert('Successfully Added an Account.');
      window.location.href='admin_schools_list.php';
      </script>";
}
?>