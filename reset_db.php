<?php
include 'connection.php';

$sql="delete from applications";

$result=mysqli_query($conn,$sql);

$sql="delete from personaldetails";

$result=mysqli_query($conn,$sql);

$sql="delete from ssc_details";

$result=mysqli_query($conn,$sql);

$sql="delete from hsc_details";

$result=mysqli_query($conn,$sql);

$sql="delete from ug_details";

$result=mysqli_query($conn,$sql);

?>