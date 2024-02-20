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
			  <div class="divtopcorner"> </div>
			<br/><br/>
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
					<h4>WELCOME!<?php echo $check." ";?></h4>								    
				</div>
			 
		</html>
<center> <h1>Students Attendance</h1></center>
<?php
include('main.php');
$cid=$_REQUEST['id'];
$clid=$_REQUEST['classid'];

echo '<form  action="makeattendance.php" method="post">';
$conn=mysqli_connect('localhost','root','');
if(!$conn){
   die('error connecting ');
   }
   mysqli_select_db($conn,'schoolmanagementsystemdb');
   
  $sql="SELECT studentid FROM course where classid='$clid' and id='$cid' and teacherid='$check'";
  $res=mysqli_query($link,$sql);
  
 while($rn=mysqli_fetch_array($res))
{
	echo "<center>";
	echo $rn['0'];
    echo "<input type='checkbox' checked='checked' name='attendance[]' value=".$rn[0]." /> <br/><br />";
}
	 
echo "<input class='menulista' type='submit' value='Make Attendance' />";
echo " </form> </html>";
echo "</center>";

?>