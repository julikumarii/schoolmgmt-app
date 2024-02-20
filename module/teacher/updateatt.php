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
			
</head>
<img src="logo.jpg" height="180" width="100%" alt="School Management System"/>
		  <div class="header"><h1>SMS</h1></div>
			  <div class="divtopcorner">  </div>
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
			   <div align="center">
				<h4>WELCOME! <?php echo $check." ";?></h4>
				</div>
		
<?php
				
$atten=$_REQUEST['mystudent'];
 $d=$_REQUEST['date'];
 
	   
	   $sql="insert into attendance(date,attendedid) values('$d','$atten')";
	  $sd= mysqli_query($link,$sql);
	  
	  if(!$sd){
	  echo "problem";
	  }
	  echo "succeed";
  
?>
</html>
		