<?php
include_once('main.php');
include_once('mysqlcon.php');
if($_POST['submit']){
    $id = $_POST['id'];
    $sql = "DELETE FROM students WHERE id = '$id';";
    $success = mysqli_query($link, $sql);
    $sql = "DELETE FROM users WHERE userid = '$id';";
    $success = mysqli_query($link, $sql);
    if(!$success) {
        die('Could not Delete data: '.mysqli_connect_error());
    }
    unlink('../images/'.$id.'.jpg');
    echo "Delete data successfully\n";
    header("Location:../admin/deleteStudent.php");
}
?>
