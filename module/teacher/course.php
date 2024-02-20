<?php
include_once('main.php');

?>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-1.12.3.js"></script>
	<script type="text/javascript" src="studentClassCourse.js"></script>
	<script src = "JS/login_logout.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.box{
   margin :60px auto ;
  width : 400px;
  align-items :center;
  background-color:white;
  padding: 40px 40px 36px;
  border-radius:5px ;
  box-shadow:  0 0 1px ;
}
</style>
			  
</head>
    <body  onload="ajaxRequestToGetMyCourse();">  		 
	 <?php include('index.php'); ?>
	<form action="grade.php" method="POST">
	<div class="box">
	 <div align="center" >
	 Select Class:<select id="myclass" name="myclass" onchange="ajaxRequestToGetMyCourse();">
 <?php  

$check = $_REQUEST['teacherid'];
$classget = "SELECT  * FROM class where id in(select DISTINCT classid from course where teacherid='$check')";
$res= mysqli_query($link,$classget);

while($cln=mysqli_fetch_array($res))
{
 echo '<option value="',$cln['id'],'" >',$cln['name'],'</option>';
   
}
?>
</select><br /><br />
Select Course<select id="mycourse" onchange="ajaxRequestToGetCourseStudent();" name="mycourse">

</select> <br />
<br/>

Select Student<select id="mystudent" onchange="" name="mystudent">

</select><br /><br /><br /><br />
<input  type ="submit" value="Grade" name="submit"/>
<input type ="submit" value="Update Grade" name="update"/>
</form>
</div>
</div>											
</body>
</html>
