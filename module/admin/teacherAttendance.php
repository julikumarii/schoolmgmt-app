<?php
include_once('main.php');
include_once('mysqlcon.php');
$sql = "SELECT * FROM teachers where id not in (select attendedid from attendance where date=CURDATE())";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $string .= "<form action='attendTeacher.php' method='post'>".
    "<tr><td><input type='submit' name='submit' value='Present'></td>".
    '<input type="hidden" value="'.$row['id'].'" name="id" />'.
    '<td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].'</td></tr></form>';
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
            <h2>Teacher Attandance List</h2><hr/>
              <table border="1">
                <tr>
                    <th>Click For Attendance</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                </tr>
                <?php echo $string;?>
              </table>
        </center>
		</body>
</html>
