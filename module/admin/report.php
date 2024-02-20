<?php
include_once('main.php');
include_once('mysqlcon.php');
$string = "<tr>
    <th>Teacher</th>
    <th>Course Id</th>
    <th>Class</th>
    <th>#OF Students</th>
    </tr>";
$sql = "select t.name as teacher,ac.name as course,ac.classid as class,count(g.id) as no_of_std from teachers t,takencoursebyteacher tc,availablecourse ac,grade g where t.id=tc.teacherid and ac.id=tc.courseid and tc.courseid=g.courseid and g.grade not in('A+','A','A-','B+','B','B-')group by ac.id";
$res = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res)){
    $string .= "<tr><td>".$row['teacher']."</td><td>".$row['course']."</td><td>".$row['class'].
    "</td><td>".$row['no_of_std']."</td></tr>";
}
?>
<html>
 <head>
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
								<a class ="menulista" href="manageStudent.php">Manage Student</a>
								<a class ="menulista" href="manageTeacher.php">Manage Teacher</a>								
								<a class ="menulista" href="course.php">Course</a>
								<a class ="menulista" href="attendance.php">Attendance</a>
								<a class ="menulista" href="examSchedule.php">Exam Schedule</a>							
								<a class ="menulista" href="report.php">Report</a>															
								 <a class ="menulista" href="logout.php">Logou></a>						    								
						</li>
				</ul>
</center>
<div align="center">
	<h4>WELCOME<?php echo $check." ";?></h4></div>
        <center>
            <h1>Teacher Evaluation</h1>
            <table border="1">
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
