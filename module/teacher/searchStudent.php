<?php
include_once('main.php');
include_once('index.php');
include_once('mysqlcon.php');
?>
<html>
<div align="center">
<form action="#" method="GET">

key: <input type="text"  name='key' placeholder="st-XXX-X"/>
<input type="submit"  name='submit' value="submit"/>
</form>
</div>
</html>
<table border="1" align="center">
<?php
if(!empty($_GET['submit'])){
$searchKey = $_GET['key'];

$string = "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Gender</th>
    <th>DOB</th>
    <th>Addmission Date</th>
    <th>Address</th>
    <th>Class Id</th>
   

</tr>";
$sql = "SELECT * FROM students WHERE id like '$searchKey%' OR name like '$searchKey%' OR classid = '$searchKey';";
$res = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res)){
    $picname = $row['id'];
	echo "<div align='center'>";
	
    echo '<tr><td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].
    '</td><td>'.$row['gender'].'</td><td>'.$row['dob'].
    '</td><td>'.$row['addmissiondate'].'</td><td>'.$row['address'];
	
	echo "</div>";
	
  // echo $string;
}

echo "</table>";
}
?>

