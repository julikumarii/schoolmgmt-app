<?php
include('main.php');

?>
<html>	
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		    <link rel="stylesheet" type="text/css" href="style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
<style>
.box{
 margin :60px auto ;
  width : 305px;
  align-items :center;
  background-color: #fff;
  padding: 40px 40px 36px;
  border-radius:5px ;
  box-shadow:  0 0 10px ;
}
</style>
			
</head>
<img src="logo.jpg" height="180" width="100%" alt="School Management System"/>				
		  <div class="header"><h1>SMS</h1></div>
			  <div class="divtopcorner">				  
				</div>
<center>
	<ul>
	<li class="manulista" align="center">
	 <a class ="menulista" href="index.php">Home</a>
	<a class ="menulista" href="updateAttendence.php">Update Attendence</a>
	<a class ="menulista" href="deleteatt.php">Delete Attendende</a>
	<a class ="menulista" href="logout.php">Logout</a>						   								
		</li>
		</ul>
</center>
<br>
<div align="center">
			<h4>WELCOME! <?php echo $check." ";?></h4>							  
			</div>
			<div class="box">
			  <form align="center" action="#" method="post">
			  
			  Student id: <input type="text" name="stdid" placeholder="Student id" />
			  <br></br>
			  Date:       <input type ="text" name="date" placeholder="YYYY-MM-DD" />
			  <br></br>
			  <input type="submit" name="submit" value="delete" />
			  </form>
			
<div align="center">
 <?php  
	 if(!empty($_POST['submit'])){
	 //print_r($_REQUEST);
		 $s=$_REQUEST['stdid'];
		$d= $_REQUEST['date'];
		$sql="DELETE FROM attendance WHERE attendedid='$s' and date='$d'";
			$s=mysqli_query($link,$sql);
			if(!$s)
			{
			echo "problem";
			}
			echo "success";
			 }
?>
</div>
</div>
</html>

