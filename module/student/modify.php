<?php
include_once('main.php');

$st=mysqli_query($link,"SELECT password  FROM students WHERE id='$check' ");
$stinfo=mysqli_fetch_array($st);

?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="style.css">
				<script src = "JS/login_logout.js"></script>
				<script src = "JS/modifyValidate.js"></script>
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
		</head>
<style>
input {
	 text-align: center;
    background-color:white;
 }
 
 .box{
  margin :60px auto ;
  width : 350px;
  align-items :center;
  background-color: #fff;
  padding: 48px 40px 36px;
  border-radius:5px ;
  box-shadow:  0 0 10px ;
  }		
</style>
    <body>
	<img src="logo.jpg" height="180" width="100%" alt="School Management System"/>      		 
	 <div class="header"><h1>SMS</h1></div>
		<div class="divtopcorner"></div>
<center>
	<ul>
		 <li class="manulist" >
			<a class ="menulista" href="index.php">Home</a>
		   <a class ="menulista" href="modify.php">Change Password</a>
			<a class ="menulista" href="course.php">My Course And Result</a>
			<a class ="menulista" href="exam.php">My Exam Schedule</a>
			<a class ="menulista" href="attendance.php">My Attendance</a>
			<a class ="menulista" href="logout.php" >Logout</a>
											
	    </li>
	</ul>
</center>
			
<div align="center">
	<h4>WELCOME ! <?php echo $check." ";?> </h4>	
</div>

<div class= "box">
		<div align="center" class="mod">
		<h1>Change Password</h1>
				
		<form  onsubmit="return modifyValidate();" action="modifysave.php" method="post">
			  <table border="1">
			  <tr>
			  <th>Student Password</th>
			 </tr>
			  <tr>
				<br>
			  <td><input type="text"  id="password" name="password" value="<?php echo $stinfo['password'];?>"/></td>
			</table>
			  <br/>
			  <input type="submit" value="Change Password" background-color="#2196F3"/>
			  </form>
</div>					
</div>
</body>
</html>

