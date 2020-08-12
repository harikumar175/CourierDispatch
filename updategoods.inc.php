<?php
if(isset($_POST['branch1']))
{
include_once'dbh.inc.php';

$consignmentnumber=$_POST['consignmentnumber'];
$source=$_POST['source'];
$destination=$_POST['destination'];
$branch=$_POST['branch'];
$weight=$_POST['weight'];
$price=$_POST['price'];
$description=$_POST['description'];
$dispatchstatus=$_POST['dispatchstatus'];
$dispatchtime=$_POST['dispatchtime'];
$sql="INSERT INTO branch1(consignment_number,parcel_sender,parcel_destination,branch,weight,price,description,dispatched_status,dispatched_timeline) VALUES('$consignmentnumber','$source','$destination','$branch','$weight','$price','$description','$dispatchstatus','$dispatchtime');";
mysqli_query($conn,$sql);
header("location:updategoods.php?success");
}
?>
