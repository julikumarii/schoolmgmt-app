<?php
include_once('main.php');

?>
<html>
<head>
		    <link rel="stylesheet" type="text/css" href="style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
			
<style>
.box{
  margin :60px auto ;
  width : 300px;
  align-items :center;
  background-color: #fff;
  padding: 40px 40px 36px;
  border-radius:5px ;
  box-shadow:  0 0 10px ;
}	
</style>
	            
</head>
    <body  onload="ajaxRequestToGetMyCourse();">
             		 
<?php include('index.php'); ?>
<div class ="box">
 <div align="center" style="background-color:#2196F3;">
	 Select Class:<select id="myclass" style="background-color: cyan;" name="myclass" onchange="ajaxRequestToGetMyCourse();">
	 <?php  

$check=$_REQUEST['teacherid'];
$classget = "SELECT  * FROM class where id in(select DISTINCT classid from course where teacherid='$check')";
$res= mysqli_query($link,$classget);

while($cln=mysqli_fetch_array($res))
{
 echo '<option value="',$cln['id'],'" >',$cln['name'],'</option>';
   
}


?>

</select>
<div style="background-color: black; color: white;">
<label id="mycourse" onload="ajaxRequestToGetMyC();" name="mycourse">
</div>
</div>
</div>											
</body>
</html>

