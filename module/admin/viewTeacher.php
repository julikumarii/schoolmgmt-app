<?php
include_once('main.php');
include_once('mysqlcon.php');
$sql = "SELECT * FROM teachers;";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $picname = $row['id'];
    $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].
    '</td><td>'.$row['address'].'</td><td>'.$row['gender'].'</td><td>'.$row['dob'].
    '</td><td>'.$row['hiredate'];
   
}
?>
<html>
 <head>
		    <link rel="stylesheet" type="text/css" href="style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchTeacher.js"></script>
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
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getTeacher(this.value);"></td>
                </tr>
            </table>
        </center>     
        <center><h2>Teachers List</h2></center>
        <center>
            <table border="1" id='teacherList'>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Hire Date</th>
                
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
