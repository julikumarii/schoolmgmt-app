<?php
include_once('main.php');
?>
<html>
    <head>
			<link rel="stylesheet" type="text/css" href="style.css">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<script src = "JS/login_logout.js"></script>
		</head>
    <body>
	<img src="logo.jpg" height="180" width="100%"   alt="School Management System"/>
		  <div class="header"><h1>SMS</h1></div>
			<div class="divtopcorner">	 
			</div>
		
			<center>
				<ul>
				    <li class="manulist">
						    <a class ="menulista" href="index.php">Home</a>
								<a class ="menulista" href="manageStudent.php">Manage Student</a>
								<a class ="menulista" href="manageTeacher.php">Manage Teacher</a>				
								<a class ="menulista" href="course.php">Course</a>
								<a class ="menulista" href="attendance.php">Attendance</a>
								<a class ="menulista" href="examSchedule.php">Exam Schedule</a>							
								<a class ="menulista" href="report.php">Report</a>	
								<a class ="menulista" href="logout.php">Logout</a>						    													
						</li>
				</ul>
            </center>
			<div align="center">
					<h4>WELCOME<?php echo $check." ";?></h4>								  
					</div>
		</body>
</html>
