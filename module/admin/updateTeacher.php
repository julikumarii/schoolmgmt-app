<?php
include_once('main.php');
?>
<html>
    
<head>
	 <link rel="stylesheet" type="text/css" href="style.css">
		<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchForUpdateTeacher.js"></script>
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
							<a class ="menulista" href="index.php">Course</a>
							<a class ="menulista" href="index.php">Attendance</a>
							<a class ="menulista" href="index.php">Exam Schedule</a>							
							<a class ="menulista" href="index.php">Report</a>
                            <a class ="menulista" href="logout.php"> Logout</a>			
                        </li>
				</ul>			 
        <center>
        <div align="center">
			<h4>WELCOME<?php echo $check." ";?></h4>						
         </div>
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getTeacherForUpdate(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center>
          <h2>Only One Teacher Can Update at a time.</h2>
            <form action="#" method="post" onsubmit="return newTeacherValidation();" enctype="multipart/form-data">
                <table border="1" cellpadding="6" id='updateTeacherData'>
                </table>
            </form>
        </center>
		</body>
</html>
<?php
include_once('mysqlcon.php');
if(!empty($_POST['submit'])){
    $Id = $_POST['id'];
    $Name = $_POST['name'];
    $Password = $_POST['password'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $gender = $_POST['gender'];
    $DOB = $_POST['dob'];
    $hiredate = $_POST['hiredate'];
    $stuAddress = $_POST['address'];
  
    $sql = "UPDATE teachers SET id='$Id', name='$Name', password='$Password', phone='$Phone', email='$Email', address='$stuAddress', gender='$gender', dob='$DOB', hiredate='$hiredate' WHERE id='$Id'";
    $success = mysqli_query($link, $sql );
    if(!$success) {
        die('Could not Update data: '.mysqli_connect_error());
    }
    echo "Update data successfully\n";
}
?>
