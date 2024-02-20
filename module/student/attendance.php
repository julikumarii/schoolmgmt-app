<?php
include_once('main.php');

?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentAttendance.js"></script>
			<script src = "JS/login_logout.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.box{
  margin :60px auto ;
  width : 500px;
  align-items :center;
  background-color: #fff;
  padding: 48px 40px 36px;
  border-radius:5px ;
  box-shadow:  0 0 10px ;
  }
</style>				
	            
		</head>
    <body  onload="ajaxRequestToGetAttendancePresentThisMonth();">
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
								<a class ="menulista" href="logout.php"> Logout</a>
						     
						</li>
				</ul>
            </center>
	<div class="box">		 
			<div align="center">
			<h4>WELCOME! <?php echo $check." ";?> </h4>	
		    </div>
	      <div align="center" style="background-color:#2196F3;">
	            Select Attendance that you are present: Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendancePresentThisMonth();"   value="thismonth" id="present" name="present" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendancePresentAll();" value="all" id="present" name="present"/>
   </div>	
<hr/>
<div align="center" >
<table id="mypresent" border="1">
</table>
</div>
<hr/>
<div align="center" style="background-color:#2196F3;">	
   Select Attendance that you are absent : Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendanceAbsentThisMonth();"   value="thismonth" id="absent" name="absent" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendanceAbsentAll();" value="all" id="absent" name="absent"/>
</div>	
<hr/>
<div align="center" >
<table id="myabsent" border="1">

</table>
</div>
</div>						
</body>
</html>

