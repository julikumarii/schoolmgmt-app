<?php
include_once('main.php');
include_once('mysqlcon.php');
include_once('index.php');
?>
<html>
<head>
<style>
.box{
   margin :60px auto ;
  width : 400px;
  align-items :center;
  background-color: burlywood;
  padding: 40px 40px 36px;
  border-radius:5px ;
  box-shadow:  0 0 1px ;
}
</style>
</head>
<body>
   <div class= "box">
<div class ="header">
<?php
$sql = "SELECT * FROM teachers WHERE id='$check';";
$res = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res)){
   echo "<center>";
   echo "ID: ".$row['id']."<br />";
   echo "Name: ".$row['name']."<br />";
   echo "Phone: ".$row['phone']."<br />";
   echo "Date of Birth: ".$row['dob']."<br />";
   echo "Phone ".$row['phone']."<br />";
   echo "Email Address: ".$row['email']."<br />";
   echo "Gender: ".$row['gender']."<br />";
   echo "Hire DAte: ".$row['hiredate']."<br />";
   echo "</center>";
   
}
?>
</div>
</div>
</body>
</html>