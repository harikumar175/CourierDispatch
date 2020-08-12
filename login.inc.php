<?php
session_start();
if(isset($_POST['submit']))
{
  include'dbh.inc.php';
  $uid=mysqli_real_escape_string($conn,$_POST['username']);
  $pwd=mysqli_real_escape_string($conn,$_POST['password']);
  if(empty($uid)||empty($pwd))
  {
    header("location:adminsignin.php?login=empty");
    exit();
  }
  else
  {
    $sql="SELECT*FROM admin WHERE username='$uid'";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck<1)
    {
      header("location:adminsignin.php?login=error");
      exit();
    }
    else {
      if($row=mysqli_fetch_assoc($result))
      {
        $passwordCheck=strcmp($pwd,$row['pwd']);

        if($passwordCheck==0)
        {
          $SESSION['username']=$row['username'];
          header("location:adminmainpage.php");
          exit();
        }
        else
        {
          header("location:adminsignin.php?login=error");
          exit();
        }
      }
    }
  }
}
 ?>
