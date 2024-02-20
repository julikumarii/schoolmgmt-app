<?php
include_once('main.php');

?>
<html>
<head>
		    <link rel="stylesheet" type="text/css" href="style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="Attendance.js"></script>
			<script src = "JS/login_logout.js"></script>
<style>
.box{
  margin :60px auto ;
  width : 400px;
  align-items :center;
  background-color: #fff;
  padding: 40px 40px 36px;
  border-radius:5px ;
  box-shadow:  0 0 5px ;
  }	
</style>
</head>
    <body  onload="ajaxRequestToGetAttendanceTeacherPresentThisMonth();">
	<img src="logo.jpg" height="180" width="100%" alt="School Management System"/>    		 
			 <div class="header"><h1>SMS</h1></div>
			  <div class="divtopcorner">	 
				</div>
	<center>
			<ul>
				 <li class="manulist" >
					<a class ="menulista" href="index.php">Home</a>
					<a class ="menulista" href="attendance.php">Go Attendance</a>	
					<a class ="menulista" href="logout.php"> Logout</a>				
				</li>
			</ul>
</center>
<div align="center">
	<h4>WELCOME <?php echo $check." ";?> </h4>						
</div>
<div class="box">
	 <div align="center" style="background-color:#2196F3;">
			  
	Select your Teacher:<select id="teaid" name="teaid" onchange="ajaxRequestToGetAttendanceTeacherPresentThisMonth();" style="background-color:white;"><?php  


$classget = "SELECT  * FROM teachers ";
$res= mysqli_query($lik,$classget);

while($cln=mysqli_fetch_array($res))
{
	
 echo '<option value="',$cln['id'],'" >',$cln['name'],'</option>';
   
}

?>
</select>


Select Attendance Teacher present: Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendanceTeacherPresentThisMonth();"   value="thismonth" id="teapresent" name="teapresent" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendanceTeacherPresentAll();" value="all" id="teapresent" name="teapresent"/>
</div>	
<div align="center" >
<table id="myteapresent" border="1"></table>
</div>
<div align="center" style="background-color:gray;">	
Select Attendance  Teacher absent : Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendanceTeacherAbsentThisMonth();"   value="thismonth" id="teaabsent" name="teaabsent" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendanceTeacherAbsentAll();" value="all" id="teaabsent" name="teaabsent"/>
</div>	
<div align="center" >
<table id="myteaabsent" border="1">

</table>
</div>
</table>
</div>	
<div>					
</body>
</html>

