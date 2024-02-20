<?php
include_once('mysqlcon.php');
$check=$_SESSION['login_id'];
$session=mysqli_query($link,"SELECT name  FROM admin WHERE id='$check' ");
$row=mysqli_fetch_array($session);
$login_session = $loged_user_name = $row['name'];
if(!isset($login_session)){
    header("Location:../../");
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
                <a class ="menulista" href="addStudent.php">New Student</a>
                <a class ="menulista" href="viewStudent.php">View Student</a>
                <a class ="menulista" href="updateStudent.php">Update Student</a>
                <a class ="menulista" href="deleteStudent.php">Delete Student</a>
				<a class ="menulista" href="logout.php">Logout</a>													
				</li>
				</ul>
</center>
			  <div align="center">
					<h4>WELCOME <?php echo $check." ";?></h4>					
			</div>
		</body>
</html>
