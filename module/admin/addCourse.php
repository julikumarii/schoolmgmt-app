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
        <script src = "JS/currentDate.js"></script>
        <script src = "JS/getClassName.js"></script>
        <script src = "JS/getCourseIdAndNAme.js"></script>

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
<img src="logo.jpg" height="180" width="100%" alt="School Management System"/>
    <body onload="getClassNameAndId();">
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
						<a class ="menulista" href="index.php">Exam Schedule</a>							
						<a class ="menulista" href="index.php">Report</a>
                         <a class ="menulista" href="logout.php"> Logout</a>																
			</li>
		</ul>
</center>
<br>
             <div align="center">
				<h4>WELCOME! <?php echo $check." ";?></h4>               
            </div>
        <center>
            <div class="box">
            <h2>Course Registration For Student.</h2>
            <form action="#" method="post">
                <table cellpadding="6">
                    <tr>
                        <td>Class ID:</td>
                        <td><select id="className" onchange="getCourseNameAndId();"></select></td>
                    </tr>
                    <tr>
                        <td>Course Name:</td>
                        <td><select id="courseName" onchange="setCourseId()"></select></td>
                    </tr>
                    <tr>
                        <td><input id="courseId"type="hidden" name="name" placeholder="Enter Name"></td>
                    </tr>
                    <tr>
                        <td>Teacher ID:</td>
                        <td><select id="teacherId" onchange="setTeacherId()"></select></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" name="submit"value="Submit" onclick="getAllCourseStudentAndSubmit();"></td>
                    </tr>
                </table>
            </form>
         </div>
        </center>
		</body>
</html>
