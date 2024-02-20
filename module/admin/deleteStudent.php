<?php
include_once('main.php');
include_once('mysqlcon.php');
$sql = "SELECT * FROM students;";
$res= mysqli_query($link,$sql);
$string = "";

while($row = mysqli_fetch_array($res)){
    $picname = $row['id'];
    $string .= "<form action='deleteStudentTableData.php' method='post'>".
    "<tr><td><input type='submit' name='submit' value='Delete'></td>".
    '<input type="hidden" value="'.$row['id'].'" name="id" />'.
    '<td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].
    '</td><td>'.$row['gender'].'</td><td>'.$row['dob'].
    '</td><td>'.$row['addmissiondate'].'</td><td>'.$row['address'].
    '</td><td>'.$row['classid'];
   
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
								<a class ="menulista" href="index.php">Manage Teacher</a>
								<a class ="menulista" href="index.php">Course</a>
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
            <h2>Delete Student</h2><hr/>
              <table border="1">
                <tr>
                    <th>Select For Delete</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Addmission Date</th>
                    <th>Address</th>              
                    <th>Class Id</th>                  
                </tr>
                <?php echo $string;?>
              </table>
        </center>
		</body>
</html>
