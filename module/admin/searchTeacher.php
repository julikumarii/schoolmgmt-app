<?php
include_once('main.php');
include_once('mysqlcon.php');
$searchKey = $_GET['key'];

$string = "";
$sql = "SELECT * FROM teachers WHERE id like '$searchKey%' OR name like '$searchKey%';";
$res = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].
    '</td><td>'.$row['address'].'</td><td>'.$row['gender'].'</td><td>'.$row['dob'].
    '</td><td>'.$row['hiredate'];
}
echo $string;
?>
