<?php
include_once('main.php');
include_once('mysqlcon.php');
if($_POST['submit']){
    $id = $_POST['id'];
    $cdate = date("Y-m-d");
    $sql = "INSERT INTO attendance VALUES('','$cdate','$id')";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Attendance Error: '.mysqli_connect_error());
    }
    echo "Attendance Complete\n";
    header("Location:../admin/teacherAttendance.php");
}
?>
