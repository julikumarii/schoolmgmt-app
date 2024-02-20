<?php
include_once('main.php');
?>
<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <link rel="stylesheet" type="text/css" href="style.css">
				<script src = "JS/login_logout.js"></script>
		</head>
    <body>
	<img src="logo.jpg" height="180" width="100%" alt="School Management System"/>   	
		<div class="header"><h1>SMS</h1></div>
		<div class="divtopcorner">
		</div>
		
			<center>
				<ul>
				    <li class="manulist">
						         <a class ="menulista" href="index.php">Home</a>
								<a class ="menulista" href="updateTeacher.php">Update Profile</a>
								<a class ="menulista" href="viewProfile.php">View Profile</a>
								<a class ="menulista" href="course.php">Students Grade</a>
								<a class ="menulista" href="courses.php">Courses</a>
								<a class ="menulista" href="attendance.php">Attendance</a>
								<a class ="menulista" href="exam.php">Exam Schedule</a>
								<a class ="menulista" href="report.php">Report</a>
								<a class ="menulista" href="searchStudent.php">Search Portal</a>
								<a class ="menulista" href="logout.php">Logout</a>					   								
						</li>
				</ul>
     </center>  
	 <br>
	 <div align="center">
		<h4>WELCOME <?php echo $check." ";?></h4> 
		</div>
		</body>
</html>
