<?php
include_once('main.php');
include_once('mysqlcon.php');
$sql = "SELECT * FROM course;";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['teacherid'].'</td><td>'.$row['studentid'].
    '</td><td>'.$row['classid'].'</td></tr>';
}
?>
<html>
<head>
		    <link rel="stylesheet" type="text/css" href="style.css">
			<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchCourse.js"></script>
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
								<a class ="menulista" href="index.php">Attendance</a>
								<a class ="menulista" href="index.php">Exam Schedule</a>							
								<a class ="menulista" href="index.php">Report</a>	
                                <a class ="menulista" href="logout.php"> Logout</a>				
					</li>
				</ul>
</center>					
<div align="center">
		<h4>WELCOME <?php echo $check." ";?></h4>						
</div>
        <center>
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getCourse(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center><h2>Course List</h2></center>
        <center>
            <table border="1" id='courseList'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Teacher ID</th>
                    <th>Student ID Name</th>
                    <th>Class ID</th>
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
