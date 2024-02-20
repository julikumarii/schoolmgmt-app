<?php
include_once('main.php');

?>
<html> 
    <head>
	        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <link rel="stylesheet" type="text/css" href="style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>	
 <style>
.box{
  margin :60px auto ;
  width : 400px;
  align-items :center;
  background-color: #fff;
  padding: 40px 40px 36px;
  border-radius:5px ;
  box-shadow:  0 0 10px ;
  }
 </style>      
</head>
 <body  onload="ajaxRequestToGetCourse();">
	   <img src="logo.jpg" height="180" width="100%" alt="School Management System"/>	 
			 <div class="header"><h1>SMS</h1></div>
			  <div class="divtopcorner">  
				</div>
<center>
	<ul>
		<li class="manulist" >
			<a class ="menulista" href="index.php">Home</a>
			 <a class ="menulista" href="modify.php">Change Password</a>
			<a class ="menulista" href="course.php">My Course And Result</a>
				<a class ="menulista" href="exam.php">My Exam Schedule</a>
				<a class ="menulista" href="attendance.php">My Attendance</a>
				<a class ="menulista" href="logout.php" >Logout</a>	
		</li>
	</ul>
</center>
		<div class="box">
				<div align="center">
				 <h4>WELCOME! <?php echo $check." ";?> </h4>	
				 </div>
	
       <div align="center" >
			 Select Class:<select id="myclass" name="myclass" onchange="ajaxRequestToGetCourse();"><?php  


  $classget = "SELECT  name FROM class where id in(select DISTINCT classid from course where studentid='$check')";
  $res= mysqli_query($link,$classget);

while($cln=mysqli_fetch_array($res))
{
 echo '<option value="',$cln['name'],'" >',$cln['name'],'</option>';
   
}


?>
</select>
Select Course<select id="mycourse" onchange="ajaxRequestToGetCourseInfo();" name="mycourse">

</select>
<h4>Course Information:</br><label id="mycourseteacher"></label><br/>
<table id="mycourseinfo">
</table>
</div>	
</div>									
</body>
</html>

