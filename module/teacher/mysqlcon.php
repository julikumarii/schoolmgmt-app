<?php
session_start();
$host="localhost";
$username="root";
$password="";
$db_name="schoolmsdb";

$link=mysqli_connect($host,$username,$password,$db_name);
//check connection
  if(!$link){
      die(' Database Connection Failed:' .mysqli_connect_error());
    }
   
?>
