<?php
include_once('main.php');
?>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="style.css">
	<script src = "JS/login_logout.js"></script>
 <style>
  .box{
  margin :60px auto ;
  width : 400px;
  align-items :center;
  background-color: #fff;
  padding: 40px 40px 36px;
  border-radius:5px ;
  box-shadow:  0 0 8px ;
  }  
 </style>               
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
                         <a class ="menulista" href="logout.php" >Logout</a>						    								
						</li>
				</ul>
        <center>
      <div align="center">
				<h4>WELCOME<?php echo $check." ";?></h4>							 
     </div>
     <div class="box">
            <h2>Exam Schedule List</h2>
            <form action="#" method="post">
              <table cellpadding="6">
                  <tr>
                      <td>Exam Schedule Id:</td>
                      <td><input type="text" name="id" placeholder="Exam Schedule ID"></td>
                  </tr>
                  <tr>
                      <td>Exam Date:</td>
                      <td><input type="text" name="examDate" placeholder="Exam Date(y-m-d)"></td>
                  </tr>
                  <tr>
                      <td>Exam Time:</td>
                      <td><input type="text" name="examTime" placeholder="Exam Time(H:M - H:M)"></td>
                  </tr>
                  <tr>
                      <td>Course ID:</td>
                      <td><input type="text" name="courseId" placeholder="Course ID"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><input type="submit" name="submit"value="Submit"></td>
                  </tr>
              </table>
            </form>
        </center>
</div>
		</body>
</html>
<?php
include_once('mysqlcon.php');
if(!empty($_POST['submit'])){
    $id = $_POST['id'];
    $examDate = $_POST['examDate'];
    $examTime = $_POST['examTime'];
    $courseId = $_POST['courseId'];
    $sql = "INSERT INTO examschedule VALUES('$id','$examDate','$examTime','$courseId')";
    $success = mysqli_query($link, $sql);
    if(!$success) {
        die('Could not enter data: '.mysqli_connect_error());
    }
    echo "Entered data successfully\n";
}
?>
