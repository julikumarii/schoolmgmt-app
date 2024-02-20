<?php
include('main.php');
?>
<html>		
<head>            
	 <link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-1.12.3.js"></script>
	<script type="text/javascript" src="studentClassCourse.js"></script>
	<script src = "JS/login_logout.js"></script>
			
</head>
<img src="logo.jpg" height="180" width="100%" alt="School Management System"/>
		  <div class="header"><h1>SMS</h1></div>
			  <div class="divtopcorner">	
			</div>
<center>
		<ul>
		  <li class="manulista" align="center">
				 <a class ="menulista" href="index.php">Home</a>
				<a class ="menulista" href="deleterep.php">Delete report</a>
				<a class ="menulista" href="logout.php">Logout</a>						   																	
		</li>
	</ul>
</center>
	  <div align="center">
		<h4>WELCOME <?php echo $check." ";?></h4>								 
		</div>
</html>
		
<?php

echo '<form align="center"  action="#" method="post">';
$conn=mysqli_connect('localhost','root','');
if(!$conn){
   die('error connecting ');
   }
   mysqli_select_db($conn,'schoolmanagementsystemdb');
   
  $sql="SELECT  reportid,courseid,studentid,message FROM report where teacherid='$check'";
  $res=mysqli_query($link,$sql);
  
 while($rn=mysqli_fetch_array($res))
{
	echo "<center>";
	$string ="<table align='center' border='2'>
	<tr>
		<th> Report id</th>
		<th>Course id </th>
		<th>Student id </th>
		<th> Message</th>
		<th> checkbox</th>
		
		</tr>
	<tr>
	<td>$rn[0] </td>
	<td> $rn[1]</td>
	<td> $rn[2]</td>
	<td> $rn[3]</td>
	<td><input type='checkbox' checked='checked' name='attendance[]' value=".$rn[0]." />  </td>
	";
	echo $string;
	
     }
	 echo "</table>";
	 
   echo "<input class='menulista' type='submit' value='Delete'name='submit' />";
  echo " </form> </html>";
  echo "</center>";

?>


<?php
//print_r($_REQUEST);
if(!empty($_POST['submit'])){
$atten=$_REQUEST['attendance'];
foreach($atten as $a)
   {
	   
	   $sql="delete from report where reportid='$a'";
		$s=mysqli_query($link,$sql);
   }

if(!$s)
{
echo "failed!!!";
}
echo "succeed";
}
?>
</div>

