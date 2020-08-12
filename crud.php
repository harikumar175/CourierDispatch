<?php

if(isset($_GET['delete']))
{
  include_once'dbh.inc.php';
$id=$_GET['delete'];
$mysqli="DELETE FROM branch1 where si_no=$id";
mysqli_query($conn,$mysqli);
header("location:goodsdetail.php");

}
?>
