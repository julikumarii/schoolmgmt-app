<?php

include_once('main.php');
include_once('index.php');

if(!empty($_POST['submit'])){
$stid=$_REQUEST['mystudent'];
$crsid=$_REQUEST['mycourse'];
$rprt=$_REQUEST['report'];
$check=$_REQUEST['teacherid'];
$sql="insert into report (studentid,teacherid,message,courseid) values ('$stid','$check','$rprt','$crsid')";

$s=mysqli_query($link,$sql);
if(!$s)
{
echo "problem ";
}
echo "report  posted";
}


?>
