<?php
include_once('main.php');

?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<style>
.box{
  margin :60px auto ;
  width : 400px;
  align-items :center;
  background-color: #fff;
  padding: 40px 40px 36px;
  border-radius:5px ;
  box-shadow:  0 0 10px ;
  }
			</style>
	            
		</head>
    <body  onload="ajaxRequestToGetCourseCurrentExamSchedule();">
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
								<a class ="menulista" href="logout.php"> Logout</a>	
					</li>
				</ul>
      </center>	
			  <br></br>
			  <div align="center">
				<h4>WELCOME! <?php echo $check." ";?> </h4>
             </div>
	    <div class="box">
                <div align="center" style="background-color:#2196F3;">
                     Select Runing Course Exam Schedule:<select id="curcourse" onchange="ajaxRequestToGetCourseCurrentExamSchedule();" name="curcourse"><?php  


         $classget = "SELECT  DISTINCT id,name FROM course where classid in(select DISTINCT classid from students where id='$check') and studentid='$check'";
         $res= mysqli_query($link,$classget);

          while($clnn=mysqli_fetch_array($res))
         {
          echo '<option value="',$clnn['id'],'" >',$clnn['name'],'</option>';
         }
?>
</select>
</div>	
<br>
<div align="center">
<table id="mycourseexamschedule" border="1" >
</table>
</div>	
</div>					
</body>
</html>

