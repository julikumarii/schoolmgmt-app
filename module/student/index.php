<?php
include_once('main.php');
$st=mysqli_query($link,"SELECT *  FROM students WHERE id='$check' ");
$stinfo=mysqli_fetch_array($st);

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
				    <li class="manulist" >
						    <a class ="menulista" href="index.php">Home</a>
						        <a class ="menulista" href="modify.php">Change Password</a>
								<a class ="menulista" href="course.php">My Course And Result</a>
								<a class ="menulista" href="exam.php">My Exam Schedule</a>
								<a class ="menulista" href="attendance.php">My Attendance</a>
								<a class ="menulista" href="logout.php">Logout"</a>				        
					</li>
				</ul>
               </center>
				<br></br>
				<div align="center">
				<h4>WELCOME! <?php echo $check." ";?> </h4>
				</div>
			  <div align="center">
			  <h1>My Information</h1>
			  <table border="1">
			  <tr>
			  <th>Student ID</th>
			  <th>Student Name</th>
			  <th>Student Phone</th>
			  <th>Student Email</th>
			  <th>Student Gender</th>
			  <th>Student DOB</th>
			  <th>Student Admission Date</th>
			  <th>Student Address</th>
			  <th>Student class ID</th>			
			  </tr>

			  <tr>
			  <td><?php echo $stinfo['id'];?></td>
			  <td><?php echo $stinfo['name'];?></td>
			  <td><?php echo $stinfo['phone'];?></td>
			  <td><?php echo $stinfo['email'];?></td>
			  <td><?php echo $stinfo['gender'];?></td>
			  <td><?php echo $stinfo['dob'];?></td>
			  <td><?php echo $stinfo['addmissiondate'];?></td>
			  <td><?php echo $stinfo['address'];?></td>
			  <td><?php echo $stinfo['classid'];?></td>			
			</tr>
			  
			  
			  <table
			</div>
		</body>
</html>

